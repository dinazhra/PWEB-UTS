<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'login'])->name('page.login');
Route::post('/dashboard', [PageController::class,'dashboard'])->name('page.dashboard');
Route::get('/dashboard', [PageController::class,'dashboard']);
Route::get('/profile', [PageController::class,'profile'])->name('page.profile');
Route::get('/pengelolaan', [PageController::class,'pengelolaan'])->name('page.pengelolaan');
