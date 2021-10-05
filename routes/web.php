<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('user');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/akun', function () {
    return view('akun');
})->middleware(['auth'])->name('akun');

Route::get('/pelanggan', function () {
    return view('pelanggan');
})->middleware(['auth'])->name('pelanggan');

Route::get('/pembelian', function () {
    return view('pembelian');
})->middleware(['auth'])->name('pembelian');

Route::get('/produk', function () {
    return view('produk');
})->middleware(['auth'])->name('produk');

require __DIR__ . '/auth.php';
