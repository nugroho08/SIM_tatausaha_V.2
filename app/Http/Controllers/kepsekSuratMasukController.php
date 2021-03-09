<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class kepsekSuratMasukController extends Controller
{
    public function index()
    {
        $suratmasuk = SuratMasuk::all();
        return view('pages.kepsek.surat_masuk.index', compact('suratmasuk'));
    }

}
