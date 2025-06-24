<?php

namespace App\Http\Controllers;

use App\Models\StudentInfo;
use Illuminate\Http\Request;
use App\Http\Requests\StudentInfo\StoreStudentProfileRequest;
use App\Http\Requests\StudentInfo\UpdateStudentProfileRequest;
use App\Models\Student;

class StudentInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentInfos = StudentInfo::with('student')->get();
        return view('student_infos.index', compact('studentInfos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        return view('student_infos.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentProfileRequest $request)
    {
        $studentInfo = StudentInfo::create($request->validated());
        return redirect()->route('student-infos.index')->with('success', 'Student Info created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentInfo $studentInfo)
    {
        $studentInfo->load('student');
        return view('student_infos.show', compact('studentInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentInfo $studentInfo)
    {
        $students = Student::all();
        return view('student_infos.edit', compact('studentInfo', 'students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentProfileRequest $request, StudentInfo $studentInfo)
    {
        $studentInfo->update($request->validated());
        return redirect()->route('student-infos.index')->with('success', 'Student Info updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentInfo $studentInfo)
    {
        $studentInfo->delete();
        return redirect()->route('student-infos.index')->with('success', 'Student Info deleted successfully.');
    }
}
