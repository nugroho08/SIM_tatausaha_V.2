<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuTamu;

class BukuTamuController extends Controller
{
    public function index()
    {
        $guests = BukuTamu::all();

        return view('pages.tatausaha.buku_tamu.index', compact('guests'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'instansi' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'suhu_tubuh' => 'required',
            'keperluan' => 'required',
            'tanggal_kunjung' => 'required',
            'pesan' => 'required',
            'kesan' => 'required',
            'bukti_kunjungan' => 'required',

        ]);

        BukuTamu::create($request->all());
        
        return redirect()->route('buku_tamu.index');
    }

    public function destroy(BukuTamu $bukutamu)
    {
        $bukutamu->delete();
        
        return redirect()->route('buku_tamu.index')
                        ->with('succes, buku tamu deleted successfully');
    }
   
}
