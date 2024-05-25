@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gejala</h1>
    </div>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h4>Edit Gejala</h4>
                        </div>
                        <div class="col-6 text-right">
                            <!-- <button type="button" data-toggle="modal" data-target="#createModal" class="btn btn-success">Tambah Data</button> -->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/gejala/update/{{ $gejala->id_gejala }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama Gejala</label>
                            <input type="text" class="form-control" name="nama_gejala" value="{{ $gejala->nama_gejala }}" required>
                        </div>
                </div>
                <div class="card-footer text-right">
                    <div class="form-group">
                        <a href="/gejala" class="btn btn-info">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@include('gejala.create')
@endsection