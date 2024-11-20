<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CompanyMail extends Mailable
{
    use Queueable, SerializesModels;
    public $companyName;
    public $subject;

    /**
     * Create a new message instance.
     */
    public function __construct($companyName, $subject)
    {
        $this->companyName = $companyName;
        $this->subject = $subject;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.company-emails',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, IlluminateMailMailablesAttachment>
     */
    public function attachments(): array
    {
        return [];
    }
}

