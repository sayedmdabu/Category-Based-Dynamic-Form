<!-- resources/views/submission_data/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create New Submission Data</h1>
    <form action="{{ route('submission_data.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="field_name">Field Name:</label>
            <input type="text" class="form-control" id="field_name" name="field_name" required>
        </div>
        <div class="form-group">
            <label for="field_value">Field Value:</label>
            <input type="text" class="form-control" id="field_value" name="field_value" required>
        </div>
        <div class="form-group">
            <label for="form_submission_id">Form Submission ID:</label>
            <input type="number" class="form-control" id="form_submission_id" name="form_submission_id" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
