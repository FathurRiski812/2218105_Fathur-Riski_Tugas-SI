@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dokter</h1>
    </div>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h4>Edit Dokter</h4>
                        </div>
                        <div class="col-6 text-right">
                            <!-- <button type="button" data-toggle="modal" data-target="#createModal" class="btn btn-success">Tambah Data</button> -->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/dokter/update/{{ $dokter->id_dokter }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama Dokter</label>
                            <input type="text" class="form-control" name="nama_dokter" value="{{ $dokter->nama_dokter }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $dokter->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No. Telepon</label>
                            <input type="number" class="form-control" name="no_telepon" value="{{ $dokter->no_telepon }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_pelayanan">Tanggal Pelayanan</label>
                            <input type="datetime-local" class="form-control" name="tanggal_pelayanan" value="{{ $dokter->tanggal_pelayanan }}" required>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <div class="form-group">
                            <a href="/dokter" class="btn btn-info">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('dokter.create')
@endsection