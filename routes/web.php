<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\MailController;


use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendEmailJob;


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
Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');

Route::resource('/dashboard', AdminController::class)->only([
    'index'
]);

Route::resource('/', UserController::class)->only([
    'index'
]);

Route::resource('/slider', SliderController::class)->except([
    'show'
]);

Route::resource('/blog', BlogController::class);

Route::get('/form', [UserController::class, 'form'])->name('user-form');
Route::post('/contactus', [UserController::class, 'contactus'])->name('contactus');

Route::get('/testroute', function() {
    $name = "shamskhus";

    Mail::to('samsadalam272@gmail.com')->send(new MyTestMail($name));
});

Route::get('/send-email', [MailController::class, 'sendEmail']);


Route::get('/mail', function(){

    $userMail = 'samsadalam272@gmail.com';
    dispatch(new SendEmailJob($userMail));

    dd("successful");

});