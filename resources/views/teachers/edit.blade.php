@extends('layouts.app')
@section('content')
    <h1>Edit Teacher</h1>
    <form action="{{ route('teachers.update', $teacher) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name', $teacher->name) }}">
            @error('name')<div>{{ $message }}</div>@enderror
        </div>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('teachers.index') }}">Back</a>
@endsection 