<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-12 text-center" style="background-color: rgb(48, 113, 242);">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="navbar-nav">
                        <a class="nav-link active" href="#">Buat Pengajuan Dana<span class="sr-only">(current)</span></a>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row" style="margin-top: 50px;">
            <div class="col-md-6 d-flex flex-row-reverse">
                <form style="width: 400px;" action="{{route('api_buat_pengajuan')}}" method="post">
                    <div class="form-group ">
                        <label for="inputNama">Nama Penanggung Jawab</label>
                        <input type="text" class="form-control" name="penanggung_jawab" id="penanggung_jawab" required>
                    </div>
                    <div class="form-group ">
                        <label for="inputDate">Nomor Rekening</label>
                        <input type="text" class="form-control" name="nomor_rekening" id="nomor_rekening" required>
                    </div>
                    <div class="form-group ">
                        <label for="inputDuration">Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputType">Tanggal Pengajuan</label>
                        <div class="input-container">
                            <i class="fa fa-calendar icon"></i>
                            <input type="date" class="form-control" name="tanggal_pengajuan" id="tanggal_pengajuan" required>
                        </div>
                    </div>
                    <input type="hidden" name="id_divisi" value="{{$divisi->id_divisi}}">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                    </div>
                </form>
            </div>

            <!-- <div class="col-md-6">
      <?php
        echo '<img src="public/logo.jpg">';
        ?>      
    </div> -->
        </div>
    </div>
</body>

</html>