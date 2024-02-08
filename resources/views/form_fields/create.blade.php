<!-- resources/views/form_fields/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create New Form Field</h1>
    <form action="{{ route('form_fields.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <select class="form-control" id="type" name="type" required>
                <option value="text">Text</option>
                <option value="checkbox">Checkbox</option>
                <option value="radio">Radio</option>
                <!-- Add other types as needed -->
            </select>
        </div>
        <div class="form-group">
            <label for="form_template_id">Form Template ID:</label>
            <input type="number" class="form-control" id="form_template_id" name="form_template_id" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
