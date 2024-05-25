<?php

use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\HasilKonsultasiController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\RuleGejalaController;
use App\Models\Gejala;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('dokter')->group(function(){
    Route::get('/', [DokterController::class, 'index']);
    Route::post('/store', [DokterController::class, 'store']);
    Route::get('/delete/{id_dokter}', [DokterController::class, 'delete']);
    Route::get('/edit/{id_dokter}', [DokterController::class, 'edit']);
    Route::put('/update/{id_dokter}', [DokterController::class, 'update']);
    Route::get('/report', [DokterController::class, 'report']);
    
});
Route::prefix('gejala')->group(function(){
    Route::get('/', [GejalaController::class, 'index']);
    Route::post('/store', [GejalaController::class, 'store']);
    Route::get('/delete/{id_gejala}', [GejalaController::class, 'delete']);
    Route::get('/edit/{id_gejala}', [GejalaController::class, 'edit']);
    Route::put('/update/{id_gejala}', [GejalaController::class, 'update']);
    
});
Route::prefix('pasien')->group(function(){
    Route::get('/', [PasienController::class, 'index']);
    Route::post('/store', [PasienController::class, 'store']);
    Route::get('/delete/{id_pasien}', [PasienController::class, 'delete']);
    Route::get('/edit/{id_pasien}', [PasienController::class, 'edit']);
    Route::put('/update/{id_pasien}', [PasienController::class, 'update']);
    
});
Route::prefix('penyakit')->group(function(){
    Route::get('/', [PenyakitController::class, 'index']);
    Route::post('/store', [PenyakitController::class, 'store']);
    Route::get('/delete/{id_penyakit}', [PenyakitController::class, 'delete']);
    Route::get('/edit/{id_penyakit}', [PenyakitController::class, 'edit']);
    Route::put('/update/{id_penyakit}', [PenyakitController::class, 'update']);
    
});
Route::prefix('diagnosa')->group(function(){
    Route::get('/', [DiagnosaController::class, 'index']);
    Route::post('/store', [DiagnosaController::class, 'store']);
    Route::get('/delete/{id_diagnosa}', [DiagnosaController::class, 'delete']);
    Route::get('/edit/{id_diagnosa}', [DiagnosaController::class, 'edit']);
    Route::put('/update/{id_diagnosa}', [DiagnosaController::class, 'update']);
});
Route::prefix('rule_gejala')->group(function(){
    Route::get('/', [RuleGejalaController::class, 'index']);
    Route::post('/store', [RuleGejalaController::class, 'store']);
    Route::get('/delete/{id_rule_gejala}', [RuleGejalaController::class, 'delete']);
    Route::get('/edit/{id_rule_gejala}', [RuleGejalaController::class, 'edit']);
    Route::put('/update/{id_rule_gejala}', [RuleGejalaController::class, 'update']);
});
Route::prefix('konsultasi')->group(function(){
    Route::get('/', [KonsultasiController::class, 'index']);
    Route::post('/store', [KonsultasiController::class, 'store']);
    Route::get('/delete/{id_konsultasi}', [KonsultasiController::class, 'delete']);
    Route::get('/edit/{id_konsultasi}', [KonsultasiController::class, 'edit']);
    Route::put('/update/{id_konsultasi}', [KonsultasiController::class, 'update']);
});
Route::prefix('hasil_konsultasi')->group(function(){
    Route::get('/', [HasilKonsultasiController::class, 'index']);
    Route::post('/store', [HasilKonsultasiController::class, 'store']);
    Route::get('/delete/{id_hasil_konsultasi}', [HasilKonsultasiController::class, 'delete']);
    Route::get('/edit/{id_hasil_konsultasi}', [HasilKonsultasiController::class, 'edit']);
    Route::put('/update/{id_hasil_konsultasi}', [HasilKonsultasiController::class, 'update']);
});