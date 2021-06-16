@extends('templates.template')
@section('title','Update Data Transaksi')
@section('header')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Update Data Transaksi</a></li>
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
                                <h3 class="mb-0">Update Data Transaksi</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('save_update_data_transaksi',$transaksi->id_transaksi)}}" method="put">
                            @csrf
                            @method('put')
                            <h6 class="heading-small text-muted mb-4">Data Transaksi</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="tipe_transaksi">Tipe Transaksi</label>
                                            <div class="col">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="tipe_transaksi" id="kredit" value="Kredit" {{ ($transaksi->tipe_transaksi=="Kredit") ? "checked" : "" }}>
                                                    <label class="form-check-label" for="kredit">Kredit</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="tipe_transaksi" id="debet" value="Debet" {{ ($transaksi->tipe_transaksi=="Debet") ? "checked" : "" }}>
                                                    <label class="form-check-label" for="debet">Debet</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="id_divisi">Divisi</label>
                                            <select class="form-control" id="id_divisi" name="id_divisi" required>
                                                <option value="1" {{ ($transaksi->id_divisi=="1") ? "selected" : "" }}>Finance</option>
                                                <option value="2" {{ ($transaksi->id_divisi=="2") ? "selected" : "" }}>Procurement</option>
                                                <option value="3" {{ ($transaksi->id_divisi=="3") ? "selected" : "" }}>Warehouse</option>
                                                <option value="4" {{ ($transaksi->id_divisi=="4") ? "selected" : "" }}>Logistik</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="waktu_transaksi">Waktu Transaksi</label>
                                            <input type="datetime-local" class="form-control" pattern="[0-9]{4}:[0-9]{2}:[0-9]{2}T[0-9]{2}:[0-9]{2}" id="waktu_transaksi" name="waktu_transaksi" value="{{ $transaksi->waktu_transaksi }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="total">Total Transaksi</label>
                                            <input type="number" class="form-control" name="total" id="total" required placeholder="175000" value="{{ $transaksi->total }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="deskripsi">Deskripsi Transaksi</label>
                                            <textarea class="form-control" id="deskripsi" rows="2" name="deskripsi" placeholder="Beli alat tulis kantor; 2 pack bolpoin, 2 spidol hitam, 2 rim kertas A4" required>{{ $transaksi->deskripsi }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="bukti_invoice">Bukti Transaksi</label>
                                            <input type="text" class="form-control" name="bukti_invoice" id="bukti_invoice" required placeholder="url to invoice document" value="{{ $transaksi->bukti_invoice }}">
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
