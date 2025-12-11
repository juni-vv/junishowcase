<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', [App\Http\Controllers\AgeController::class, 'about']);
Route::get('/fox', function () {
    return view('fox');
});
Route::get('/downloads', function () {
    return view('downloads');
});

Route::get('/', [App\Http\Controllers\MainController::class, 'home']);
