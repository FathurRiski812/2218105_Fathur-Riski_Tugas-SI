<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(){

        $pasien = Pasien::paginate(20);


        return view('pasien.index', compact('pasien'));
    } 
    public function store(Request $request){

        $pasien = new Pasien();
        $pasien->nama_pasien = $request->nama_pasien;
        $pasien->jenis_kelamin = $request->jenis_kelamin;
        $pasien->alamat = $request->alamat;
        $pasien->no_telepon = $request->no_telepon;
        $pasien->email = $request->email;
        $pasien->save();

        return redirect('/pasien');
    }

    public function edit($id){
        
        $pasien = Pasien::find($id);

        return view('pasien.edit', compact('pasien'));
    }

    public function update(Request $request, $id){
        
        $pasien = Pasien::find($id);
        $pasien->nama_pasien = $request->nama_pasien;
        $pasien->jenis_kelamin = $request->jenis_kelamin;
        $pasien->alamat = $request->alamat;
        $pasien->no_telepon = $request->no_telepon;
        $pasien->email = $request->email;
        $pasien->save();

        return redirect('/pasien');
    }

    public function delete($id){
        
        Pasien::find($id)->delete();

        return redirect('/pasien');
    }
    
}
