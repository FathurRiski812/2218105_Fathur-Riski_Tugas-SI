@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Hasil Konsultasi</h1>
    </div>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h4>Edit Hasil Konsultasi</h4>
                        </div>
                        <div class="col-6 text-right">
                            <!-- <button type="button" data-toggle="modal" data-target="#createModal" class="btn btn-success">Tambah Data</button> -->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/hasil_konsultasi/update/{{ $hasil_konsultasi->id_hasil_konsultasi }}" method="POST">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">ID Konsultasi</label>
                    <select name="id_konsultasi" class="form-control" id="exampleFormControlSelect1">
                    @foreach($konsultasi as $item)
                    <option @if($item->id_konsultasi == $hasil_konsultasi->id_konsultasi) selected @endif value="{{ $item->id_konsultasi }}">{{ $item->id_konsultasi }}</option>
                    @endforeach
                    </select>
                    </div>
                    
                <div class="form-group">
                        <label for="hasil_konsultasi">Hasil Konsultasi</label>
                        <input type="text" class="form-control" name="hasil_konsultasi" required>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <div class="form-group">
                        <a href="/hasil_konsultasi" class="btn btn-info">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection