<?php

namespace App\Http\Controllers\Groups;

use App\Http\Controllers\Controller;
use App\Lesson;
use App\Mail\Admin\WaitList;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;


class WaitListController extends Controller
{
    /**
     * @param Request $request
     * @param Lesson $lesson
     * @return Redirect
     */
    public function store(Request $request, Lesson $lesson)
    {
        $waitingSwimmer = $request->validate([
            'name' => 'required|string|max:191',
            'email' => 'required|string|max:191',
            'phone' => 'required|max:20',
            'date_of_birth' => 'required'
        ]);

        try{
            $waitingSwimmer['lesson_id'] = $lesson->id;
        } catch (\Exception $e) {
            Log::error($e);
            session()->flash("warning", "Something has gone wrong. The lesson id in the url does not match the lesson id in the wait list form data.");
            return back();
        }

        if($lesson->waitlist->count()){
            foreach ($lesson->waitlist as $swimmer)
            {
                if($swimmer->email === $waitingSwimmer['email']){
                    session()->flash('warning', 'Email already on the wait list.');
                    return back();
                }
            }
        }


        $waitingSwimmer['date_of_birth'] = Carbon::parse($waitingSwimmer['date_of_birth'])->format('Y-m-d');

        $newWaitingSwimmer = \App\WaitList::create($waitingSwimmer);

        $this->sendWaitListAdminEmail($lesson);

        Log::info("New swimmer added to the wait list: ID $newWaitingSwimmer->id, Name: $newWaitingSwimmer->name");
        session()->flash('success', 'You have been added to the wait list!');
        return back();
    }

    /**
     * @param Lesson $lesson
     */
    private function sendWaitListAdminEmail(Lesson $lesson)
    {
        // Send a wait list filling up email to the admin if the wait list
        Log::info("Sending wait list email to admins about lesson ID: $lesson->id");
        foreach(config('mail.leadDestEmails') as $email){
            Log::info("Sending Wait List admin email to $email");
            Mail::to($email)->send(new WaitList($lesson));
        }
    }
}
