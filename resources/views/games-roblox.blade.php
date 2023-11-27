@extends('layouts/layout')

@section('main_content')
<section class="about introducing" data-aos="fade-up" data-aos-duration="2000">
    <div class="container">
        <div class="about__wrap">
            <div class="about__content">
                <h2>About my games on Roblox</h2>
                <img src="{{ asset('img/roblox-intro.jfif') }}" alt="Roblox Games Intro Image">
                <p>I'm a Roblox developer and I have been creating my fascinating Roblox games for about 2,5 years. On
                    this page, you will find all of the Roblox projects I have ever made.</p>
                <div class="center-align">
                    <a class="btn btn--more" href="#games">More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="games" id="games">
    <div class="games__hero bg-color-block" data-aos="fade-down" data-aos-duration="2000">
        <div class="container">
            <div class="introduction">
                <img src="{{ asset('img/roblox-intro.jpg') }}" class="col-img" alt="Roblox Games About Image">
                <div class="content">
                    <h2>My games on Roblox</h2>
                    <p>I've made a lot of games on Roblox which have lots of genres. All these games are playable on all
                        kinds of devices only what you need is Roblox Launcher. These games are made by myself. So, if
                        you wanna check them out, you can click More and support me on Roblox.
                    </p>
                    <div class="center-align">
                        <a class="btn btn--more" href="#roblox-games">More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="games__wrap">
            <ul class="games__list" id="roblox-games">
                @foreach ($robloxGamePosts as $gamePost)
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