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

route::get('/student/create',function (){
    return view('students.student');
    });
    Route::post('student/create',[App\Http\Controllers\StudentController::class,'store'])->name('create');
    Route::get('student/index',[App\Http\Controllers\StudentController::class,'index'])->name('index');
    Route::get('student/update/{id}',[App\Http\Controllers\StudentController::class,'edit'])->name('edit');
    Route::post('student/update/{id}',[App\Http\Controllers\StudentController::class,'update'])->name('update');
    Route::delete('student/{id}',[App\Http\Controllers\StudentController::class,'destroy'])->name('delete');
    