@extends('layouts.app')
@section('content')
    <h1>Teachers</h1>
    <a href="{{ route('teachers.create') }}">Create Teacher</a>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->id }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>
                        <a href="{{ route('teachers.show', $teacher) }}">Show</a>
                        <a href="{{ route('teachers.edit', $teacher) }}">Edit</a>
                        <form action="{{ route('teachers.destroy', $teacher) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection 