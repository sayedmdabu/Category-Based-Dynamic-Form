<!-- resources/views/categories/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Category Details</h1>
    <div>
        <p><strong>Name:</strong> {{ $category->name }}</p>
        <p><strong>Description:</strong> {{ $category->description }}</p>
    </div>
    <a href="{{ route('categories.index') }}" class="btn btn-primary">Back to Categories</a>
@endsection
