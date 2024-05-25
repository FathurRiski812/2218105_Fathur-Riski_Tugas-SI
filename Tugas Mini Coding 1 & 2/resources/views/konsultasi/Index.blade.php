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
                            <h4>List Konsultasi</h4>
                        </div>
                        <div class="col-6 text-right">
                            <button type="button" data-toggle="modal" data-target="#createModal" class="btn btn-success">Tambah Data</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Pasien</th>
                                    <th>ID Dokter</th>
                                    <th>ID Diagnosa</th>
                                    <th>Tanggal Konsultasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($konsultasi as $index => $item)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $item->id_pasien }}</td>
                                    <td>{{ $item->id_dokter }}</td>
                                    <td>{{ $item->id_diagnosa }}</td>
                                    <td>{{ $item->tanggal_konsultasi->format('d F Y H:i:s') }}</td>
                                    <td>
                                        <a href="/konsultasi/edit/{{ $item->id_konsultasi }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                        <a href="/konsultasi/delete/{{ $item->id_konsultasi }}" class="btn btn-danger" onclick="if(!confirm('Anda yakin menghapus data ini?')) return false;"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('konsultasi.create')
@endsection