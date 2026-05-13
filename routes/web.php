<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\AdminProductController;

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'login']);

Route::post('/login-proses', [AuthController::class, 'loginProses']);

Route::get('/logout', [AuthController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('dashboard');
});

/*
|--------------------------------------------------------------------------
| REKOMENDASI
|--------------------------------------------------------------------------
*/

Route::get('/cari-rekomendasi', function () {
    return view('search');
});

Route::post('/cari-rekomendasi', [RecommendationController::class, 'recommend']);

/*
|--------------------------------------------------------------------------
| PRODUK USER
|--------------------------------------------------------------------------
*/

Route::get('/produk', [ProductController::class, 'index']);

Route::get('/produk/{id}', [ProductController::class, 'show']);

/*
|--------------------------------------------------------------------------
| RATING
|--------------------------------------------------------------------------
*/

Route::post('/rate', [RatingController::class, 'store']);

/*
|--------------------------------------------------------------------------
| ADMIN PRODUK
|--------------------------------------------------------------------------
*/

// LIST PRODUK
Route::get('/admin/products', [AdminProductController::class, 'index']);

// FORM TAMBAH
Route::get('/admin/products/create', [AdminProductController::class, 'create']);

// SIMPAN PRODUK
Route::post('/admin/products/store', [AdminProductController::class, 'store']);

// FORM EDIT
Route::get('/admin/products/edit/{id}', [AdminProductController::class, 'edit']);

// UPDATE PRODUK
Route::put('/admin/products/update/{id}', [AdminProductController::class, 'update']);

// HAPUS PRODUK
Route::delete('/admin/products/delete/{id}', [AdminProductController::class, 'delete']);

/*
|--------------------------------------------------------------------------
| PAGE
|--------------------------------------------------------------------------
*/

Route::get('/price-list', function () {
    return view('price');
});

Route::get('/faq', function () {
    return view('faq');
});