<!-- resources/views/form_fields/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Form Field</h1>
    <form action="{{ route('form_fields.update', $formField->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $formField->name }}" required>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <select class="form-control" id="type" name="type" required>
                <option value="text" @if ($formField->type == 'text') selected @endif>Text</option>
                <option value="checkbox" @if ($formField->type == 'checkbox') selected @endif>Checkbox</option>
                <option value="radio" @if ($formField->type == 'radio') selected @endif>Radio</option>
                <!-- Add other types as needed -->
            </select>
        </div>
        <div class="form-group">
            <label for="form_template_id">Form Template ID:</label>
            <input type="number" class="form-control" id="form_template_id" name="form_template_id" value="{{ $formField->form_template_id }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
