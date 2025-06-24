@extends('layouts.app')
@section('content')
    <h1>Create Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')<div>{{ $message }}</div>@enderror
        </div>
        <div>
            <label>Courses</label>
            <div>
                @foreach($courses as $course)
                    <label>
                        <input type="checkbox" name="courses[]" value="{{ $course->id }}" {{ (collect(old('courses'))->contains($course->id)) ? 'checked' : '' }}>
                        {{ $course->name }}
                    </label><br>
                @endforeach
            </div>
            @error('courses')<div>{{ $message }}</div>@enderror
        </div>
        <button type="submit">Create</button>
    </form>
    <a href="{{ route('students.index') }}">Back</a>
@endsection 