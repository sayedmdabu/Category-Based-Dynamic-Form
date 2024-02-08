<!-- resources/views/submission_data/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Submission Data Details</h1>
    <div>
        <p><strong>Field Name:</strong> {{ $submissionData->field_name }}</p>
        <p><strong>Field Value:</strong> {{ $submissionData->field_value }}</p>
        <p><strong>Form Submission ID:</strong> {{ $submissionData->form_submission_id }}</p>
    </div>
    <a href="{{ route('submission_data.index') }}" class="btn btn-primary">Back to Submission Data</a>
@endsection
