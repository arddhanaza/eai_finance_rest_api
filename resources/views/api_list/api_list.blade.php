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
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col text-left">
                                <h1>Proses Bisnis Tanggungan</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-0">
                        <ul class="list-group">
                            <li class="list-group-item">GET
                                <ul class="list-group-horizontal-">
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/tanggungan">https://eai-finance.arddhanaaa.com/public/api/tanggungan</a></li>
                                    <li><a href="{{route('get_data_tanggungan')}}">example</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item">POST
                                <ul class="list-group-horizontal-">
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/tanggungan/">https://eai-finance.arddhanaaa.com/public/api/tanggungan</a></li>
                                    <li><a href="{{route('get_data_tanggungan')}}">example</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item">PUT/UPDATE
                                <ul class="list-group-horizontal-">
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/tanggungan/">https://eai-finance.arddhanaaa.com/public/api/tanggungan/{id_tanggungan}</a></li>
                                    <li><a href="{{route('get_data_tanggungan')}}">example</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item">DELETE
                                <ul class="list-group-horizontal-">
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/tanggungan/">https://eai-finance.arddhanaaa.com/public/api/tanggungan/{id_tanggungan}</a></li>
                                    <li><a href="{{route('get_data_tanggungan')}}">example</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item">GET BY ID TANGGUNGAN
                                <ul class="list-group-horizontal-">
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/tanggungan/">https://eai-finance.arddhanaaa.com/public/api/tanggungan/{id_tanggungan}</a></li>
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/tanggungan/by_id/5">example</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item">GET BY ID ASSET
                                <ul class="list-group-horizontal-">
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/tanggungan/">https://eai-finance.arddhanaaa.com/public/api/tanggungan/{id_asset}</a></li>
                                    <li><a href="https://eai-finance.arddhanaaa.com/public/api/tanggungan/asset/2">example</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection

