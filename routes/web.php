<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customers', [\App\Http\Controllers\CustomerController::class, 'index']);
Route::post('/customers', [\App\Http\Controllers\CustomerController::class, 'store']);
Route::get('/customers/create', [\App\Http\Controllers\CustomerController::class, 'create']);
Route::get('/customers/{id}/edit', [\App\Http\Controllers\CustomerController::class, 'edit']);
Route::put('/customers/{id}', [\App\Http\Controllers\CustomerController::class, 'update']);
