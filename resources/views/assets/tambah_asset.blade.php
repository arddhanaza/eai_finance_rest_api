@extends('templates.template')
@section('title','Tambah Data Tanggungan')
@section('header')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{route('api_list')}}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{route('get_data_asset')}}">Data Asset</a></li>
                                <li class="breadcrumb-item"><a disabled href="#">Tambah Data Asset</a></li>
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
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Input Data Asset</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('save_tambah_data_asset')}}" method="post">
                            @csrf
                            @method("post")
                            <h6 class="heading-small text-muted mb-4">Data Asset</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="nama_asset">Nama Asset</label>
                                            <input type="text" class="form-control" name="nama_asset"
                                                   id="nama_asset" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="valuasi_asset">Valuasi Asset</label>
                                            <input type="number" class="form-control" name="valuasi_asset"
                                                   id="valuasi_asset" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="tanggal_aktif">Tanggal Aktif</label>
                                            <input type="date" class="form-control" name="tanggal_aktif"
                                                   id="tanggal_aktif" required value="" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="jenis_asset">Jenis Asset</label>
                                            <input type="text" class="form-control" name="jenis_asset"
                                                   id="jenis_asset" required value="" placeholder="Alat Tulis, Bangunan, Operasional">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="tipe_asset">Tipe Asset</label>
                                            <select class="form-control form-control" name="tipe_asset"
                                                    id="tipe_asset" required>
                                                <option value="Barang Habis Pakai">Barang Habis Pakai</option>
                                                <option value="Barang Bernilai Besar">Barang Bernilai Besar</option>
                                                <option value="Fixed Asset">Fixed Asset</option>
                                                <option value="Liquid Asset">Liquid Asset</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="id_divisi">Nama Divisi</label>
                                            <select class="form-control form-control" name="id_divisi"
                                                    id="id_divisi" required>
                                                @foreach($data_divisi as $divisi)
                                                    <option
                                                        value="{{$divisi->id_divisi}}">{{$divisi->nama_divisi}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="col-12 text-right">
                                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
