<?php

namespace App\Http\Controllers;

use App\Models\konsultasi;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\Diagnosa;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function index(){
        
        $konsultasi = konsultasi::paginate(20);
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        $diagnosa = Diagnosa::all();
        return view('konsultasi.index', compact('konsultasi','pasien','dokter','diagnosa'));
    }

    public function store(Request $request){
        //dd($request->all());
        $konsultasi = new konsultasi();
        $konsultasi->id_pasien = $request->id_pasien;
        $konsultasi->id_dokter = $request->id_dokter;
        $konsultasi->id_diagnosa = $request->id_diagnosa;
        $konsultasi->tanggal_konsultasi = $request->tanggal_konsultasi;
        $konsultasi->save();

        return redirect('/konsultasi');
    }

    public function edit($id){
        
        $konsultasi = konsultasi::find($id);
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        $diagnosa = Diagnosa::all();
        return view('konsultasi.edit', compact('konsultasi','pasien','dokter','diagnosa'));
    }

    public function update(Request $request, $id){
        
        $konsultasi = Konsultasi::find($id);
        $konsultasi->id_pasien = $request->id_pasien;
        $konsultasi->id_dokter = $request->id_dokter;
        $konsultasi->id_diagnosa = $request->id_diagnosa;
        $konsultasi->tanggal_konsultasi = $request->tanggal_konsultasi;
        $konsultasi->save();

        return redirect('/konsultasi');
    }

    public function delete($id){
        
        Konsultasi::find($id)->delete();

        return redirect('/konsultasi');
    }
}
