<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\userController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/searchUser', [userController::class, 'searchUser'])->name('searchUser');

Route::get('/search', [studentController::class, 'search'])->name('search');

Route::get('students/{id}/nilai', [StudentController::class, 'menu_nilai']);

Route::resource('students', StudentController::class);

Route::resource('userCrud', userController::class);