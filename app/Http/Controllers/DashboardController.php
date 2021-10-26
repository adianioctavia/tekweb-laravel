<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            return view('admin.dashboard');
        } else if (Auth::user()->hasRole('pelanggan')) {
            return view('user.dashboard');
        }
    }
}
