@extends('templates.template')
@section('title','API List')
@section('header')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">API LIST</a></li>
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
                                <h1>Daftar API</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--        Tanggungan--}}
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col text-left">
                                <h1>Proses Bisnis Pengelolaan Tanggungan</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-0">
                        <ul class="list-group">
                            <li class="list-group-item">GET
                                <ul class="list-group-horizontal-">
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/tanggungan">https://eai-finance.arddhanaaa.com/public/api/tanggungan</a>
                                    </li>
                                    <li><a href="{{route('get_data_tanggungan')}}">example</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item">POST
                                <ul class="list-group-horizontal-">
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/tanggungan/">https://eai-finance.arddhanaaa.com/public/api/tanggungan</a>
                                    </li>
                                    <li><a href="{{route('view_tambah_tanggungan')}}">example</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item">PUT/UPDATE
                                <ul class="list-group-horizontal-">
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/tanggungan/">https://eai-finance.arddhanaaa.com/public/api/tanggungan/{id_tanggungan}</a>
                                    </li>
                                    <li><a href="{{route('get_data_tanggungan')}}">example</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item">DELETE
                                <ul class="list-group-horizontal-">
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/tanggungan/">https://eai-finance.arddhanaaa.com/public/api/tanggungan/{id_tanggungan}</a>
                                    </li>
                                    <li><a href="{{route('get_data_tanggungan')}}">example</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item">GET BY ID TANGGUNGAN
                                <ul class="list-group-horizontal-">
                                    <li>
                                        <a href="https://eai-finance.arddhanaaa.com/public/api/tanggungan/{id_tanggungan}">https://eai-finance.arddhanaaa.com/public/api/tanggungan/{id_tanggungan}</a>
                                    </li>
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/tanggungan/5">example</a>
                                    </li>
                                </ul>
                                <span class="text-warning">*{id_tanggungan} diganti dengan id_tanggungan</span>
                            </li>
                            <li class="list-group-item">GET BY ID ASSET
                                <ul class="list-group-horizontal-">
                                    <li>
                                        <a href="https://eai-finance.arddhanaaa.com/public/api/tanggungan/asset/{id_asset}">https://eai-finance.arddhanaaa.com/public/api/tanggungan/asset/{id_asset}</a>
                                    </li>
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/tanggungan/asset/2">example</a>
                                    </li>
                                </ul>
                                <span class="text-warning">*{id_asset} diganti dengan id_asset</span>
                            </li>
                            <li class="list-group-item">GET BY DIVISI
                                <ul class="list-group-horizontal-">
                                    <li>
                                        <a href="https://eai-finance.arddhanaaa.com/public/api/{divisi}/tanggungan">https://eai-finance.arddhanaaa.com/public/api/{divisi}/tanggungan/</a>
                                    </li>
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/finance/tanggungan">example
                                            -> get tanggungan milih divisi finance</a>
                                    </li>
                                </ul>
                                <span class="text-warning">*{divisi} diganti dengan nama divisi: finance, procurement, warehouse, logistik</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{--        Bukti Pembayaran--}}
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col text-left">
                                <h1>Proses Bisnis Bukti Pembayaran</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-0">
                        <ul class="list-group">
                            <li class="list-group-item">GET
                                <ul class="list-group-horizontal-">
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/bukti_pembayaran">https://eai-finance.arddhanaaa.com/public/api/bukti_pembayaran</a>
                                    </li>
                                    <li><a href="{{route('get_data_bukti_pembayaran')}}">example</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-group-item">POST
                                <ul class="list-group-horizontal-">
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/bukti_pembayaran">https://eai-finance.arddhanaaa.com/public/api/bukti_pembayaran</a>
                                    </li>
                                    <li><a href="{{route('view_tambah_bukti_pembayaran')}}">example</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item">DELETE
                                <ul class="list-group-horizontal-">
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/bukti_pembayaran">https://eai-finance.arddhanaaa.com/public/api/bukti_pembayaran/{id_pembayaran}</a>
                                    </li>
                                    <li><a href="{{route('get_data_bukti_pembayaran')}}">example</a></li>
                                </ul>
                                <span class="text-warning">*{id_pembayaran} diganti dengan id_pembayaran</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{--        Pengajuan Dana--}}
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col text-left">
                                <h1>Proses Bisnis Pengajuan Dana</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-0">
                        <ul class="list-group">
                            <li class="list-group-item">GET
                                <ul class="list-group-horizontal-">
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/pengajuan_dana">https://eai-finance.arddhanaaa.com/public/api/pengajuan_dana</a>
                                    </li>
                                    <li>
                                        <a href="https://eai-finance.arddhanaaa.com/public/api/pengajuan_dana">example</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-group-item">POST
                                <ul class="list-group-horizontal-">
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/pengajuan_dana">https://eai-finance.arddhanaaa.com/public/api/pengajuan_dana</a>
                                    </li>
                                    <li>
                                        <a href="https://eai-finance.arddhanaaa.com/public/api/pengajuan_dana">example</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-group-item">DELETE
                                <ul class="list-group-horizontal-">
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/pengajuan_dana/{id}">https://eai-finance.arddhanaaa.com/public/api/pengajuan_dana/{id}</a>
                                    </li>
                                    <li><a href="">example</a></li>
                                </ul>
                                <span class="text-warning">*{id_asset} diganti dengan id</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{--        Transaksi--}}
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col text-left">
                                <h1>Proses Bisnis Transaksi</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-0">
                        <ul class="list-group">
                            <li class="list-group-item">GET
                                <ul class="list-group-horizontal-">
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/transaksi">https://eai-finance.arddhanaaa.com/public/api/transaksi</a>
                                    </li>
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/transaksi">example</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-group-item">POST
                                <ul class="list-group-horizontal-">
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/transaksi">https://eai-finance.arddhanaaa.com/public/api/transaksi</a>
                                    </li>
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/transaksi">example</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-group-item">DELETE
                                <ul class="list-group-horizontal-">
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/transaksi/{id}">https://eai-finance.arddhanaaa.com/public/api/transaksi/{id}</a>
                                    </li>
                                    <li><a href="">example</a></li>
                                </ul>
                                <span class="text-warning">*{id_asset} diganti dengan id</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{--        Asset--}}
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col text-left">
                                <h1>Proses Bisnis Pengelolaan Asset</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-0">
                        <ul class="list-group">
                            <li class="list-group-item">GET
                                <ul class="list-group-horizontal-">
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/assets">https://eai-finance.arddhanaaa.com/public/api/assets</a>
                                    </li>
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/asset">example</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-group-item">POST
                                <ul class="list-group-horizontal-">
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/asset">https://eai-finance.arddhanaaa.com/public/api/asset</a>
                                    </li>
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/asset">example</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item">DELETE
                                <ul class="list-group-horizontal-">
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/asset/{id}">https://eai-finance.arddhanaaa.com/public/api/asset/{id}</a>
                                    </li>
                                    <li><a href="">example</a></li>
                                </ul>
                                <span class="text-warning">*{id_asset} diganti dengan id</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
