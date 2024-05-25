@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Rule Gejala</h1>
    </div>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h4>Edit Rule Gejala</h4>
                        </div>
                        <div class="col-6 text-right">
                            <!-- <button type="button" data-toggle="modal" data-target="#createModal" class="btn btn-success">Tambah Data</button> -->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/rule_gejala/update/{{ $rule_gejala->id_rule_gejala }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">ID Gejala</label>
                        <select name="id_gejala" class="form-control" id="exampleFormControlSelect1">
                        @foreach($gejala as $item)
                        <option @if($item->id_gejala == $rule_gejala->id_gejala) selected @endif value="{{ $item->id_gejala }}">{{ $item->nama_gejala }}</option>
                        @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">ID Penyakit</label>
                        <select name="id_penyakit" class="form-control" id="exampleFormControlSelect1">
                        @foreach($penyakit as $item)
                        <option @if($item->id_penyakit == $rule_gejala->id_penyakit) selected @endif value="{{ $item->id_penyakit }}">{{ $item->nama_penyakit }}</option>
                        @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="aturan">Aturan</label>
                            <input type="text" class="form-control" name="aturan" value="{{ $rule_gejala->aturan }}" required>
                        </div>
                        <div class="form-group">
                            <label for="hasil_aturan">Hasil Aturan</label>
                            <input type="text" class="form-control" name="hasil_aturan" value="{{ $rule_gejala->hasil_aturan }}" required>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <div class="form-group">
                            <a href="/rule_gejala" class="btn btn-info">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection