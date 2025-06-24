@extends('layouts.app')
@section('content')
    <h1>Edit Course</h1>
    <form action="{{ route('courses.update', $course) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name', $course->name) }}">
            @error('name')<div>{{ $message }}</div>@enderror
        </div>
        <div>
            <label>Teacher</label>
            <select name="teacher_id">
                <option value="">Select Teacher</option>
                @foreach($teachers as $teacher)
                    <option value="{{ $teacher->id }}" {{ old('teacher_id', $course->teacher_id) == $teacher->id ? 'selected' : '' }}>{{ $teacher->name }}</option>
                @endforeach
            </select>
            @error('teacher_id')<div>{{ $message }}</div>@enderror
        </div>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('courses.index') }}">Back</a>
@endsection 