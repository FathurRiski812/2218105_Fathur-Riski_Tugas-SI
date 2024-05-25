<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    //
    public function index(){

           $gejala = Gejala::paginate(20);
        // Ambil semua record dari tabel dokter tanpa pengecualian
        // $all = Dokter::all();

        // Ambil semua record dari table dokter dgn kondisi tertentu
        // $get = Dokter::where('nama_dokter', 'like', "%h%")->get();

        // Ambil 1 record dokter dengan id tertentu
        // $find = Dokter::find(1);

        return view('gejala.index', compact('gejala'));
    }

    public function store(Request $request){

        $gejala = new Gejala();
        $gejala->nama_gejala = $request->nama_gejala;
        $gejala->save();

        return redirect('/gejala');
    }

    public function edit($id){
        
        $gejala = Gejala::find($id);
        return view('gejala.edit', compact('gejala'));
    }

    public function update(Request $request, $id){
        
            $gejala = Gejala::find($id);
            $gejala->nama_gejala = $request->nama_gejala;
            $gejala->save();

         return redirect('/gejala');
     }

     public function delete($id){
        
         Gejala::find($id)->delete();

         return redirect('/gejala');
    }
}
