<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenyewaanController;
use App\Http\Controllers\PeralatanController;
use App\Http\Controllers\Admin\AdminController;


Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/penyewaan', [PenyewaanController::class, 'index'])->name('penyewaan.index');

// Route untuk Login & Register
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard User
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

// Group route admin dengan middleware
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/peralatan', [PeralatanController::class, 'index'])->name('peralatan.index');
    Route::get('/peralatan/create', [PeralatanController::class, 'create'])->name('peralatan.create');
    Route::post('/peralatan', [PeralatanController::class, 'store'])->name('peralatan.store');
    Route::get('/peralatan/{id}/edit', [PeralatanController::class, 'edit'])->name('peralatan.edit');
    Route::put('/peralatan/{id}', [PeralatanController::class, 'update'])->name('peralatan.update');
    Route::delete('/peralatan/{id}', [PeralatanController::class, 'destroy'])->name('peralatan.destroy');
});


// Route untuk penyewaan
Route::middleware(['auth'])->group(function () {
    Route::get('/penyewaan', [PenyewaanController::class, 'index'])->name('penyewaan.index');
    Route::post('/penyewaan', [PenyewaanController::class, 'store'])->name('penyewaan.store');
    Route::get('/penyewaan/confirm/{id}', [PenyewaanController::class, 'confirm'])->name('penyewaan.confirm');
});