<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('woning', [App\Http\Controllers\WoningController::class, 'index']);

