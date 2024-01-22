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

Route::get('login','UserController@login')->name('loginform');
Route::post('login','UserController@postLogin')->name('postlogin');
Route::get('logout','UserController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');

/////////students////
Route::get('students','StudentController@index')->name('students');
Route::get('students/add','StudentController@add')->name('students.add');
Route::post('students/add','StudentController@store')->name('students.store');
Route::get('students/edit/{id}','StudentController@edit')->name('students.edit');
Route::post('students/update/{id}','StudentController@update')->name('students.update');
Route::get('students/delete/{id}','StudentController@delete')->name('students.delete');


/////////////////councellor
Route::get('councellors','TeacherController@index')->name('councellors');
Route::get('councellors/add','TeacherController@add')->name('councellors.add');
Route::post('councellors/add','TeacherController@store')->name('councellors.store');
Route::get('councellors/edit/{id}','TeacherController@edit')->name('councellors.edit');
Route::post('councellors/update/{id}','TeacherController@update')->name('councellors.update');
Route::get('councellors/delete/{id}','TeacherController@delete')->name('councellors.delete');