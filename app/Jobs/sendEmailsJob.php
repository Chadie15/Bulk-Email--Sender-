<?php

namespace App\Jobs;

use App\Mail\CompanyMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class sendEmailsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $businessName;
    public $businessEmail;
    public $subject; // Add subject property

    /**
     * Create a new job instance.
     */
    public function __construct($businessName, $businessEmail, $subject)
    {
        $this->businessName = $businessName;
        $this->businessEmail = $businessEmail;
        $this->subject = $subject; // Initialize subject
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Send The Email
        Mail::to($this->businessEmail)->send(new CompanyMail($this->businessName, $this->subject));
    }
}
