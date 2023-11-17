<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
route::get('/student/create',function (){
    return view('students.student');
    });
Route::post('student/create',[App\Http\Controllers\StudentController::class,'store']);
Route::get('student/index',[App\Http\Controllers\StudentController::class,'index']);
Route::post('student/index',[App\Http\Controllers\StudentController::class,'index']);
Route::get('student/update/{id}',[App\Http\Controllers\StudentController::class,'edit']);
Route::post('student/update/{id}',[App\Http\Controllers\StudentController::class,'update']);
