@extends('layouts.app')
@section('content')
    <h1>Student Info Details</h1>
    <p>ID: {{ $studentInfo->id }}</p>
    <p>Student: {{ $studentInfo->student ? $studentInfo->student->name : '-' }}</p>
    <p>Address: {{ $studentInfo->address }}</p>
    <a href="{{ route('student-infos.index') }}">Back</a>
@endsection 