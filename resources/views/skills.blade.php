@extends('layouts.app')

@section('content')
    <div class="card shadow-sm border-0">
        <div class="card-body p-5">
            <h1 class="fw-bold mb-5">Skills</h1>

            {{-- Hard Skills --}}
            <h3 class="text-primary fw-bold mb-4">Hard Skills</h3>

            @foreach($hardSkills as $skill)
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="fw-semibold fs-5">{{ $skill->skill_name }}</span>
                        <span class="text-primary fw-bold">{{ $skill->level }}%</span>
                    </div>

                    <div class="progress" style="height: 12px;">
                        <div class="progress-bar bg-primary"
                            role="progressbar"
                            style="width: {{ $skill->level }}%;"
                            aria-valuenow="{{ $skill->level }}"
                            aria-valuemin="0"
                            aria-valuemax="100">
                        </div>
                    </div>
                </div>
            @endforeach

            <hr class="my-5">

            {{-- Soft Skills --}}
            <h3 class="text-success fw-bold mb-4">Soft Skills</h3>

            @foreach($softSkills as $skill)
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="fw-semibold fs-5">{{ $skill->skill_name }}</span>
                        <span class="text-success fw-bold">{{ $skill->level }}%</span>
                    </div>

                    <div class="progress" style="height: 12px;">
                        <div class="progress-bar bg-success"
                            role="progressbar"
                            style="width: {{ $skill->level }}%;"
                            aria-valuenow="{{ $skill->level }}"
                            aria-valuemin="0"
                            aria-valuemax="100">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection