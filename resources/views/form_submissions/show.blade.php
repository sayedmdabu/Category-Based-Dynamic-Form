<!-- resources/views/form_submissions/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Form Submission Details</h1>
    <div>
        <p><strong>User:</strong> {{ $formSubmission->user->name }}</p>
        <p><strong>Category:</strong> {{ $formSubmission->category->name }}</p>
        <p><strong>Form Template:</strong> {{ $formSubmission->form_template->name }}</p>
        <p><strong>Submitted At:</strong> {{ $formSubmission->created_at }}</p>
        <!-- Display submission data here -->
        <!-- For example, loop through submission data fields and values -->
    </div>
    <a href="{{ route('form_submissions.index') }}" class="btn btn-primary">Back to Form Submissions</a>
@endsection
