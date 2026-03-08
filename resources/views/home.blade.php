@extends('layouts.app')

@section('content')
    <div class="card shadow-sm border-0">
        <div class="card-body p-5">
            <h1 class="fw-bold">{{ $profile->name }}</h1>
            <h4 class="text-muted">{{ $profile->title }}</h4>
            <hr>
            <p class="lead">{{ $profile->bio }}</p>
        </div>
    </div>
@endsection