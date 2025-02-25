<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;


Route::get('/user', [DashboardController::class, 'user']);
Route::get('/admin', [DashboardController::class, 'admin']);
