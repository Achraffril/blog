<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\blogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [blogController::class, 'index']);

Route::get('/post/create', [blogController::class , 'create']);
Route::post('/post/store', [blogController::class , 'store']);

Route::get('/login', [AuthController::class , 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/sign', [AuthController::class , 'create']);
Route::post('/sign/store', [AuthController::class , 'store']);




Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [BlogController::class, 'dashboard']);
});


