<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;

class tuSuratKeluarController extends Controller
{
    public function index()
    {
        $suratkeluar = SuratKeluar::all();
        return view('pages.tatausaha.surat_keluar.index', compact('suratkeluar'));
    }
    
    public function store(Request $request){
       
        $request->validate([
            'tanggal_surat' => 'required',
            'jenis_surat' => 'required',
            'no_surat' => 'required',
            'prihal' => 'required',
            'tujuan' => 'required',
            'pengantar' => 'required',
        ]);

        SuratKeluar::create($request->all());

        return redirect()->route('surat_keluar.index');
    }

    public function destroy(SuratKeluar $suratkeluar)
    {
        $suratkeluar->delete();
    
        return redirect()->route('surat_keluar.index')
                        ->with('success','Merek deleted successfully');
    }
}
