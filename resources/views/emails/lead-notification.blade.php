<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Lead Notification - Digital Daur</title>
    <style>
        /* Mobile Specific Overrides for Mail Clients */
        @media only screen and (max-width: 520px) {
            .outer-wrapper { padding: 15px 8px !important; }
            .card-container { border-radius: 16px !important; }
            .header-padding { padding: 25px 16px !important; }
            .body-padding { padding: 22px 14px !important; }
            .details-label { width: 36% !important; padding: 10px 8px !important; font-size: 10px !important; white-space: nowrap !important; }
            .details-value { padding: 10px 10px !important; font-size: 13px !important; }
            .cta-btn { display: block !important; width: 100% !important; box-sizing: border-box !important; text-align: center !important; padding: 14px 15px !important; font-size: 13px !important; }
            .badge-source { font-size: 10px !important; padding: 3px 8px !important; }
        }
    </style>
</head>
<body style="margin: 0; padding: 0; background-color: #F1F5F9; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; -webkit-font-smoothing: antialiased; color: #1E293B;">

    <!-- Email Outer Wrapper -->
    <table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0" class="outer-wrapper" style="background-color: #F1F5F9; padding: 25px 10px;">
        <tr>
            <td align="center">
                <!-- Main Email Card Container -->
                <table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0" class="card-container" style="max-width: 560px; background-color: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08); border: 1px solid #E2E8F0;">
                    
                    <!-- Header Section with Dark Slate & Orange Accent Gradient -->
                    <tr>
                        <td class="header-padding" style="background-color: #0F172A; background-image: linear-gradient(135deg, #0F172A 0%, #1E293B 100%); padding: 30px 24px; text-align: center; border-bottom: 4px solid #EC4813;">
                            <!-- Brand Title / Badge -->
                            <div style="display: inline-block; background-color: rgba(236, 72, 19, 0.18); border: 1px solid rgba(236, 72, 19, 0.4); padding: 4px 12px; border-radius: 20px; margin-bottom: 10px;">
                                <span style="color: #FF7A50; font-size: 10px; font-weight: 800; letter-spacing: 1.2px; text-transform: uppercase;">🚀 NEW LEAD ALERT</span>
                            </div>
                            <h1 style="color: #ffffff; font-size: 22px; font-weight: 800; margin: 0; padding: 0; letter-spacing: -0.3px;">
                                DIGITAL <span style="color: #EC4813;">DAUR</span>
                            </h1>
                            <p style="color: #94A3B8; font-size: 12px; margin-top: 5px; margin-bottom: 0;">
                                Website Customer Enquiry Notification
                            </p>
                        </td>
                    </tr>

                    <!-- Body Content Area -->
                    <tr>
                        <td class="body-padding" style="padding: 28px 24px;">

                            <!-- Greeting / Introduction -->
                            <p style="font-size: 14px; line-height: 1.6; color: #334155; margin-top: 0; margin-bottom: 20px;">
                                Hello Admin,
                                <br>
                                You have received a new customer lead from the <strong>Digital Daur</strong> website. Below are the details:
                            </p>

                            <!-- Lead Details Box -->
                            <table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 14px; overflow: hidden; margin-bottom: 24px;">
                                
                                <!-- Customer Name -->
                                <tr>
                                    <td width="36%" class="details-label" style="padding: 12px 14px; border-bottom: 1px solid #E2E8F0; background-color: #F1F5F9; font-size: 11px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.4px; white-space: nowrap;">
                                        Full Name
                                    </td>
                                    <td width="64%" class="details-value" style="padding: 12px 14px; border-bottom: 1px solid #E2E8F0; font-size: 14px; font-weight: 700; color: #0F172A; word-break: break-word;">
                                        {{ $lead['name'] ?? 'N/A' }}
                                    </td>
                                </tr>

                                <!-- Phone Number -->
                                <tr>
                                    <td width="36%" class="details-label" style="padding: 12px 14px; border-bottom: 1px solid #E2E8F0; background-color: #F1F5F9; font-size: 11px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.4px; white-space: nowrap;">
                                        Phone Number
                                    </td>
                                    <td width="64%" class="details-value" style="padding: 12px 14px; border-bottom: 1px solid #E2E8F0; font-size: 14px; font-weight: 700; color: #EC4813; word-break: break-all;">
                                        <a href="tel:{{ $lead['phone'] ?? '' }}" style="color: #EC4813; text-decoration: none;">
                                            📞 {{ $lead['phone'] ?? 'N/A' }}
                                        </a>
                                    </td>
                                </tr>

                                <!-- Form Source / Type -->
                                <tr>
                                    <td width="36%" class="details-label" style="padding: 12px 14px; border-bottom: 1px solid #E2E8F0; background-color: #F1F5F9; font-size: 11px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.4px; white-space: nowrap;">
                                        Form Source
                                    </td>
                                    <td width="64%" class="details-value" style="padding: 12px 14px; border-bottom: 1px solid #E2E8F0; font-size: 12px; font-weight: 600; color: #334155;">
                                        <span class="badge-source" style="display: inline-block; background-color: #FFF1ED; color: #EC4813; font-weight: 700; font-size: 11px; padding: 4px 10px; border-radius: 6px; border: 1px solid #FFDCD2; word-break: break-word;">
                                            {{ $lead['form_type'] ?? 'General Enquiry' }}
                                        </span>
                                    </td>
                                </tr>

                                <!-- Page Submitted From -->
                                @if(!empty($lead['page_url']))
                                <tr>
                                    <td width="36%" class="details-label" style="padding: 12px 14px; border-bottom: 1px solid #E2E8F0; background-color: #F1F5F9; font-size: 11px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.4px; white-space: nowrap;">
                                        Page Link
                                    </td>
                                    <td width="64%" class="details-value" style="padding: 12px 14px; border-bottom: 1px solid #E2E8F0; font-size: 11px; color: #2563EB; word-break: break-all;">
                                        <a href="{{ $lead['page_url'] }}" target="_blank" style="color: #2563EB; text-decoration: underline;">
                                            {{ $lead['page_url'] }}
                                        </a>
                                    </td>
                                </tr>
                                @endif

                                <!-- Submission Time -->
                                <tr>
                                    <td width="36%" class="details-label" style="padding: 12px 14px; border-bottom: 1px solid #E2E8F0; background-color: #F1F5F9; font-size: 11px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.4px; white-space: nowrap;">
                                        Submitted At
                                    </td>
                                    <td width="64%" class="details-value" style="padding: 12px 14px; border-bottom: 1px solid #E2E8F0; font-size: 12px; color: #64748B;">
                                        {{ $lead['submitted_at'] ?? now()->format('d M Y, h:i A') }}
                                    </td>
                                </tr>

                                <!-- User IP Address -->
                                @if(!empty($lead['ip_address']))
                                <tr>
                                    <td width="36%" class="details-label" style="padding: 12px 14px; background-color: #F1F5F9; font-size: 11px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.4px; white-space: nowrap;">
                                        IP Address
                                    </td>
                                    <td width="64%" class="details-value" style="padding: 12px 14px; font-size: 12px; color: #64748B;">
                                        {{ $lead['ip_address'] }}
                                    </td>
                                </tr>
                                @endif

                            </table>

                            <!-- Call Action CTA Button -->
                            @if(!empty($lead['phone']))
                            <table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-bottom: 20px;">
                                <tr>
                                    <td align="center">
                                        <a href="tel:{{ $lead['phone'] }}" class="cta-btn" style="display: inline-block; background-color: #EC4813; color: #ffffff; font-size: 13px; font-weight: 800; text-decoration: none; padding: 14px 22px; border-radius: 12px; text-transform: uppercase; letter-spacing: 0.5px; box-shadow: 0 4px 12px rgba(236, 72, 19, 0.3);">
                                            📞 CALL {{ strtoupper($lead['name'] ?? 'CLIENT') }} NOW
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            @endif

                            <p style="font-size: 12px; color: #64748B; margin: 0; line-height: 1.5; text-align: center;">
                                Please follow up with this lead as soon as possible.
                            </p>

                        </td>
                    </tr>

                    <!-- Footer Section -->
                    <tr>
                        <td style="background-color: #F8FAFC; padding: 18px 20px; text-align: center; border-top: 1px solid #E2E8F0;">
                            <p style="font-size: 11px; color: #94A3B8; margin: 0; line-height: 1.5;">
                                © {{ date('Y') }} <strong>Digital Daur</strong> - Digital Marketing & Software Solutions Lucknow.
                                <br>
                                Automated Lead System Notification.
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
