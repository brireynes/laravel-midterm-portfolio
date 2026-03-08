@extends('layouts.app')

@section('content')
    <h1 class="fw-bold mb-4">Projects</h1>

    @foreach($projects as $project)
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-body">
                <h4 class="fw-bold">{{ $project->title }}</h4>
                <p class="mb-0">{{ $project->description }}</p>
            </div>
        </div>
    @endforeach
@endsection