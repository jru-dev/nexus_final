<?php

// routes/web.php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Route;

// Ruta principal
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Logout (requiere autenticación)
Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// Dashboard para usuarios normales (requiere autenticación)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserDashboardController::class, 'dashboard'])->name('user.dashboard');
});

// Dashboard para administradores (requiere autenticación)
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');
});