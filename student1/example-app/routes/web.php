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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/", [StudentController::class, "index"])->name("index");
Route::get("/add", [StudentController::class, "create"]);
Route::post("/add", [StudentController::class, "add"]);
Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::post('/edit/{id}', [StudentController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [StudentController::class, 'destroy'])->name('delete');