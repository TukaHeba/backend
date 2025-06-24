@extends('layouts.app')
@section('content')
    <h1>Edit Student Info</h1>
    <form action="{{ route('student-infos.update', $studentInfo) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Student</label>
            <select name="student_id">
                <option value="">Select Student</option>
                @foreach($students as $student)
                    <option value="{{ $student->id }}" {{ old('student_id', $studentInfo->student_id) == $student->id ? 'selected' : '' }}>{{ $student->name }}</option>
                @endforeach
            </select>
            @error('student_id')<div>{{ $message }}</div>@enderror
        </div>
        <div>
            <label>Address</label>
            <input type="text" name="address" value="{{ old('address', $studentInfo->address) }}">
            @error('address')<div>{{ $message }}</div>@enderror
        </div>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('student-infos.index') }}">Back</a>
@endsection 