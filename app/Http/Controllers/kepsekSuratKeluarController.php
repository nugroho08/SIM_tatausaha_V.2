<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;

class kepsekSuratKeluarController extends Controller
{
    public function index()
    {
        $suratkeluar = SuratKeluar::all();
        return view('pages.kepsek.surat_keluar.index', compact('suratkeluar'));
    }
    
}
