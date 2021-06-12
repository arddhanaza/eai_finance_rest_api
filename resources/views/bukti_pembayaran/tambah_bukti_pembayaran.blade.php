@extends('templates.template')
@section('title','Bukti Pembayaran')
@section('header')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{route('api_list')}}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{route('get_data_bukti_pembayaran')}}">Data Bukti Pembayaran</a></li>
                                <li class="breadcrumb-item"><a href="#">Tambah Bukti Pembayaran</a></li>
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
    {{-- <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col text-left">
                                <a href="" class="btn btn- btn-default">Tambah Bukti Pembayaran</a>
                            </div>
                        </div>
                    </div>

                    <!-- Light table -->
                    <div class="table-responsive py-4">
                        <table class="table align-items-center table-flush" id="datatable-buttons">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Pembayaran</th>
                                <th scope="col">Divisi</th>
                                <th scope="col">Tanggal Sumbmisi</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($data_bukti_pembayaran as $dt)
                                <tr>
                                    <td class="budget">{{$loop->index+1}}</td>
                                    <td>{{$dt->nama_pembayaran}}</td>
                                    <td>{{$dt->nama_divisi}}</td>
                                    <td>{{$dt->tanggal_submisi}}</td>
                                    <td>{{$dt->keterangan}}</td>
                                    <td>
                                        <a href=""
                                           type="button" class="btn-sm btn-warning">Edit</a>
                                        <a href=""
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
    </div> --}}
@endsection
