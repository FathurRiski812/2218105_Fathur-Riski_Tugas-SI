<?php

namespace App\Http\Controllers;

use App\Models\penyakit;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    public function index(){
        $penyakit = penyakit::paginate(20);
        // Ambil semua record dari tabel dokter tanpa pengecualian
        // $all = Dokter::all(); 

        // Ambil semua record dari table dokter dgn kondisi tertentu
        // $get = Dokter::where('nama_dokter', 'like', "%h%")->get();

        // Ambil 1 record dokter dengan id tertentu
        // $find = Dokter::find(1);

        return view('penyakit.index', compact('penyakit'));
    }

    public function store(Request $request){

        $penyakit = new Penyakit();
        $penyakit->nama_penyakit = $request->nama_penyakit;
        $penyakit->deskripsi_penyakit = $request->deskripsi_penyakit;
        $penyakit->save();

        return redirect('/penyakit');
    }

    public function edit($id){
        
        $penyakit = Penyakit::find($id);
        return view('penyakit.edit', compact('penyakit'));
    }

    public function update(Request $request, $id){
        
            $penyakit = Penyakit::find($id);
            $penyakit->nama_penyakit = $request->nama_penyakit;
            $penyakit->deskripsi_penyakit = $request->deskripsi_penyakit;
            $penyakit->save();

         return redirect('/penyakit');
     }

     public function delete($id){
        
         Penyakit::find($id)->delete();

         return redirect('/penyakit');
    }
}
