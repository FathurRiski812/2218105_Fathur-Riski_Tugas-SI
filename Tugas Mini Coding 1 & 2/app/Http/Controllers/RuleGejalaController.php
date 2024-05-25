<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\penyakit;
use App\Models\Rule_Gejala;
use Illuminate\Http\Request;

class RuleGejalaController extends Controller
{
    public function index(){
        
        $rule_gejala = Rule_Gejala::paginate(20);
        $gejala = Gejala::all();
        $penyakit = penyakit::all();
        return view('rule_gejala.index', compact('rule_gejala','gejala','penyakit'));
    }

    public function store(Request $request){
        //dd($request->all());
        $rule_gejala = new Rule_Gejala();
        $rule_gejala->id_gejala = $request->id_gejala;
        $rule_gejala->id_penyakit = $request->id_penyakit;
        $rule_gejala->aturan = $request->aturan;
        $rule_gejala->hasil_aturan = $request->hasil_aturan;
        $rule_gejala->save();

        return redirect('/rule_gejala');
    }

    public function edit($id){
        
        $rule_gejala = Rule_Gejala::find($id);
        $gejala = Gejala::all();
        $penyakit = penyakit::all();
        return view('rule_gejala.edit', compact('rule_gejala','gejala','penyakit'));
    }

    public function update(Request $request, $id){
        
        $rule_gejala = Rule_Gejala::find($id);
        $rule_gejala->id_gejala = $request->id_gejala;
        $rule_gejala->id_penyakit = $request->id_penyakit;
        $rule_gejala->aturan = $request->aturan;
        $rule_gejala->hasil_aturan = $request->hasil_aturan;
        $rule_gejala->save();

        return redirect('/rule_gejala');
    }

    public function delete($id){
        
        Rule_Gejala::find($id)->delete();

        return redirect('/rule_gejala');
    }
}
