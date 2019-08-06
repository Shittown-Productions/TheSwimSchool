<?php

namespace App\Observers;

use App\Models\Athlete;
use App\Library\Helpers\RandomString;

class AthleteObserver
{
    /**
     * Handle the athlete "created" event.
     *
     * @param  \App\Models\Athlete  $athlete
     * @return void
     */
    public function created(Athlete $athlete)
    {
        $athlete->hash = RandomString::generate();
        $athlete->save();
    }

    /**
     * Handle the athlete "updated" event.
     *
     * @param  \App\Models\Athlete  $athlete
     * @return void
     */
    public function updated(Athlete $athlete)
    {
        //
    }

    /**
     * Handle the athlete "deleted" event.
     *
     * @param  \App\Models\Athlete  $athlete
     * @return void
     */
    public function deleted(Athlete $athlete)
    {
        //
    }

    /**
     * Handle the athlete "restored" event.
     *
     * @param  \App\Models\Athlete  $athlete
     * @return void
     */
    public function restored(Athlete $athlete)
    {
        //
    }

    /**
     * Handle the athlete "force deleted" event.
     *
     * @param  \App\Models\Athlete  $athlete
     * @return void
     */
    public function forceDeleted(Athlete $athlete)
    {
        //
    }
}
