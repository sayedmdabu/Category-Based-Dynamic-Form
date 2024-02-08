<!-- resources/views/permissions/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Permissions</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->id }}</td>
                    <td>{{ $permission->name }}</td>
                    <td>
                        <a href="{{ route('permissions.show', $permission->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" style="display:inline">
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
