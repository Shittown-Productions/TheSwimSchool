@component('mail::message')

<img alt="" style="margin-bottom: 2em;" src="{{asset('img/lessons/sun.jpg')}}">

@component('mail::panel')
# Final Weekend Session Registration Now Open
Registration is now open for our final weekend session of group swim lessons for the 2020 season. The start dates for this session have been changed to Saturday 8/22 and Sunday 8/23.
@endcomponent

@component('mail::button', ['url' => route('groups.lessons.index').'?utm_source=newsletter&utm_medium=email&utm_campaign=summer_lesson_registration'])
    Sign Up
@endcomponent

Sincerely,<br>
The Swim School

<div style="padding: 1em 0em 0em 0em; font-size: x-small; color: #9BA2AB">If you are no longer interested in receiving emails from The Swim School, you can <a href="{{route('newsletter.unsubscribe', ['email' => $emailAddress])}}">unsubscribe</a>.</div>
@endcomponent
