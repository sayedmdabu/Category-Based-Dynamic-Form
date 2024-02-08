@extends('layouts.app')

@section('content')
    <h1>Organization Details</h1>
    <div>
        <p><strong>Name:</strong> {{ $organization->name }}</p>
        <p><strong>Description:</strong> {{ $organization->description }}</p>
    </div>
    <a href="{{ route('organizations.index') }}" class="btn btn-primary">Back to Organizations</a>
@endsection
