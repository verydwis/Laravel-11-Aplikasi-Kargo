<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customers', [\App\Http\Controllers\CustomerController::class, 'index']);
Route::post('/customers', [\App\Http\Controllers\CustomerController::class, 'store']);
Route::get('/customers/create', [\App\Http\Controllers\CustomerController::class, 'create']);
