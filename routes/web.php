<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index']);
Route::get('/create', [UserController::class, 'create']);
Route::post('/store', [UserController::class, 'store']);
Route::get('/edit/{user}', [UserController::class, 'edit']);
Route::post('/update/{user}', [UserController::class, 'update']);
Route::get('/delete/{user}', [UserController::class, 'destroy']);
