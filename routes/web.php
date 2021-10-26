<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// Untuk Admin
Route::group(['middleware' => ['auth', "role:admin"]], function () {
    // Akun
    Route::get('/akun', function () {
        return view('admin.akun');
    })->name('akun');

    // Pelanggan
    Route::get('/pelanggan', function () {
        return view('admin.pelanggan');
    })->name('pelanggan');

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
});

require __DIR__ . '/auth.php';
