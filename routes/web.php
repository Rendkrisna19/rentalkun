<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeDashboardController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\SewaController;Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/dashboard', [HomeDashboardController::class, 'index'])->name('dashboard.home.index');
use App\Http\Controllers\PenyewaanController;

// Menampilkan semua data penyewaan mobil
Route::get('dashboard/penyewaan', [PenyewaanController::class, 'index'])->name('penyewaan.index');
// login untuk admin 
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::middleware('admin')->group(function () {
    Route::get('/dashboard', [HomeDashboardController::class, 'index'])->name('dashboard.home.index');
});
//menampilkan dashboard admin untuk menambahkan jenis tipe mobil
Route::get('/dashboard/mobil', [MobilController::class, 'index']);
Route::post('/dashboard/mobil', [MobilController::class, 'store']);
Route::delete('/dashboard/mobil/{mobil}', [MobilController::class, 'destroy']);

// // Route::get('/dashboard/sewa', [SewaController::class, 'index']);
// // Route::post('/sewa', [SewaController::class, 'store']);
// Route::post('/sewa-mobil', [SewaController::class, 'store']);