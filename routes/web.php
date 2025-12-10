<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\AgeController::class, 'about']);
Route::get('/fox', function () {
    return view('fox');
});

//Route::get('/', [App\Http\Controllers\MainController::class, 'home']);
//Route::get('/about', [App\Http\Controllers\AgeController::class, 'about']);
