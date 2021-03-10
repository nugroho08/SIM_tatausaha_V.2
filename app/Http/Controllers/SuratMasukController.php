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

    public function store(Request $request)
    {

        $request->validate([
            'tanggal_surat' => 'required',
            'jenis_surat' => 'required',
            'no_surat' => 'required',
            'prihal' => 'required',
            'instansi' => 'required',
        ]);
        $a = $request->file('file_pendukung')->move('Surat Masuk', $request->file('file_pendukung')->getClientOriginalName());

        SuratMasuk::create([
            'tanggal_surat' => $request->tanggal_surat,
            'jenis_surat' => $request->jenis_surat,
            'no_surat' => $request->no_surat,
            'prihal' => $request->prihal,
            'instansi' => $request->instansi,
            'nama_file' => $request->file('file_pendukung')->getClientOriginalName()
        ]);

        return redirect()->route('suratmasuk.index');
    }

    public function destroy(SuratMasuk $suratmasuk)
    {
        $suratmasuk->delete();

        return redirect()->route('suratmasuk.index')
            ->with('success', 'Merek deleted successfully');
    }
}
