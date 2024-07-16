<?php

use Illuminate\Support\Facades\Route;

Route::get('/about us', function () {
    return view('welcabout use');
});

Route::get('/about me', function () {
    return view('about me');
});

Route::get('/call me baby', function () {
    return view('call me baby');
});

Routes::get ('users', [UserController::class, 'index']);