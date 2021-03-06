<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// Untuk Admin
Route::group(['middleware' => ['auth', "role:admin"]], function () {

    // Pelanggan
    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan');

    // Pembelian
    Route::get('/pembelian', function () {
        return view('admin.pembelian');
    })->name('pembelian');

    // Produk
    Route::get('/produk', [ProdukController::class, 'index'])
        ->name('produk');

    Route::get('/produk-add', [ProdukController::class, 'create'])
        ->name('produk-add');

    Route::post('/produk-add', [ProdukController::class, 'store'])
        ->name('produk-add');

    Route::get('/produk-edit/{id}', [ProdukController::class, 'edit'])
        ->name('produk-edit');

    Route::put('/produk-edit/{id}', [ProdukController::class, 'update'])
        ->name('produk-edit');

    Route::delete('/produk-delete/{id}', [ProdukController::class, 'destroy'])
        ->name('produk-delete');
});

// Untuk Pelanggan
Route::group(['middleware' => ['auth', 'role:pelanggan']], function () {
    Route::get('/show-produk/{id}', [ProdukController::class, 'show'])
        ->name('show-produk');
});

require __DIR__ . '/auth.php';
