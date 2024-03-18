<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tambah pelanggan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
body {
  background-image: url('https://i.ibb.co/yn6QSsV/background.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<body>
@include('layout.navbar')
<div class="container">
<h2 style= " color:white">TAMBAH PELANGGAN</h2>
        <form action="tambah_pelanggan" method="POST" enctype="multipart/form-data" >
        @method('post')
        @csrf

  <div class="mb-3">
    <label for="nabar" class="form-label" style="color:white">nama pelanggan</label>
    <input type="text" class="form-control" id="nama" name="nama_pelanggan" required style=width:30% >
    </div>
    <div class="mb-3">
    <label for="nabar" class="form-label" style="color:white">alamat pelanggan</label>
    <input type="text" class="form-control" id="alamat" name="alamat" required style=width:30% >
    </div>
    <div class="mb-3">
    <label for="nabar" class="form-label" style="color:white">nomor telepon pelanggan</label>
    <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required style=width:30% >
    </div>  
    <button type="input" class="btn btn-primary"style="width:30%">tambahkan</button>
    <br>
    <br>
    <div>
            <a href="{{ url('data_pelanggan') }}" type="submit" class="btn btn-primary"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z" />
                    <path fill-rule="evenodd"
                        d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                </svg> kembali</a>
        </div>

</div>
</body>
</html>