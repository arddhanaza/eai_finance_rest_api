@extends('templates.template')
@section('title','Assets')
@section('header')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Data Assets</a></li>
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
                                <a href="{{route('tambah_data_asset')}}" class="btn btn- btn-default">Tambah Data
                                    Asset</a>
                            </div>
                        </div>
                    </div>

                    <!-- Light table -->
                    <div class="table-responsive py-4">
                        <table class="table align-items-center table-flush" id="datatable-buttons">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Asset</th>
                                <th scope="col">Valuasi Asset</th>
                                <th scope="col">Tanggal Aktif</th>
                                <th scope="col">Jenis Asset</th>
                                <th scope="col">Tipe Asset</th>
                                <th scope="col">Id Divisi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($data_assets as $as)
                                <tr>
                                    <td class="budget">{{$loop->index+1}}</td>
                                    <td>{{$as->nama_asset}}</td>
                                    <td>{{$as->valuasi_asset}}</td>
                                    <td>{{$as->tanggal_aktif}}</td>
                                    <td>{{$as->jenis_asset}}</td>
                                    <td>{{$as->tipe_asset}}</td>
                                    <td>{{$as->id_divisi}}</td>
                                    <td>

                                        <a href="{{route('edit_data_asset',$as->id_asset)}}"
                                           type="button" class="btn-sm btn-warning">Edit</a>

                                        <a href="{{route('delete_data_asset',$as->id_asset)}}"
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
