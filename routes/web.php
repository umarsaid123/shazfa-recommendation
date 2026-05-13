<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\AdminProductController;

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login-proses', [AuthController::class, 'loginProses']);

Route::get('/logout', [AuthController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| WEB ROUTES
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
| PRODUK
|--------------------------------------------------------------------------
*/

Route::get('/produk', [ProductController::class, 'index']);

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

Route::get('/admin/products', [AdminProductController::class, 'index']);

Route::get('/admin/products/create', [AdminProductController::class, 'create']);

Route::post('/admin/products/store', [AdminProductController::class, 'store']);

/*
|--------------------------------------------------------------------------
| PAGE
|--------------------------------------------------------------------------
*/

Route::delete('/admin/products/delete/{id}', [AdminProductController::class, 'delete']);

Route::get('/produk/{id}', [ProductController::class, 'show']);

// FORM EDIT
Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit']);

// UPDATE DATA
Route::put('/admin/products/update/{id}', [ProductController::class, 'update']);

Route::get('/price-list', function () {
    return view('price');
});

Route::get('/faq', function () {
    return view('faq');
});