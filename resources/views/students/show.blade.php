@extends('layouts.app')
@section('content')
    <h1>Student Details</h1>
    <p>ID: {{ $student->id }}</p>
    <p>Name: {{ $student->name }}</p>
    <a href="{{ route('students.index') }}">Back</a>
@endsection 