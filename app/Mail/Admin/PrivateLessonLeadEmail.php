<?php

namespace App\Mail\Admin;

use App\PrivateLessonLead;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PrivateLessonLeadEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var PrivateLessonLeadEmail
     */
    public $privateLessonLead;


    /**
     * PrivateLessonLeadEmail constructor.
     * @param PrivateLessonLead $privateLessonLead
     */
    public function __construct(PrivateLessonLead $privateLessonLead)
    {
        $this->privateLessonLead = $privateLessonLead;
    }


    /**
     * @return $this
     */
    public function build()
    {
        return $this->subject('Private Lesson Request')
            ->markdown('email.admin.privateLessonLead')
            ->with(['lead' => $this->privateLessonLead]);
    }
}
