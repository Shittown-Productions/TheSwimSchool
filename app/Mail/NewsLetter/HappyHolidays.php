<?php

namespace App\Mail\NewsLetter;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class HappyHolidays extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var
     */
    public $emailAddress;

    /**
     * Create a new message instance.
     * @param $emailAddress
     * @return void
     */
    public function __construct($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.newsletter.covid')
                ->with(['emailAddress' => $this->emailAddress]);
    }
}
