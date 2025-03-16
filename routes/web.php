<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PinjamBarangController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::get('/', [AuthController::class, 'dashboard']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('barang', BarangController::class);
Route::resource('pinjam_barang', PinjamBarangController::class);
Route::get('/pinjam_barang/{id}/qrcode', [PinjamBarangController::class, 'generateQRCode'])->name('pinjam_barang.qrcode');