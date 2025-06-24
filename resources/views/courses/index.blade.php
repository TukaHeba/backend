@extends('layouts.app')
@section('content')
    <h1>Courses</h1>
    <a href="{{ route('courses.create') }}">Create Course</a>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Teacher</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->teacher ? $course->teacher->name : '-' }}</td>
                    <td>
                        <a href="{{ route('courses.show', $course) }}">Show</a>
                        <a href="{{ route('courses.edit', $course) }}">Edit</a>
                        <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display:inline">
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