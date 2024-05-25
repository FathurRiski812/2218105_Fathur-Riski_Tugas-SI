@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Konsultasi</h1>
    </div>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h4>Edit Konsultasi</h4>
                        </div>
                        <div class="col-6 text-right">
                            <!-- <button type="button" data-toggle="modal" data-target="#createModal" class="btn btn-success">Tambah Data</button> -->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/konsultasi/update/{{ $konsultasi->id_konsultasi }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                    <label for="exampleFormControlSelect1">ID Pasien</label>
                    <select name="id_pasien" class="form-control" id="exampleFormControlSelect1">
                    @foreach($pasien as $item)
                    <option @if($item->id_pasien == $konsultasi->id_pasien) selected @endif value="{{ $item->id_pasien }}">{{ $item->nama_pasien }}</option>
                    @endforeach
                    </select>
                    </div>
                    
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">ID Dokter</label>
                    <select name="id_dokter" class="form-control" id="exampleFormControlSelect1">
                    @foreach($dokter as $item)
                    <option @if($item->id_dokter == $konsultasi->id_dokter) selected @endif value="{{ $item->id_dokter }}">{{ $item->nama_dokter }}</option>
                    @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">ID Diagnosa</label>
                    <select name="id_diagnosa" class="form-control" id="exampleFormControlSelect1">
                    @foreach($diagnosa as $item)
                    <option @if($item->id_diagnosa == $konsultasi->id_diagnosa) selected @endif value="{{ $item->id_diagnosa }}">{{ $item->nama_diagnosa }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                        <label for="tanggal_konsultasi">Tanggal Konsultasi</label>
                        <input type="datetime-local" class="form-control" name="tanggal_konsultasi" required>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <div class="form-group">
                        <a href="/konsultasi" class="btn btn-info">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection