@extends('templates.template')
@section('title','Update Data Pengajuan Dana')
@section('header')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Update Data Pengajuan Dana</a></li>
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
                            <h3 class="mb-0">Update Data Pengajuan Dana</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('save_update_data_pengajuan',$data_pengajuan->id_pengajuan)}}" method="put">
                        @csrf
                        @method('put')
                        <h6 class="heading-small text-muted mb-4">Pengajuan Dana</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="id_divisi">Divisi</label>
                                        <select class="form-control form-control" name="id_divisi" id="id_divisi" required>
                                            @foreach($data_divisi as $divisi)
                                            <option value="{{$divisi->id_divisi}}">{{$divisi->nama_divisi}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="penanggung_jawab">Penanggung Jawab</label>
                                        <input type="text" class="form-control" name="penanggung_jawab" id="penanggung_jawab" required placeholder="{{$data_pengajuan->penanggung_jawab}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="jumlah_dana">Jumlah Dana</label>
                                        <input type="text" class="form-control" name="jumlah_dana" id="jumlah_dana" required placeholder="{{$data_pengajuan->jumlah_dana}}">
                                    </div>
                                </div>
                            </div>                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="nomor_rekening">Nomor Rekening</label>
                                        <input type="number" class="form-control" name="nomor_rekening" id="nomor_rekening" required placeholder="{{$data_pengajuan->nomor_rekening}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="keterangan">Keterangan</label>
                                        <textarea class="form-control" name="keterangan" id="keterangan" required placeholder="{{$data_pengajuan->keterangan}}"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="tanggal_pengajuan">Tanggal Pengajuan</label>
                                        <input type="date" class="form-control" name="tanggal_pengajuan" id="tanggal_pengajuan" required placeholder="{{$data_pengajuan->tanggal_pengajuan}}">
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