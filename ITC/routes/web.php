<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',function(){
    echo "Chamathka";
});

/*Route::get('/about', function () {
    return view('aboutus');
});*/

Route::get('/about', [PagesController::class, 'indexaboutus']);
