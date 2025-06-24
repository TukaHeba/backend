@extends('layouts.app')
@section('content')
    <h1>Teacher Details</h1>
    <p>ID: {{ $teacher->id }}</p>
    <p>Name: {{ $teacher->name }}</p>
    <a href="{{ route('teachers.index') }}">Back</a>
@endsection 