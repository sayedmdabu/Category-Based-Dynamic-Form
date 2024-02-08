<!-- resources/views/users/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>User Details</h1>
    <div>
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
    </div>
    <a href="{{ route('users.index') }}" class="btn btn-primary">Back to Users</a>
@endsection
