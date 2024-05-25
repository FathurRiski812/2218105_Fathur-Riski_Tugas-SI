@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Penyakit</h1>
    </div>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h4>Edit Penyakit</h4>
                        </div>
                        <div class="col-6 text-right">
                            <!-- <button type="button" data-toggle="modal" data-target="#createModal" class="btn btn-success">Tambah Data</button> -->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/penyakit/update/{{ $penyakit->id_penyakit }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama Penyakit</label>
                            <input type="text" class="form-control" name="nama_penyakit" value="{{ $penyakit->nama_penyakit }}" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi_penyakit">Deskripsi Penyakit</label>
                            <input type="text" class="form-control" name="deskripsi_penyakit" value="{{ $penyakit->deskripsi_penyakit }}" required>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <div class="form-group">
                            <a href="/penyakit" class="btn btn-info">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('penyakit.create')
@endsection