<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentInfoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('courses', CourseController::class);
Route::resource('student-infos', StudentInfoController::class);
Route::resource('teachers', TeacherController::class);
