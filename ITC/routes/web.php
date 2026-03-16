<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',function(){
    echo "Chamathka";
});

/*Route::get('/about', function () {
    return view('aboutus');
});*/

Route::get('/about','PagesController@indexaboutus');
