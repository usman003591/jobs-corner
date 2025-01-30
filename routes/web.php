<?php

use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;

Route::get('/search', [JobController::class, 'search'])->name('search');
Route::get('/tags/{tag:name}', TagController::class);
Route::get('/', [JobController::class, 'index']);

Route::middleware('guest')->group(function () {

    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);

});


Route::middleware('auth')->group(function () {
    Route::post('/logout', [SessionController::class, 'destroy']);
    Route::get('/jobs/create', [JobController::class, 'create']);
    Route::post('/jobs', [JobController::class, 'store']);

});


