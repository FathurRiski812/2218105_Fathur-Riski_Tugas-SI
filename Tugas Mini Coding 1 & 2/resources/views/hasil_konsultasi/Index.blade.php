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
                            <h4>List Hasil Konsultasi</h4>
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
                                    <th>ID konsultasi</th>
                                    <th>Hasil Konsultasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($hasil_konsultasi as $index => $item)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $item->id_konsultasi }}</td>
                                    <td>{{ $item->hasil_konsultasi }}</td>
                                    <td>
                                        <a href="/hasil_konsultasi/edit/{{ $item->id_hasil_konsultasi }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                        <a href="/hasil_konsultasi/delete/{{ $item->id_hasil_konsultasi }}" class="btn btn-danger" onclick="if(!confirm('Anda yakin menghapus data ini?')) return false;"><i class="fas fa-trash"></i></a>
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
@include('hasil_konsultasi.create')
@endsection