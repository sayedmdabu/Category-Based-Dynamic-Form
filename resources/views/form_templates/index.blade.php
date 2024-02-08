<!-- resources/views/form_templates/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Form Templates</h1>
    <a href="{{ route('form_templates.create') }}" class="btn btn-primary">Create New Form Template</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formTemplates as $formTemplate)
                <tr>
                    <td>{{ $formTemplate->id }}</td>
                    <td>{{ $formTemplate->name }}</td>
                    <td>{{ $formTemplate->description }}</td>
                    <td>
                        <a href="{{ route('form_templates.show', $formTemplate->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('form_templates.edit', $formTemplate->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('form_templates.destroy', $formTemplate->id) }}" method="POST" style="display:inline">
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
