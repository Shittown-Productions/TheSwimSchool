<?php

namespace App\Http\Controllers\Groups;


use App\Http\Controllers\Controller;
use App\Http\Requests\LessonSignUp;
use App\Library\Lesson\Enroll;
use Illuminate\Support\Facades\Redirect;

class SwimmerController extends Controller
{
    /**
     * @param LessonSignUp $request
     * @return Redirect
     */
    public function store(LessonSignUp $request)
    {
        (new Enroll())->handle();
        return redirect('/thank-you');
    }
}
