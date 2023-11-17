<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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


Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}/update', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{id}/destroy', [StudentController::class, 'destroy'])->name('students.destroy');

// Route::post('/student/create', [App\Http\Controllers\UserController::class, 'store']);
// route::get('get/index',[App\Http\Controllers\UserController::class,'create']);
// Route::get('/student/update/{id}', [App\Http\Controllers\UserController::class, 'edit']);
// Route::post('/student/update/{id}', [App\Http\Controllers\UserController::class, 'update']);
