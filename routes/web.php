<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index']);
Route::get('/show/{id}', [PostController::class, 'show']);



Route::get('/login', [AuthController::class , 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/sign', [AuthController::class , 'create']);
Route::post('/sign/store', [AuthController::class , 'store']);




Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [PostController::class, 'dashboard']);
    Route::get('/post/create', [PostController::class , 'create']);
    Route::post('/post/store', [PostController::class , 'store']);
    Route::get('/post/edit/{id}', [PostController::class , 'edit']);
    Route::post('/post/update/{id}', [PostController::class , 'update']);
    Route::get('/post/delete/{id}', [PostController::class , 'destroy']);
});


