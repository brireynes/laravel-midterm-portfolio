@extends('layouts.app')

@section('content')

<div class="card shadow-sm border-0 lift-hover">
    <div class="card-body p-5">

        <h1 class="fw-bold mb-4">Contact</h1>

        <div class="row g-4">

            <!-- EMAIL -->
            <div class="col-md-4">
                <div class="p-4 border rounded text-center h-100">
                    <i class="bi bi-envelope-fill fs-1 text-primary"></i>
                    <h5 class="mt-3">Email</h5>
                    <a href="mailto:s2301263@usls.edu.ph" class="text-decoration-none">
                        s2301263@usls.edu.ph
                    </a>
                </div>
            </div>

            <!-- PHONE -->
            <div class="col-md-4">
                <div class="p-4 border rounded text-center h-100">
                    <i class="bi bi-telephone-fill fs-1 text-success"></i>
                    <h5 class="mt-3">Phone</h5>
                    <a href="tel:09629303613" class="text-decoration-none">
                        09629303613
                    </a>
                </div>
            </div>

            <!-- LOCATION -->
            <div class="col-md-4">
                <div class="p-4 border rounded text-center h-100">
                    <i class="bi bi-geo-alt-fill fs-1 text-danger"></i>
                    <h5 class="mt-3">Location</h5>
                    Bacolod City, Philippines
                </div>
            </div>

        </div>


        <!-- SOCIAL LINKS -->
        <div class="text-center mt-5">

            <h4 class="mb-3">Connect with me</h4>

            <div class="social-icons">

                <a href="{{ $profile->facebook ?? 'https://www.facebook.com/yaboifufu/' }}"
                   target="_blank"
                   class="text-dark me-4">
                    <i class="bi bi-facebook fs-2"></i>
                </a>

                <a href="{{ $profile->instagram ?? 'https://www.instagram.com/_davidreynes/' }}"
                   target="_blank"
                   class="text-dark me-4">
                    <i class="bi bi-instagram fs-2"></i>
                </a>

                <a href="{{ $profile->github ?? 'https://github.com/brireynes' }}"
                   target="_blank"
                   class="text-dark me-4">
                    <i class="bi bi-github fs-2"></i>
                </a>

                @if(isset($profile) && $profile->linkedin)
                    <a href="{{ $profile->linkedin }}"
                       target="_blank"
                       class="text-dark">
                        <i class="bi bi-linkedin fs-2"></i>
                    </a>
                @endif

            </div>

        </div>


        <!-- GOOGLE MAP LOCATION -->
        <div class="mt-5">

            <h4 class="text-center mb-3">My Location</h4>

            <iframe
                src="https://www.google.com/maps?q=Bacolod+City&output=embed"
                width="100%"
                height="300"
                style="border:0;"
                loading="lazy">
            </iframe>

        </div>


        <p class="text-muted text-center mt-4">
            Display-only contact page as required. No contact form included.
        </p>

    </div>
</div>

@endsection