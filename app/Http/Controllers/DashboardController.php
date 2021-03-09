<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->role == 'admin'){
            return view('pages.admin.dashboard');
        }elseif(Auth::user()->role == 'tatausaha'){
            return view('pages.tatausaha.dashboard');
        }elseif(Auth::user()->role == 'kepsek'){
            return view('pages.kepsek.dashboard');
        }
    }
}
