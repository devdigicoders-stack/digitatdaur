<?php

namespace App\Http\Controllers;

use App\Mail\LeadNotificationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|regex:/^[6-9]\d{9}$/',
            'form_type' => 'nullable|string|max:255',
            'page_url' => 'nullable|string|max:500',
        ]);

        $leadData = [
            'name' => trim($validated['name']),
            'phone' => trim($validated['phone']),
            'form_type' => $request->input('form_type', 'General Callback Request'),
            'page_url' => $request->input('page_url') ?: ($request->header('referer') ?: url()->previous()),
            'submitted_at' => now()->format('d M Y, h:i A'),
            'ip_address' => $request->ip(),
        ];

        try {
            $adminEmail = env('ADMIN_NOTIFICATION_EMAIL');

            Mail::to($adminEmail)->send(new LeadNotificationMail($leadData));

            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your enquiry has been submitted successfully.',
            ]);
        } catch (\Throwable $e) {
            Log::error('Lead email notification failed: '.$e->getMessage(), [
                'lead' => $leadData,
                'exception' => $e->getMessage(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your enquiry has been submitted successfully.',
                'warning' => 'Notification log saved.',
            ]);
        }
    }
}
