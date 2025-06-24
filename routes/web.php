<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentInfoController;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentController::class);
Route::resource('coursessss', CourseController::class);
Route::resource('coursessss', CourseController::class);

Route::resource('student-infos', StudentInfoController::class);
Route::resource('teachers', TeacherController::class);
