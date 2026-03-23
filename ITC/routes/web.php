<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgotPasswordController;
use App\Models\Register;

Route::get('/', function () {
    return view('register');
});

Route::get('/login',function(){
    return view('login');
});

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::post('/login', [LoginController::class, 'login'])->name('login.check');

Route::get('/home', function () {
    if (!Session::has('user')) {
        return redirect('/login');
    }
    return view('home');
});

Route::get('/users', function () {
    $users = Register::all();
    return view('users', ['users' => $users]);
});

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::post('/forgot-password', [ForgotPasswordController::class, 'sendLink'])->name('password.send');
