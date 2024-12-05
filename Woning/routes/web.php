<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('woning/store', [App\Http\Controllers\WoningController::class, 'store']);


Route::get('woning', [App\Http\Controllers\WoningController::class, 'index']);

Route::get('woning/create', [App\Http\Controllers\WoningController::class, 'create']);

Route::get('woning/edit/{id}',   [App\Http\Controllers\WoningController::class, 'edit']);

Route::post('woning/update/{id}',   [App\Http\Controllers\WoningController::class, 'update']);

Route::post('woning/destroy/{id}',  [App\Http\Controllers\WoningController::class, 'destroy']);