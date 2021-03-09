<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class tuSuratMasukController extends Controller
{
    public function index()
    {
        $suratmasuk = SuratMasuk::all();
        return view('pages.tatausaha.surat_masuk.index', compact('suratmasuk'));
    }

    public function store(Request $request){

        $request->validate([
            'tanggal_surat' => 'required',
            'jenis_surat' => 'required',
            'no_surat' => 'required',
            'prihal' => 'required',
            'instansi' => 'required',
        ]);

        SuratMasuk::create($request->all());

        return redirect()->route('suratmasuk.index');
    }

    public function destroy(SuratMasuk $suratmasuk)
    {
        $suratmasuk->delete();
    
        return redirect()->route('surat_masuk.index')
                        ->with('success','Merek deleted successfully');
    }
}
