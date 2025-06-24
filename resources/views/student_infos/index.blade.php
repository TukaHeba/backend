@extends('layouts.app')
@section('content')
    <h1>Student Infos</h1>
    <a href="{{ route('student-infos.create') }}">Create Student Info</a>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($studentInfos as $info)
                <tr>
                    <td>{{ $info->id }}</td>
                    <td>{{ $info->student ? $info->student->name : '-' }}</td>
                    <td>{{ $info->address }}</td>
                    <td>
                        <a href="{{ route('student-infos.show', $info) }}">Show</a>
                        <a href="{{ route('student-infos.edit', $info) }}">Edit</a>
                        <form action="{{ route('student-infos.destroy', $info) }}" method="POST" style="display:inline">
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