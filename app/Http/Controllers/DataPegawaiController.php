<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class DataPegawaiController extends Controller
{
   public function index()
   {
      $employes = Pegawai::all();

      return view ('pages.admin.pegawai.index', compact('employes'));
   }

   public function store(Request $request)
   {
      $request->validate([
         'nip' => 'required',
         'nama'=> 'required',
         'jk'=> 'required',
         'ttl'=> 'required',
         'alamat'=> 'required',
         'nama_orangtua'=> 'required',
         'status'=> 'required',
         'jumlah_tanggungan'=> 'required',
         'tanggal_masuk'=> 'required',
         'jabatan'=> 'required',
         'pendidikan_terakhir'=> 'required',
     ]);
   
     $a = $request->file('file_pendukung')->move('Data Pegawai', $request->file('file_pendukung')->getClientOriginalName());

     Pegawai::create($request->all());

     return redirect()->route('pegawai.index');
   }

   public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
    
        return redirect()->route('pegawai.index')
                        ->with('success','Merek deleted successfully');
    }

    public function edit($pegawai)
   {
      $data = Pegawai::find($pegawai);
      
      return response()->json($data);
  }

}
