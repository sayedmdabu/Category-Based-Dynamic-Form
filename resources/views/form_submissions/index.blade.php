<!-- resources/views/form_submissions/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Form Submissions</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Category</th>
                <th>Form Template</th>
                <th>Submitted At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formSubmissions as $formSubmission)
                <tr>
                    <td>{{ $formSubmission->id }}</td>
                    <td>{{ $formSubmission->user->name }}</td>
                    <td>{{ $formSubmission->category->name }}</td>
                    <td>{{ $formSubmission->form_template->name }}</td>
                    <td>{{ $formSubmission->created_at }}</td>
                    <td>
                        <a href="{{ route('form_submissions.show', $formSubmission->id) }}" class="btn btn-info">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
