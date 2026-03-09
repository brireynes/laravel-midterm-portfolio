@extends('layouts.app')

@section('content')

<!-- ACADEMIC ACHIEVEMENTS -->
<div class="card shadow-sm border-0 mt-4 lift-hover">
    <div class="card-body p-5">
        <h1 class="fw-bold mb-4">Experience / Education</h1>

        <h3 class="mb-4">Academic Achievements</h3>
        <div class="row align-items-center">
            <div class="col-md-9 col-12">
                <ul class="list-unstyled fs-5">
                    <li class="mb-3">
                        <strong>High Honors (Junior High School)</strong><br>
                        <span class="text-muted">Consistently high grades and excellence across core subjects.</span>
                    </li>
                    <li class="mb-3">
                        <strong>With Honors (Senior High School)</strong><br>
                        <span class="text-muted">Maintained a strong academic standing while actively joining organizations.</span>
                    </li>
                    <li class="mb-3">
                        <strong>Dean’s Lister (College)</strong><br>
                        <span class="text-muted">Outstanding academic performance in Computer Science courses.</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 text-center">
                <img src="{{ asset('images/Academic.jpg') }}"
                     alt="Academic Achievements"
                     class="img-fluid rounded shadow lift-hover"
                     style="max-height: 220px; object-fit: cover;">
            </div>
        </div>
    </div>
</div>

<!-- EXPERIENCE -->
<div class="card shadow-sm border-0 mt-5 lift-hover">
    <div class="card-body p-5">
        <h3 class="mb-4">Experience</h3>

        <div class="row">
            @foreach($experiences as $experience)
                <div class="col-md-4 mb-3">
                    <div class="p-3 border rounded bg-light lift-hover h-100">
                        <h5 class="fw-bold text-center">{{ $experience->position }}</h5>
                        <ul class="small mb-0">
                            <li>
                                <strong>{{ $experience->company }}</strong> — {{ $experience->year }}
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- CERTIFICATES -->
<div class="card shadow-sm border-0 mt-5 lift-hover">
    <div class="card-body p-5">
        <h3 class="mb-4">Certificates</h3>

        <div class="row g-3 text-center">
            <div class="col-6 col-md-4 col-lg-3">
                <img src="{{ asset('images/CSS.png') }}" class="img-fluid rounded shadow-sm lift-hover" alt="">
                <div class="small fw-semibold mt-2">CSS – Certificate of Membership</div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <img src="{{ asset('images/Reynes, Brian David, L.-1.png') }}" class="img-fluid rounded shadow-sm lift-hover" alt="">
                <div class="small fw-semibold mt-2">English for Career Development MOOC</div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <img src="{{ asset('images/CSS_MEMCERT.png') }}" class="img-fluid rounded shadow-sm lift-hover" alt="">
                <div class="small fw-semibold mt-2">CSS Membership – USLS</div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <img src="{{ asset('images/ISACA_CERT.png') }}" class="img-fluid rounded shadow-sm lift-hover" alt="">
                <div class="small fw-semibold mt-2">ISACA Student Group – Membership</div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <img src="{{ asset('images/CSS_CERT.png') }}" class="img-fluid rounded shadow-sm lift-hover" alt="">
                <div class="small fw-semibold mt-2">CSS Talks 2024 – Participation</div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <img src="{{ asset('images/AWS_CERT.png') }}" class="img-fluid rounded shadow-sm lift-hover" alt="">
                <div class="small fw-semibold mt-2">AWS Learning Club – Officership</div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <img src="{{ asset('images/AWS_CERT1.png') }}" class="img-fluid rounded shadow-sm lift-hover" alt="">
                <div class="small fw-semibold mt-2">AWS Learning Club – Officership (Alt)</div>
            </div>
        </div>
    </div>
</div>

@endsection