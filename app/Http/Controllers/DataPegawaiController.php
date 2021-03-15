<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class DataPegawaiController extends Controller
{
   public function index()
   {
      $employes = Pegawai::all();

      return view('pages.admin.pegawai.index', compact('employes'));
   }

   public function store(Request $request)
   {
      $request->validate([
         'nip' => 'required',
         'nama' => 'required',
         'jk' => 'required',
         'ttl' => 'required',
         'alamat' => 'required',
         'nama_orangtua' => 'required',
         'status' => 'required',
         'jumlah_tanggungan' => 'required',
         'tanggal_masuk' => 'required',
         'jabatan' => 'required',
         'pendidikan_terakhir' => 'required',
      ]);

      $a = $request->file('file_pendukung')->move('Data Pegawai');

      Pegawai::create([
         'nip' => $request->nip,
         'nama' => $request->nama,
         'jk' => $request->jk,
         'ttl' => $request->ttl,
         'alamat' => $request->alamat,
         'nama_orangtua' => $request->nama_orangtua,
         'status' => $request->status,
         'jumlah_tanggungan' => $request->jumlah_tanggungan,
         'tanggal_masuk' => $request->tanggal_masuk,
         'jabatan' => $request->jabatan,
         'pendidikan_terakhir' => $request->pendidikan_terakhir,
         'file' => $request->file('file_pendukung')->getClientOriginalName()
      ]);

      return redirect()->route('pegawai.index');
   }

   public function destroy(Pegawai $pegawai)
   {
      $pegawai->delete();

      return redirect()->route('pegawai.index')
         ->with('success', 'Merek deleted successfully');
   }

   public function edit($pegawai)
   {
      $data = Pegawai::find($pegawai);

      return response()->json($data);
   }
}
