<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Rule_Gejala;

class DiagnosaController extends Controller
{
    public function index(){
        
        $diagnosa = Diagnosa::paginate(20);
        $pasien = Pasien::all();
        $rule = Rule_Gejala::all();
        return view('diagnosa.index', compact('diagnosa','pasien','rule'));
    }

    public function store(Request $request){
        //dd($request->all());
        $diagnosa = new Diagnosa;
        $diagnosa->id_pasien = $request->id_pasien;
        $diagnosa->id_rule = $request->id_rule;
        $diagnosa->nama_diagnosa = $request->nama_diagnosa;
        $diagnosa->tanggal_diagnosa = $request->tanggal_diagnosa;
        $diagnosa->save();

        return redirect('/diagnosa');
    }

    public function edit($id){
        
        $diagnosa = Diagnosa::find($id);

        return view('diagnosa.edit', compact('diagnosa'));
    }

    public function update(Request $request, $id){
        
        $diagnosa = Diagnosa::find($id);
        $diagnosa->id_pasien = $request->id_pasien;
        $diagnosa->id_rule = $request->id_rule;
        $diagnosa->nama_diagnosa = $request->nama_diagnosa;
        $diagnosa->tanggal_diagnosa = $request->tanggal_diagnosa;
        $diagnosa->save();

        return redirect('/diagnosa');
    }

    public function delete($id){
        
        Diagnosa::find($id)->delete();

        return redirect('/diagnosa');
    }
}
