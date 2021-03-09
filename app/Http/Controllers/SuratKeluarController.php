<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $suratkeluar = SuratKeluar::all();
        return view('pages.admin.surat_keluar.index', compact('suratkeluar'));
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
        $a = $request->file('file_pendukung')->move('surat keluar', $request->file('file_pendukung')->getClientOriginalName());
        SuratKeluar::create($request->all());

        return redirect()->route('suratkeluar.index');
    }

    public function destroy(SuratKeluar $suratkeluar)
    {
        $suratkeluar->delete();
    
        return redirect()->route('suratkeluar.index')
                        ->with('success','Merek deleted successfully');
    }
}
