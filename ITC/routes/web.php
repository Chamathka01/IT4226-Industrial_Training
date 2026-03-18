<?php

//use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('register');
});

Route::get('/login',function(){
    return view('login');
});

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::post('/login', [LoginController::class, 'login'])->name('login.check');

/*Route::get('/about', function () {
    return view('aboutus');
});*/

/*Route::get('/about', [PagesController::class, 'indexaboutus']);*/
