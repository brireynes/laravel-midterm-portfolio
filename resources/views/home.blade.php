@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<div class="card shadow-sm border-0 lift-hover">
    <div class="card-body p-5">
        <div class="row align-items-center">

            <div class="col-md-7">

                <h1 class="display-5 fw-semibold">
                    Hi,<br>
                    I'm <span class="text-primary">{{ $profile->name }}</span><br>
                    {{ $profile->title }}
                </h1>

                <p class="lead text-muted mt-3">
                    {{ $profile->bio }}
                </p>

                <!-- SOCIAL ICONS -->
                <div class="mt-4 social-icons">

                    <a href="{{ $profile->facebook ?? 'https://www.facebook.com/yaboifufu/' }}"
                       target="_blank"
                       class="text-dark me-3">
                        <i class="bi bi-facebook fs-3"></i>
                    </a>

                    <a href="{{ $profile->instagram ?? 'https://www.instagram.com/_davidreynes/' }}"
                       target="_blank"
                       class="text-dark me-3">
                        <i class="bi bi-instagram fs-3"></i>
                    </a>

                    <a href="{{ $profile->github ?? 'https://github.com/brireynes' }}"
                       target="_blank"
                       class="text-dark me-3">
                        <i class="bi bi-github fs-3"></i>
                    </a>

                    @if($profile->linkedin)
                        <a href="{{ $profile->linkedin }}"
                           target="_blank"
                           class="text-dark">
                            <i class="bi bi-linkedin fs-3"></i>
                        </a>
                    @endif

                </div>

            </div>

            <div class="col-md-5 text-center mt-4 mt-md-0">

                <img src="{{ asset('images/' . $profile->image) }}"
                     alt="{{ $profile->name }}"
                     class="img-fluid rounded-circle shadow lift-hover"
                     style="width: 280px; height: 280px; object-fit: cover;">

            </div>

        </div>
    </div>
</div>


<!-- ABOUT SECTION -->
<div class="card shadow-sm border-0 mt-5 lift-hover">
    <div class="card-body p-5">

        <h3 class="fw-bold mb-4">About Me</h3>

        <div class="row align-items-center">

            <div class="col-md-4 text-center">
                <img src="{{ asset('images/aboutme.jpg') }}"
                     class="img-fluid rounded shadow lift-hover"
                     width="250">
            </div>

            <div class="col-md-8">

                <p>
                    Hello! My name is Brian David Reynes, a Computer Science student
                    at the University of St. La Salle.
                </p>

                <p>
                    I enjoy building software applications, exploring web technologies,
                    and developing interactive digital experiences.
                </p>

            </div>

        </div>

    </div>
</div>


<!-- HOBBIES SECTION -->
<div class="card shadow-sm border-0 mt-5 lift-hover">
    <div class="card-body p-5">

        <h3 class="fw-bold mb-4">My Hobbies</h3>

        <div class="row align-items-center mb-3">

            <div class="col-md-2 text-center">
                <img src="{{ asset('images/coding.gif') }}"
                     class="img-fluid rounded lift-hover">
            </div>

            <div class="col-md-10">
                <p>Coding lets me build and bring ideas to life.</p>
            </div>

        </div>

        <div class="row align-items-center mb-3">

            <div class="col-md-2 text-center">
                <img src="{{ asset('images/gaming.gif') }}"
                     class="img-fluid rounded lift-hover">
            </div>

            <div class="col-md-10">
                <p>Gaming sharpens critical thinking and teamwork.</p>
            </div>

        </div>

        <div class="row align-items-center">

            <div class="col-md-2 text-center">
                <img src="{{ asset('images/watching.gif') }}"
                     class="img-fluid rounded lift-hover">
            </div>

            <div class="col-md-10">
                <p>Watching series helps me relax and explore new stories.</p>
            </div>

        </div>

    </div>
</div>


<!-- AFFILIATIONS SECTION -->
<div class="card shadow-sm border-0 mt-5 lift-hover">
    <div class="card-body p-5">

        <h3 class="fw-bold mb-4">Affiliations</h3>

        <div class="text-center mb-3">
            <img src="{{ asset('images/cover.png') }}"
                 class="img-fluid shadow"
                 width="500">
        </div>

        <ul>
            <li>Computer Science Society Member</li>
            <li>Google Developer Student Club</li>
            <li>Philippine Programming Organization</li>
        </ul>

    </div>
</div>

@endsection