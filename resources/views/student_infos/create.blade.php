@extends('layouts.app')
@section('content')
    <h1>Create Student Info</h1>
    <form action="{{ route('student-infos.store') }}" method="POST">
        @csrf
        <div>
            <label>Student</label>
            <select name="student_id">
                <option value="">Select Student</option>
                @foreach($students as $student)
                    <option value="{{ $student->id }}" {{ old('student_id') == $student->id ? 'selected' : '' }}>{{ $student->name }}</option>
                @endforeach
            </select>
            @error('student_id')<div>{{ $message }}</div>@enderror
        </div>
        <div>
            <label>Address</label>
            <input type="text" name="address" value="{{ old('address') }}">
            @error('address')<div>{{ $message }}</div>@enderror
        </div>
        <button type="submit">Create</button>
    </form>
    <a href="{{ route('student-infos.index') }}">Back</a>
@endsection 