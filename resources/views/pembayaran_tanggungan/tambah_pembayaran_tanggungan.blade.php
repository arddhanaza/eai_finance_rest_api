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
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Tambah Data Tanggungan</a></li>
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
                                <h3 class="mb-0">Input Data Tanggungan</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('save_bayar_tanggungan',$data_tanggungan->id_tanggungan)}}" method="post">
                            @csrf
                            @method("post")
                            <h6 class="heading-small text-muted mb-4">Data Tanggungan</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="status_tanggungan">Status Tanggungan</label>
                                            <input type="text" class="form-control" name="status_tanggungan"
                                                   id="status_tanggungan" required value="{{$data_tanggungan->status_tanggungan}}" readonly>
                                            <input type="hidden" name="id_tanggungan" value="{{$data_tanggungan->id_tanggungan}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="periode_tanggungan">Periode Tanggungan</label>
                                            <input type="text" class="form-control" name="periode_tanggungan"
                                                   id="periode_tanggungan" required value="{{$data_tanggungan->periode_tanggungan}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="tujuan_tanggungan">Tujuan Tanggungan</label>
                                            <input type="text" class="form-control" name="tujuan_tanggungan"
                                                   id="tujuan_tanggungan" required value="{{$data_tanggungan->tujuan_tanggungan}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="total_tanggungan">Total Tanggungan</label>
                                            <input type="number" class="form-control" name="total_tanggungan"
                                                   id="total_tanggungan" value="{{$data_tanggungan->total_tanggungan}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="id_asset">Nama Asset</label>
                                            <input type="text" class="form-control" name="id_asset"
                                                   id="id_asset" value="{{$data_tanggungan->nama_asset}}" readonly>
                                            <input type="hidden" name="id_divisi" value="{{$data_tanggungan->id_divisi}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="total">Total Bayar</label>
                                            <input type="number" class="form-control" name="total"
                                                   id="total" value="" min="0" max="{{$data_tanggungan->total_tanggungan}}" placeholder="{{$data_tanggungan->total_tanggungan}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="deskripsi">Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" id="" cols="30" rows="5" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="col-12 text-right">
                                                <button class="btn btn-sm btn-primary" type="submit">Bayar</button>
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
