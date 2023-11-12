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
Route::get('user/create', function () {
    return view('users.user');
});
Route::post('user/create', [App\Http\Controllers\UserController::class, 'store']);
Route::get('user/index', [App\Http\Controllers\UserController::class,'index']);
Route::get('user/update/{id}', [App\Http\Controllers\UserController::class,'edit']);

Route::post('user/update/{id}', [App\Http\Controllers\UserController::class,'update']);
// Route::get('users/create',[App\Http\Controllers\UserController::class, 'create']);
// Route::post('users/create',[App\Http\Controllers\UserController::class, 'save']);
