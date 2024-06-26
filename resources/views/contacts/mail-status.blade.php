@extends('layouts/layout')

@section('main_content')
    <section class="mail" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <div class="mail_wrap">
                @if ($mailStatus === 'success')
                    <div class="popup success card" data-aos="zoom-out" data-aos-duration="1000">
                        <img class="popup__image" src="{{ asset('img/confirm-icon.png') }}" alt="Confirm Image">
                        <div class="popup__title">
                            Your message was sent successfully!
                        </div>
                        <a class="btn btn--more" href={{ route('home') }}>Get Home</a>
                    </div>
                @elseif ($mailStatus === 'error')
                    <div class="popup error card" data-aos="zoom-out" data-aos-duration="1000">
                        <img class="popup__image" src="{{ asset('img/error-icon.png') }}" alt="Error Image">
                        <div class="popup__title">
                            There was an error sending your message. Please try again later.
                        </div>
                        <a class="btn btn--more" href={{ route('home') }}>Get Home</a>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
