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
                                <li class="breadcrumb-item"><a href="{{route('get_data_tanggungan')}}">Data Tanggungan</a></li>
                                <li class="breadcrumb-item"><a disabled href="#">Tambah Data Tanggungan</a></li>
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
                        <form action="{{route('save_tambah_tanggungan')}}" method="post">
                            @csrf
                            @method("post")
                            <h6 class="heading-small text-muted mb-4">Data Tanggungan</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="status_tanggungan">Status Tanggungan</label>
                                            <input type="text" class="form-control" name="status_tanggungan"
                                                   id="status_tanggungan" required value="Belum Lunas" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="periode_tanggungan">Periode Tanggungan</label>
                                            <input type="text" class="form-control" name="periode_tanggungan"
                                                   id="periode_tanggungan" required value="" placeholder="Januari">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="tujuan_tanggungan">Tujuan Tanggungan</label>
                                            <input type="text" class="form-control" name="tujuan_tanggungan"
                                                   id="tujuan_tanggungan" required value="" placeholder="Mandiri">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="total_tanggungan">Total Tanggungan</label>
                                            <input type="number" class="form-control" name="total_tanggungan"
                                                   id="total_tanggungan" required value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="id_asset">Nama Asset</label>
                                            <select class="form-control form-control" name="id_asset"
                                                    id="input-id_asset" required>
                                                @foreach($data_asset as $asset)
                                                    <option
                                                        value="{{$asset->id_asset}}">{{$asset->nama_asset}}</option>
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
