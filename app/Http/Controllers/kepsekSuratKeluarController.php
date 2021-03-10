<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;

use App\Exports\SuratKeluarExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class KepsekSuratKeluarController extends Controller
{
    public function index()
    {
        $suratkeluar = SuratKeluar::all();
        return view('pages.kepsek.surat_keluar.index', compact('suratkeluar'));
    }
    public function show()
    {
    return Excel::download(new SuratKeluarExport, 'siswa.xlsx');
    }
    
    
}
