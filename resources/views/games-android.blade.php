@extends('layouts/layout')

@section('main_content')
<section class="about introducing" data-aos="fade-up" data-aos-duration="2000">
    <div class="container">
        <div class="about__wrap">
            <div class="about__content">
                <h2>About my games for Android</h2>
                <img src="{{ asset('img/android-device.jpg') }}" alt="Android Games Intro Picture">
                <p>
                    Hello there! I create fun games and useful software for Android devices. I use cool tools like
                    Android Studio and Unity to bring these apps to life. On this page, you can check out all the
                    awesome games I've made for Android devices. Enjoy exploring!</p>
                <a class="btn btn--more" href="#games">More</a>
            </div>
        </div>
    </div>
</section>
<section class="games" id="games">
    <div class="games__hero bg-color-block" data-aos="fade-down" data-aos-duration="2000">
        <div class="container">
            <div class="introduction">
                <img src="{{ asset('img/image-phone-game.avif') }}" class="col-img" alt="Phone Game Image">
                <div class="content">
                    <h2>My games for Android</h2>
                    <p>I haven't made many games for android. These are all of the games which I have ever made and you
                        check out them all on my website. You can download them fast and for free.
                    </p>
                    <div class="center-align">
                        <a class="btn btn--more" href="#android-games">More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="games__wrap">
            <ul class="games__list" id="android-games">
                @foreach ($androidGamePosts as $gamePost)
                    <li class="games__item card" data-aos="fade-up" data-aos-duration="2000">
                        <img src="{{ asset('img/' . $gamePost->game_image) }}" class="games__item-image" alt="Games Image">
                        <div class="description">
                            <div class="text">
                                <h5>{{ $gamePost->game_title }}</h5>
                                <p>{{ $gamePost->game_content }}</p>
                            </div>
                            <div class="type"><span>Platform: </span> {{ $gamePost->game_type }}</div>
                            @if ($gamePost->game_available === 1)
                                <a href="{{ $gamePost->game_link }}" target="_blank" class="btn btn--play">Play</a>
                            @else
                                <a class="btn btn--play unfinished">Play</a>
                            @endif
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
@endsection