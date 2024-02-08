<!-- resources/views/form_submissions/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create New Form Submission</h1>
    <form action="{{ route('form_submissions.store') }}" method="POST">
        @csrf
        <!-- Add form fields according to your form template -->
        <!-- For example, text inputs, checkboxes, radio buttons, etc. -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
