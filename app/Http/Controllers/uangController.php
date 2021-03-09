<?php

namespace App\Http\Controllers;
use App\Models\Uang;
use Illuminate\Http\Request;

class uangController extends Controller
{
    public function index()
    {
        $uang = Uang::all();
        return view('pages.tatausaha.log_uang.index', compact('uang'));
        
    }

    public function store(Request $request)
    {
       $request->validate([
           'status' => 'required',
           'jumlah_uang' => 'required',
           'tanggal' => 'required',
           'keterangan' => 'required',
       ]);

       Uang::create($request->all());
       
       return redirect()->route('loguang.index');
    }

    public function destroy($uang)
    {
        $a = Uang::find($uang);
        $a->delete();
        
        return redirect()->route('loguang.index')
                         ->with('succsess', 'uang telah di hapus');
    }

    public function edit($loguang)
    {
        $data = Uang::find($loguang);

        return response()->json($data);
    }
}
