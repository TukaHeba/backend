@extends('layouts.app')
@section('content')
    <h1>Create Course</h1>
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')<div>{{ $message }}</div>@enderror
        </div>
        <div>
            <label>Teacher</label>
            <select name="teacher_id">
                <option value="">Select Teacher</option>
                @foreach($teachers as $teacher)
                    <option value="{{ $teacher->id }}" {{ old('teacher_id') == $teacher->id ? 'selected' : '' }}>{{ $teacher->name }}</option>
                @endforeach
            </select>
            @error('teacher_id')<div>{{ $message }}</div>@enderror
        </div>
        <button type="submit">Create</button>
    </form>
    <a href="{{ route('courses.index') }}">Back</a>
@endsection 