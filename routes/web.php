<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('',[StudentController::class,'index']);
Route::get('create', [StudentController::class,'create']);
Route::post('store', [StudentController::class, 'store'])->name('student.store');
Route::get('read', [StudentController::class,'read'])->name('student.read');

Route::get('edit/{cnic}',[StudentController::class,'edit'])->name('student.edit');
Route::post('update/{cnic}',[StudentController::class,'update'])->name('student.update');

Route::get('delete/{cnic}',[StudentController::class,'delete'])->name('student.delete');