@extends('layouts.app')

@section('content')
    <div class="card shadow-sm border-0">
        <div class="card-body p-5">
            <h1 class="fw-bold mb-4">Contact</h1>
            <p><strong>Email:</strong> {{ $contact->email }}</p>
            <p><strong>Phone:</strong> {{ $contact->phone }}</p>
            <p><strong>Location:</strong> {{ $contact->location }}</p>
            <p class="text-muted mb-0">Display only page as required. No forms included.</p>
        </div>
    </div>
@endsection