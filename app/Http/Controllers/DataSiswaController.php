<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function index()
    {
        $students = Siswa::all();
        return view('pages.admin.siswa.index', compact('students'));
    }

    public function store(Request $request)
   {
      $request->validate([
        'nisn' => 'required',
        'nis' => 'required',
        'nik' => 'required',
        'name' => 'required',
        'jk' => 'required',
        'angkatan' => 'required',
        'rayon' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'agama' => 'required',
        'alamat' => 'required',
        'asal_smp' => 'required',
        'no_un_smp' => 'required',
        'no_ijazah_smp' => 'required',
        'no_skhun_smp' => 'required',
        'no_hp_siswa' => 'required',
        'no_kk' => 'required',
        'nik_ayah' => 'required',
        'nama_Ayah' => 'required',
        'pekerjaan_Ayah' => 'required',
        'no_hp_ayah' => 'required',
        'nik_ibu' => 'required',
        'nama_ibu' => 'required',
        'pekerjaan_ibu' => 'required',
        'no_hp_ibu' => 'required',
        'anak_ke' => 'required',
        'status_anak' => 'required',
     ]);
     $a = $request->file('file_pendukung')->move('Data Siswa', $request->file('file_pendukung')->getClientOriginalName());
     Siswa::create($request->all());

     return redirect()->route('siswa.index');
   }

}
