<?php

use App\Http\Controllers\StudentController;
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

Route::get('/sinhvien/', function(){
    return view('student/sinhvien');
});

Route::get('/', function () {
    return view('student.index');
});
Route::get('/student/index', [StudentController::class,'index']);

Route::post('/sinhvien/create', [StudentController::class,'store']);

Route::get('/sinhvien/update/{id}', [StudentController::class,'edit']);

Route::post('/sinhvien/update/{id}', [StudentController::class,'update']);