<?php

namespace App\Http\Controllers;

use App\Exports\SuratMasukExport;
use App\Models\SuratMasuk;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class kepsekSuratMasukController extends Controller
{
    public function index()
    {
        $suratmasuk = SuratMasuk::all();
        return view('pages.kepsek.surat_masuk.index', compact('suratmasuk'));
    }
    public function show()
    {
        return Excel::download(new SuratMasukExport, 'surat.xlsx');
    }

}
