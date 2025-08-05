<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('/signup', [UserController::class, 'signup']);
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/getAllUsers', [UserController::class, 'getAllUsers']);
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
