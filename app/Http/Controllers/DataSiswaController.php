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
        'nis'  => 'required',
        'nik' => 'required',
        'nama'  => 'required',
        'jk' => 'required',
        'angkatan'=> 'required',
        'rayon'=> 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir'=>'required',

     ]);
   
     $a = $request->file('file')->move('Data Siswa', $request->file('file')->getClientOriginalName());

     Siswa::create($request->all());

     return redirect()->route('siswa.index');
   }

}
