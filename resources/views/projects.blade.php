@extends('layouts.app')

@section('content')

<div class="card shadow-sm border-0 lift-hover">
    <div class="card-body p-5">
        <h1 class="fw-bold mb-4">Projects</h1>

        <div class="row">
            @foreach($projects as $project)
                <div class="col-md-6 mb-4">
                    <div class="card h-100 shadow-sm border-0 lift-hover">
                        @if($project->image)
                            <img src="{{ asset('images/' . $project->image) }}"
                                 alt="{{ $project->title }}"
                                 class="card-img-top"
                                 style="height: 250px; object-fit: cover;">
                        @endif

                        <div class="card-body">
                            <h4 class="fw-bold">{{ $project->title }}</h4>
                            <p class="text-muted mb-0">{{ $project->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection