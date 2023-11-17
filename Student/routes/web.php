<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Studencontroller;
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
    return view('studentmanage.index');
});
Route::get('/create', function () {
    return view('studentmanage.create');
});


Route::post('/create',[Studencontroller::class,'create']);
Route::get('/update/{id}',[Studencontroller::class,'edit']);
Route::post('/update/{id}',[Studencontroller::class,'update']);
Route::get('/',[Studencontroller::class,'index']);
Route::delete('/delete/{id}',[Studencontroller::class,'destroy']);

