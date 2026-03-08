@extends('layouts.app')

@section('content')
    <h1 class="fw-bold mb-4">Experience / Education</h1>

    @foreach($experiences as $experience)
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-body">
                <h4 class="fw-bold">{{ $experience->position }}</h4>
                <p class="mb-1"><strong>Company / School:</strong> {{ $experience->company }}</p>
                <p class="mb-0"><strong>Year:</strong> {{ $experience->year }}</p>
            </div>
        </div>
    @endforeach
@endsection