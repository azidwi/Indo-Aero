<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\ImportController;
use Illuminate\Support\Facades\Route;


// =========================
// ACCESS PAGE UTAMA
// =========================

Route::get('/', function () {
    return view('access');
})->name('access');


// =========================
// CUSTOMER banget nih?
// =========================

Route::get('/home', [PartController::class, 'home'])
    ->name('home');


// =========================
// ADMIN nih?
// =========================

Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');


// =========================
// IMPORT SIAPANYA EXPORT?
// =========================

Route::get('/import', [ImportController::class, 'index']);
Route::post('/import', [ImportController::class, 'store']);


// =========================
// CRUD buat baca memperbarui hapus
// =========================

Route::resource('company', CompanyController::class);

Route::resource('part', PartController::class)
    ->except(['show']);