@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pasien</h1>
    </div>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h4>Edit Pasien</h4>
                        </div>
                        <div class="col-6 text-right">
                            <!-- <button type="button" data-toggle="modal" data-target="#createModal" class="btn btn-success">Tambah Data</button> -->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/pasien/update/{{ $pasien->id_pasien }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama Pasien</label>
                            <input type="text" class="form-control" name="nama_pasien" value="{{ $pasien->nama_pasien }}" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="jenis_kelamin" class="form-control" name="jenis_kelamin" value="{{ $pasien->jenis_kelamin }}" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="alamat" class="form-control" name="alamat" value="{{ $pasien->alamat }}" required>
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No. Telepon</label>
                            <input type="number" class="form-control" name="no_telepon" value="{{ $pasien->no_telepon }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $pasien->email }}" required>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <div class="form-group">
                            <a href="/pasien" class="btn btn-info">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('pasien.create')
@endsection