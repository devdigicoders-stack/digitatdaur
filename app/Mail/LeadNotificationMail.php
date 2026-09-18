<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class LeadNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $lead;

    /**
     * Create a new message instance.
     */
    public function __construct(array $lead)
    {
        $this->lead = $lead;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $clientName = $this->lead['name'] ?? 'New Customer';
        $phone = $this->lead['phone'] ?? '';
        $subject = "🚨 New Lead Received: {$clientName}".($phone ? " ({$phone})" : '').' - Digital Daur';

        return new Envelope(
            subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.lead-notification',
            with: [
                'lead' => $this->lead,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}
