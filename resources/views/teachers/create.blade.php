@extends('layouts.app')
@section('content')
    <h1>Create Teacher</h1>
    <form action="{{ route('teachers.store') }}" method="POST">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')<div>{{ $message }}</div>@enderror
        </div>
        <button type="submit">Create</button>
    </form>
    <a href="{{ route('teachers.index') }}">Back</a>
@endsection 