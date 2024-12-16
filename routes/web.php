<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
    
Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

// // Admin routes
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

// User routes
Route::get('/home', [UserController::class, 'index'])->name('home');