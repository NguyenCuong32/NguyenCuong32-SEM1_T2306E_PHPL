<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/users/user/', function(){
    return view('users/user');
});
Route::post('/user/create', [UserController::class, 'store']);


Route::get('users/index',[UserController::class,'index']);

   

 Route::get('users/update/{id}',[UserController::class,'edit']);


Route::post('users/update/{id}',[UserController::class,'update']);


Route::get("/student/create",function(){
    return view('students/create');
});

Route::post('/student/create',
[StudentController::class,'store']);


 
Route::get('/student/index',[StudentController::class,'index']);



Route::post('/student/update/{id}',[StudentController::class,'update']);

Route::get('/student/update/{id}',[StudentController::class,'edit']);

Route::delete('/student/delete/{id}',[StudentController::class,'destroy']);






use App\Http\Controllers\ProductControllder;





Route::get('/product/create', function () {
    return view('product/create');
});
Route::post('/product/create',
[ProductControllder::class,'store']);


 
Route::get('/product/index',[ProductControllder::class,'index']);


Route::post('/product/update/{id}',[ProductControllder::class,'update']);

Route::get('/product/update/{id}',[ProductControllder::class,'edit']);

// bài thi




