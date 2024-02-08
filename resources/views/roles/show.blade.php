<!-- resources/views/roles/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Role Details</h1>
    <div>
        <p><strong>Name:</strong> {{ $role->name }}</p>
    </div>
    <a href="{{ route('roles.index') }}" class="btn btn-primary">Back to Roles</a>
@endsection
