<!-- resources/views/form_submissions/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Form Submission</h1>
    <form action="{{ route('form_submissions.update', $formSubmission->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Add form fields according to your form template -->
        <!-- For example, text inputs, checkboxes, radio buttons, etc. -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
