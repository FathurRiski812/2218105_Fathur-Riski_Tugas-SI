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
                            <h4>List Dokter</h4>
                        </div>
                        <div class="col-6 text-right">
                            <a href="/dokter/report" class="btn btn-primary">Cetak</a>
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
                                    <th>Nama Dokter</th>
                                    <th>Email</th>
                                    <th>No. Telp</th>
                                    <th>Tanggal Pelayanan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dokter as $index => $item)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $item->nama_dokter }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->no_telepon }}</td>
                                    <td>{{ $item->tanggal_pelayanan->format('d F Y H:i:s') }}</td>
                                    <td>
                                        <a href="/dokter/edit/{{ $item->id_dokter }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                        <a href="/dokter/delete/{{ $item->id_dokter }}" class="btn btn-danger" onclick="if(!confirm('Anda yakin menghapus data ini?')) return false;"><i class="fas fa-trash"></i></a>
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
@include('dokter.create')
@endsection