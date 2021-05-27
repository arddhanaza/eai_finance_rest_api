<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Asset</title>
    <style>
        form{
            width: 200px;
        }
        input{
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<form action="{{route('api_tambah_asset')}}" method="post">
    <h1>Tambah Asset {{$divisi->nama_divisi}}</h1>

    <input type="hidden" name="id_divisi" value="{{$divisi->id_divisi}}">
    <input type="text" name="nama_asset" id="nama_asset" placeholder="Nama Asset">
    <input type="number" name="valuasi_asset" id="valuasi_asset" placeholder="Valuasi Asset">
    <input type="date" name="tanggal_aktif" id="tanggal_aktif" placeholder="Tanggal Aktif">
    <input type="text" name="jenis_asset" id="jenis_asset" placeholder="Jenis Asset">
    <input type="text" name="tipe_asset" id="tipe_asset" placeholder="Tipe Asset">
    <button type="submit">Submit</button>
</form>
</body>
</html>
