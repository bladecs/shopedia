<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/login_register/login_register_page');
});

Route::get('/landing',function(){
    return view('landing/landing_page');
});
