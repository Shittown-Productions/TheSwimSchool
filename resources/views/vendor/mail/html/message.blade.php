@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img src="{{asset('img/logos/the-swim-school.png')}}">
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            <div>
                <div style="padding-top:10px; text-align:center !important;">
                    <a href="tel:1-941-773-1424" target="blank"><img style="padding: 10px;" src="{{asset('img/icons/phone-24x24.png')}}"></a>
                    <a href="mailto:theswimschoolfl@gmail.com"><img style="padding: 10px;" src="{{asset('img/icons/email-24x24.png')}}"></a>
                    <a href="https://www.facebook.com/theswimschoolfl/" target="blank"><img style="padding: 10px;" src="{{asset('img/icons/facebook-box-24x24.png')}}"></a>
                </div>

                <p>
                    &copy; {{ date('Y') }} The Swim School. All rights reserved.
                </p>
            </div>
        @endcomponent
    @endslot
@endcomponent
