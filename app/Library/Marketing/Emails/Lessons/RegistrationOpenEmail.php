<?php


namespace App\Library\Marketing\Emails\Lessons;


use App\EmailList;
use App\Mail\NewsLetter\RegistrationOpen;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class RegistrationOpenEmail
{
    public static function send()
    {
        $emails = EmailList::where('subscribe', '=', true)->pluck('email')->all();

        foreach($emails as $email)
        {
            try{
                Log::info("Sending lesson registration open now email to $email");
                Mail::to($email)->send(new RegistrationOpen($email));
            } catch (\Exception $e) {
                Log::warning("Email error: $e");
            }
        }
    }
}