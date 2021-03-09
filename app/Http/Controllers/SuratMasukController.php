<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index()
    {
        $suratmasuk = SuratMasuk::all();
        return view('pages.admin.surat_masuk.index', compact('suratmasuk'));
    }

    public function store(Request $request){

        $request->validate([
            'tanggal_surat' => 'required',
            'jenis_surat' => 'required',
            'no_surat' => 'required',
            'prihal' => 'required',
            'instansi' => 'required',
        ]);
        $a = $request->file('file_pendukung')->move('Surat Masuk', $request->file('file_pendukung')->getClientOriginalName());

        SuratMasuk::create($request->all());

        return redirect()->route('suratmasuk.index');
    }

    public function destroy(SuratMasuk $suratmasuk)
    {
        $suratmasuk->delete();
    
        return redirect()->route('suratmasuk.index')
                        ->with('success','Merek deleted successfully');
    }
}
