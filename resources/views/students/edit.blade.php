@extends('layouts.app')
@section('content')
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name', $student->name) }}">
            @error('name')<div>{{ $message }}</div>@enderror
        </div>
        <div>
            <label>Courses</label>
            <div>
                @foreach($courses as $course)
                    <label>
                        <input type="checkbox" name="courses[]" value="{{ $course->id }}" {{ (in_array($course->id, old('courses', $student->courses->pluck('id')->toArray()))) ? 'checked' : '' }}>
                        {{ $course->name }}
                    </label><br>
                @endforeach
            </div>
            @error('courses')<div>{{ $message }}</div>@enderror
        </div>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('students.index') }}">Back</a>
@endsection 