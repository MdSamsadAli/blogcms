<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\User\UserController;

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


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.login');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'registerUser'])->name('auth.register');

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');


Route::get('/', [UserController::class, 'index'])->name('user-index');

Route::get('/slider/index', [SliderController::class, 'index'])->name('admin.slider.index');
Route::get('/slider/create', [SliderController::class, 'create'])->name('admin.slider.create');
Route::post('/slider/store', [SliderController::class, 'store'])->name('admin.slider.store');
Route::get('/slider/edit/{id}', [SliderController::class, 'edit'])->name('admin.slider.edit');
Route::post('/slider/update{id}', [SliderController::class, 'update'])->name('admin.slider.update');
Route::get('/slider/destroy/{id}', [SliderController::class, 'destroy'])->name('admin.slider.delete');