@extends('layouts.app')
@section('content')
    <h1>Course Details</h1>
    <p>ID: {{ $course->id }}</p>
    <p>Name: {{ $course->name }}</p>
    <p>Teacher: {{ $course->teacher ? $course->teacher->name : '-' }}</p>
    <a href="{{ route('courses.index') }}">Back</a>
@endsection 