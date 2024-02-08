<!-- resources/views/permissions/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Permission Details</h1>
    <div>
        <p><strong>Name:</strong> {{ $permission->name }}</p>
    </div>
    <a href="{{ route('permissions.index') }}" class="btn btn-primary">Back to Permissions</a>
@endsection
