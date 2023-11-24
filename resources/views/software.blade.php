@extends('layout')

@section('main_content')
<section class="about introducing" data-aos="fade-up" data-aos-duration="3000">
    <div class="container">
        <div class="about__wrap">
            <div class="about__content">
                <h2>About my software</h2>
                <img src="{{ asset('img/photo-laptops.avif') }}" alt="About My Software Picture">
                <p>I started my career developing software for PC, Web and Android devices. During my work, I've made a
                    lot of useful programs which can make your life much easier and more effective.</p>
                <div class="center-align">
                    <a class="btn btn--more" href="#software">More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="software" id="software">
    <div class="software__hero bg-color-block" data-aos="fade-up" data-aos-duration="3000">
        <div class="container">
            <div class="introduction">
                <img src="{{ asset('img/coding-screen.avif') }}" class="col-img"
                    alt="My software for PC, Web and Android">
                <div class="content">
                    <h2>My software for PC, Web and Android</h2>
                    <p>
                        Explore my collection of awesome software designed for both Android, Web and Windows platforms –
                        there's something for everyone! These applications are not only super useful but also entirely
                        free. Dive into the world of user-friendly tools that enhance your Android and Windows
                        experience. From utilities to entertainment, I've got you covered! Enjoy the benefits of quality
                        software without spending a dime.</p>
                    <div class="center-align">
                        <a class="btn btn--more" href="#pc-software">More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="software__wrap">
            <ul class="software__list" id="pc-software">
                @foreach ($softwarePosts as $softwarePost)
                    <li class="games__item card" data-aos="fade-up" data-aos-duration="2000">
                        <img src="{{ asset('img/' . $softwarePost->software_image) }}" class="games__item-image" alt="Software Image">
                        <div class="description">
                            <div class="text">
                                <h5>{{ $softwarePost->software_title }}</h5>
                                <p>{{ $softwarePost->software_content }}</p>
                            </div>
                            <div class="type"><span>Platform: </span> {{ $softwarePost->software_type }}</div>
                            @if ($softwarePost->software_available === 1)
                                <a href="{{ $softwarePost->software_link }}" target="_blank" class="btn btn--play">Get</a>
                            @else
                                <a class="btn btn--play unfinished">Get</a>
                            @endif
                        </div>
                        <img class="bg--img" src="{{ asset('img/background.png') }}" alt="Card background">
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
@endsection