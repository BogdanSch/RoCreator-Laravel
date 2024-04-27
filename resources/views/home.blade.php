@extends('layouts/layout')

@section('main_content')
    <section class="introducing bg-color" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <div class="introducing__wrap">
                <div class="content">
                    <h1>RoCreator</h1>
                    <p>I'm a games, websites and sofware developer. To create and develop all my projects I use C#, Python,
                        Lua, HTML + CSS + JS + PHP and Java programming languages.
                        Follow me on this site to get know more about me.
                    </p>
                    <div class="center-align">
                        <a class="btn btn--more" href="#about">More</a>
                    </div>
                </div>
                <img src="{{ asset('img/image-intro.png') }}" class="introducing__img" alt="Intro Page Image">
            </div>
        </div>
    </section>
    <section class="about" id="about" data-aos="zoom-in" data-aos-duration="2000">
        <div class="container">
            <div class="about__wrap">
                <div class="about__content">
                    <h2 class="about__title">About me</h2>
                    <img src="{{ asset('img/laptop-with-code.avif') }}" class="about__img" alt="Laptop with code image">
                    <p class="about__description">I'm a middle developer. I don't have a team yet but the quality of my
                        projects doesn't suffer from
                        that. I develop all my project on Roblox and Unity and Wordpress too, also I have my software for
                        android and desktop devices. Follow me on this site, if you wanna know more about me and my
                        projects.
                    </p>
                    <div class="center-align">
                        <a class="btn btn--more" href="#games">More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="games" id="games">
        <div class="games__hero bg-color-block" data-aos="fade-up" data-aos-duration="2000">
            <div class="container">
                <div class="introduction">
                    <img src="{{ asset('img/roblox-intro.jpg') }}" class="col-img" alt="Roblox games intro image">
                    <div class="content">
                        <h2>My games on Roblox</h2>
                        <p>I've created a bunch of fun and interesting projects on Roblox over this time, spanning various
                            genres. The best part? You can play them on any device as long as you have your Roblox
                            installed.
                            These games are my own creations, and I'd love for you to give them a try! Just click 'More' to
                            start your gaming adventure.
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
                    @foreach ($gamePosts as $gamePost)
                        <li class="games__item card" data-aos="fade-up" data-aos-duration="2000">
                            <img src="{{ asset('img/' . $gamePost->game_image) }}" class="games__item-image"
                                alt="Games Image">
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
                <div class="center-align">
                    <a class="btn btn--more center-align" href="./games-roblox">Get More</a>
                </div>
            </div>
        </div>
    </section>
    <section class="software" id="software">
        <div class="software__hero bg-color-block" data-aos="fade-up" data-aos-duration="2000">
            <div class="container">
                <div class="introduction">
                    <img src="{{ asset('img/software-intro.jpg') }}" class="col-img" alt="Software Intro Image">
                    <div class="content">
                        <h2>My software for PC, Web and Android</h2>
                        <p>This is a short list of all my software for Android and Windows platforms which you may find
                            useful to you, feel free to use it all! Just click 'More' to
                            start your new productive day.
                        </p>
                        <div class="center-align">
                            <a class="btn btn--more" href="#pc-soft">More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="software__wrap">
                <ul class="software__list" id="pc-soft">
                    @foreach ($softwarePosts as $softwarePost)
                        <li class="games__item card" data-aos="fade-up" data-aos-duration="2000">
                            <img src="{{ asset('img/' . $softwarePost->software_image) }}" class="games__item-image"
                                alt="Software Image">
                            <div class="description">
                                <div class="text">
                                    <h5>{{ $softwarePost->software_title }}</h5>
                                    <p>{{ $softwarePost->software_content }}</p>
                                </div>
                                <div class="type"><span>Platform: </span> {{ $softwarePost->software_type }}</div>
                                @if ($softwarePost->software_available === 1)
                                    <a href="{{ $softwarePost->software_link }}" target="_blank"
                                        class="btn btn--play">Get</a>
                                @else
                                    <a class="btn btn--play unfinished">Get</a>
                                @endif
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="center-align">
                    <a class="btn btn--more center-align" href="./software">Get More</a>
                </div>
            </div>
        </div>
    </section>
@endsection
