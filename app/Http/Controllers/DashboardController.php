<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            return view('admin.dashboard');
        } else if (Auth::user()->hasRole('pelanggan')) {
            $produk = Produk::paginate(12);
            $kategori = Kategori::all();
            return view('user.dashboard', [
                'produk' => $produk,
                'kategori' => $kategori,
            ]);
        }
    }

    // public function showByCategory($id)
    // {
    //     $kategori = Kategori::find($id);
    //     return view('user.dashboard', [
    //         'kategori' => $kategori,
    //     ]);
    // }
}
