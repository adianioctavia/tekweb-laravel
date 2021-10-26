<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $user = User::paginate(7);

        return view('admin.pelanggan', [
            'user' => $user,
        ]);
    }
}
