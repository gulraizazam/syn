<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('admin.home');
});

Route::get('login',[UserController::class,'login'])->name('loginform');
Route::post('login',[UserController::class,'postLogin'])->name('postlogin');
Route::get('logout',[UserController::class,'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/////////students////
Route::get('students',[StudentController::class,'index'])->name('students');
Route::get('students/add',[StudentController::class,'add'])->name('students.add');
Route::post('students/add',[StudentController::class,'store'])->name('students.store');
Route::get('students/edit/{id}',[StudentController::class,'edit'])->name('students.edit');
Route::post('students/update/{id}',[StudentController::class,'update'])->name('students.update');
Route::get('students/delete/{id}',[StudentController::class,'delete'])->name('students.delete');


/////////////////councellor
Route::get('councellors',[TeacherController::class,'index'])->name('councellors');
Route::get('councellors/add',[TeacherController::class,'add'])->name('councellors.add');
Route::post('councellors/add',[TeacherController::class,'store'])->name('councellors.store');
Route::get('councellors/edit/{id}',[TeacherController::class,'edit'])->name('councellors.edit');
Route::post('councellors/update/{id}',[TeacherController::class,'update'])->name('councellors.update');
Route::get('councellors/delete/{id}',[TeacherController::class,'delete'])->name('councellors.delete');