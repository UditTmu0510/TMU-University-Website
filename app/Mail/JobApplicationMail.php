<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class JobApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $applicationDetails; // Data passed to email

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($applicationDetails)
    {
        $this->applicationDetails = $applicationDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Job Application Confirmation')
                    ->view('emails.job_application')
                    ->with([
                        'applicationDetails' => $this->applicationDetails
                    ]);
    }
}