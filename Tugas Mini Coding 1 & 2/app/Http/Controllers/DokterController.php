<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DokterController extends Controller
{
    public function index(){

        $dokter = Dokter::paginate(20);

        // Ambil semua record dari tabel dokter tanpa pengecualian
        // $all = Dokter::all();

        // Ambil semua record dari table dokter dgn kondisi tertentu
        // $get = Dokter::where('nama_dokter', 'like', "%h%")->get();

        // Ambil 1 record dokter dengan id tertentu
        // $find = Dokter::find(1);

        return view('dokter.index', compact('dokter'));
    }

    public function store(Request $request){

        $dokter = new Dokter();
        $dokter->nama_dokter = $request->nama_dokter;
        $dokter->email = $request->email;
        $dokter->no_telepon = $request->no_telepon;
        $dokter->tanggal_pelayanan = $request->tanggal_pelayanan;
        $dokter->save();

        return redirect('/dokter');
    }

    public function edit($id){
        
        $dokter = Dokter::find($id);

        return view('dokter.edit', compact('dokter'));
    }

    public function update(Request $request, $id){
        
        $dokter = Dokter::find($id);
        $dokter->nama_dokter = $request->nama_dokter;
        $dokter->email = $request->email;
        $dokter->no_telepon = $request->no_telepon;
        $dokter->tanggal_pelayanan = $request->tanggal_pelayanan;
        $dokter->save();

        return redirect('/dokter');
    }

    public function delete($id){
        
        Dokter::find($id)->delete();

        return redirect('/dokter');
    }
    public function report(){
        $dokter = Dokter::all();
        $pdf = Pdf::loadView('dokter.report', compact('dokter'));
        return $pdf->download('Dokter.pdf');
    }
}
