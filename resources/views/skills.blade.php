@extends('layouts.app')

@section('content')
    <h1 class="fw-bold mb-4">Skills</h1>

    <div class="row">
        @foreach($skills as $skill)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold">{{ $skill->skill_name }}</h5>
                        <p class="mb-2">Proficiency: {{ $skill->level }}%</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: {{ $skill->level }}%;" aria-valuenow="{{ $skill->level }}" aria-valuemin="0" aria-valuemax="100">
                                {{ $skill->level }}%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection