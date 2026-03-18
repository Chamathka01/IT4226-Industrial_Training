<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('register');
});

Route::get('/login',function(){
    return view('login');
});

/*Route::get('/about', function () {
    return view('aboutus');
});*/

/*Route::get('/about', [PagesController::class, 'indexaboutus']);*/
