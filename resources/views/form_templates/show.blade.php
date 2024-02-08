<!-- resources/views/form_templates/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Form Template Details</h1>
    <div>
        <p><strong>Name:</strong> {{ $formTemplate->name }}</p>
        <p><strong>Description:</strong> {{ $formTemplate->description }}</p>
    </div>
    <a href="{{ route('form_templates.index') }}" class="btn btn-primary">Back to Form Templates</a>
@endsection
