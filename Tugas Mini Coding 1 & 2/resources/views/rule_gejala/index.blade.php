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
                            <h4>List Rule Gejala</h4>
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
                                    <th>id gejala</th>
                                    <th>id penyakit</th>
                                    <th>aturan</th>
                                    <th>hasil aturan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rule_gejala as $index => $item)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $item->id_gejala }}</td>
                                    <td>{{ $item->id_penyakit }}</td>
                                    <td>{{ $item->aturan }}</td>
                                    <td>{{ $item->hasil_aturan }}</td>
                                    <td>
                                        <a href="/rule_gejala/edit/{{ $item->id_rule_gejala }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                        <a href="/rule_gejala/delete/{{ $item->id_rule_gejala }}" class="btn btn-danger" onclick="if(!confirm('Anda yakin menghapus data ini?')) return false;"><i class="fas fa-trash"></i></a>
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
@include('rule_gejala.create')
@endsection