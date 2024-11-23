<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', [MovieController::class, 'index'])->name('movies.index');
Route::post('/search', [MovieController::class, 'search'])->name('movies.search');
Route::post('/send-email', [MovieController::class, 'sendEmail'])->name('movies.sendEmail');
