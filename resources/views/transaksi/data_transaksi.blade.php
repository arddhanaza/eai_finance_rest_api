@extends('templates.template')
@section('title','Data Transaksi')
@section('header')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Data Transaksi</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Card stats -->
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col text-left">
                                <a href="{{route('view_tambah_transaksi')}}" class="btn btn- btn-default">Tambah Data
                                    Transaksi</a>
                            </div>
                        </div>
                    </div>

                    <!-- Light table -->
                    <div class="table-responsive py-4">
                        <table class="table align-items-center table-flush" id="datatable-buttons">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col" class="text-wrap">Tipe Transaksi (Kredit/Debet)</th>
                                <th scope="col">Divisi</th>
                                <th scope="col">Waktu Transaksi</th>
                                <th scope="col">Total</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Bukti Transaksi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($data_transaksi as $transaksi)
                                <tr>
                                    <td class="budget">{{$loop->index+1}}</td>
                                    <td>{{$transaksi->tipe_transaksi}}</td>
                                    <td>{{$transaksi->id_divisi}}</td>
                                    <td>{{$transaksi->waktu_transaksi}}</td>
                                    <td>{{$transaksi->total}}</td>
                                    <td class="text-wrap">{{$transaksi->deskripsi}}</td>
                                    <td>
                                        <a href="{{$transaksi->bukti_invoice}}" target="_blank">
                                            <img src="{{$transaksi->bukti_invoice}}" alt="Bukti transaksi {{$transaksi->deskripsi}}" height="100">
                                        </a>
                                    </td>
                                    <td>
                                    <a href="{{route('update_data_transaksi',$transaksi->id_transaksi)}}"
                                        type="button" class="btn-sm btn-warning">Edit</a>
                                    <a href="{{route('delete_transaksi',$transaksi->id_transaksi)}}"
                                        onclick="return confirm('Apakah Anda Yakin?')" type="button"
                                        class="btn-sm btn-danger">Hapus</a>
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
@endsection
