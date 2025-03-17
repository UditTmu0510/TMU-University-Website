<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ThankYouMail extends Mailable
{
    use Queueable, SerializesModels;

    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function build()
    {
        return $this->subject('Thank You for Your Submission')
                    ->view('emails.thankyou')
                    ->with([
                        'firstName' => $this->firstName,
                        'lastName' => $this->lastName,
                    ]);
    }
}

