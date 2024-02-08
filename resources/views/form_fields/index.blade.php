<!-- resources/views/form_fields/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Form Fields</h1>
    <a href="{{ route('form_fields.create') }}" class="btn btn-primary">Create New Form Field</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Form Template</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formFields as $formField)
                <tr>
                    <td>{{ $formField->id }}</td>
                    <td>{{ $formField->name }}</td>
                    <td>{{ $formField->type }}</td>
                    <td>{{ $formField->form_template_id }}</td>
                    <td>
                        <a href="{{ route('form_fields.show', $formField->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('form_fields.edit', $formField->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('form_fields.destroy', $formField->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
