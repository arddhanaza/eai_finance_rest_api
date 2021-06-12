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
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Input Bukti Pembayaran</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('save_tambah_data_bukti_pembayaran')}}" method="post">
                        @csrf
                        @method("post")
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
                                        <label class="form-control-label" for="keterangan">Keterangan</label>
                                        <input type="text" class="form-control" name="keterangan" id="keterangan">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="id_transaksi">Tipe Transaksi</label>
                                        <select class="form-control form-control" name="id_transaksi"
                                                id="input-id_transaksi" required>
                                            @foreach($data_transaksi as $transaksi)
                                                <option
                                                    value="{{$transaksi->id_transaksi}}">{{$transaksi->tipe_transaksi}}</option>
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
