<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/users', [UserController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);
