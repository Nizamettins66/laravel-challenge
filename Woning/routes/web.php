<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('woning/store', [App\Http\Controllers\WoningController::class, 'store']);
Route::get('woning', [App\Http\Controllers\WoningController::class, 'index']);

Route::get('woning/create', [App\Http\Controllers\WoningController::class, 'create']);



