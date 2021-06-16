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
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Update Bukti Pembayaran</a></li>
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
                                <h3 class="mb-0">Update Bukti Pembayaran</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('save_update_data_bukti_pembayaran',$data_bukti_pembayaran->id_pembayaran)}}" method="put">
                            @csrf
                            @method('put')
                            <h6 class="heading-small text-muted mb-4">Data Bukti Pembayaran</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="nama_pembayaran">Nama Pembayaran</label>
                                            <input type="text" class="form-control" name="nama_pembayaran" id="nama_pembayaran">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="periode_tanggungan">Periode Tanggungan</label>
                                            <input type="text" class="form-control" name="periode_tanggungan"
                                                   id="periode_tanggungan" required value="{{$data_tanggungan->periode_tanggungan}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="tujuan_tanggungan">Tujuan Tanggungan</label>
                                            <input type="text" class="form-control" name="tujuan_tanggungan"
                                                   id="tujuan_tanggungan" required value="{{$data_tanggungan->tujuan_tanggungan}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="total_tanggungan">Total Tanggungan</label>
                                            <input type="number" class="form-control" name="total_tanggungan"
                                                   id="total_tanggungan" value="{{$data_tanggungan->total_tanggungan}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="id_asset">Nama Asset</label>
                                            <input type="hidden" class="form-control" name="id_asset"
                                                   id="id_asset" value="{{$data_tanggungan->id_asset}}" readonly>
                                            <input type="text" class="form-control" name=""
                                                   id="" value="{{$data_tanggungan->nama_asset}}" readonly>
                                            <input type="hidden" name="id_divisi" value="{{$data_tanggungan->id_divisi}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="col-12 text-right">
                                                <button class="btn btn-sm btn-primary" type="submit">Update</button>
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
