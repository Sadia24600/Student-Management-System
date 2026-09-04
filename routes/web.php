<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Show Student Form
Route::get('/studentform', function () {
    return view('students_information.studentForm');
});

//Create Student Form
Route::post('/studentform',[StudentController::class,'createStudentForm']);

//Show Student Table
Route::get('/studenttable',[StudentController::class,'studentTable']);

//Show Student Edit Form
Route::get('/update/student/{id}',[StudentController::class,'studentUpdate']);

//Update Student Form
Route::post('/update/student',[StudentController::class,'updateStudentForm']);

//Delete Student
Route::get('/delete/student/{id}',[StudentController::class,'deleteStudent']);
