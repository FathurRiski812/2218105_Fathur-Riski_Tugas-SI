<?php

namespace App\Http\Controllers;

use App\Models\hasil_konsultasi;
use App\Models\konsultasi;
use Illuminate\Http\Request;

class HasilKonsultasiController extends Controller
{
    public function index(){
        
        $hasil_konsultasi = hasil_konsultasi::paginate(20);
        $konsultasi = konsultasi::all();
        return view('hasil_konsultasi.index', compact('hasil_konsultasi','konsultasi'));
    }

    public function store(Request $request){
        //dd($request->all());
        $hasil_konsultasi = new Hasil_Konsultasi();
        $hasil_konsultasi->id_konsultasi = $request->id_konsultasi;
        $hasil_konsultasi->hasil_konsultasi = $request->hasil_konsultasi;
        $hasil_konsultasi->save();

        return redirect('/hasil_konsultasi');
    }

    public function edit($id){
        
        $hasil_konsultasi = hasil_konsultasi::find($id);
        $konsultasi = konsultasi::all();
        return view('hasil_konsultasi.edit', compact('hasil_konsultasi','konsultasi'));
    }

    public function update(Request $request, $id){
        
        $hasil_konsultasi = Hasil_Konsultasi::find($id);
        $hasil_konsultasi->id_konsultasi = $request->id_konsultasi;
        $hasil_konsultasi->hasil_konsultasi = $request->hasil_konsultasi;
        $hasil_konsultasi->save();

        return redirect('/hasil_konsultasi');
    }

    public function delete($id){
        
        Hasil_Konsultasi::find($id)->delete();

        return redirect('/hasil_konsultasi');
    }
}
