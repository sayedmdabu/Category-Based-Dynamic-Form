<!-- resources/views/submission_data/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Submission Data</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Field Name</th>
                <th>Field Value</th>
                <th>Form Submission</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($submissionData as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->field_name }}</td>
                    <td>{{ $data->field_value }}</td>
                    <td>{{ $data->form_submission_id }}</td>
                    <td>
                        <a href="{{ route('submission_data.show', $data->id) }}" class="btn btn-info">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
