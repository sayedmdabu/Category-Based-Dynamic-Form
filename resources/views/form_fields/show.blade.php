<!-- resources/views/form_fields/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Form Field Details</h1>
    <div>
        <p><strong>Name:</strong> {{ $formField->name }}</p>
        <p><strong>Type:</strong> {{ $formField->type }}</p>
        <p><strong>Form Template ID:</strong> {{ $formField->form_template_id }}</p>
    </div>
    <a href="{{ route('form_fields.index') }}" class="btn btn-primary">Back to Form Fields</a>
@endsection
