<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
body {
  background-image: url('/img/background.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<body>
@include('layout.navbar')
<div class="container">
<h2 style= " color:white">UPDATE PRODUK</h2>
<form action="{{url('/update_produk',$produk->produk_id)}}" method="POST" enctype="multipart/form-data" >
        @method('post')
        @csrf

  <div class="mb-3">
    <label for="nabar" class="form-label" style="color:white">nama produk</label>
    <input type="text" class="form-control" id="nama_produk" name="nama_produk"  value="{{$produk->nama_produk}}" required style=width:30% >
    </div>
    <div class="mb-3">
    <label for="nabar" class="form-label" style="color:white">harga</label>
    <input type="text" class="form-control"id="harga" name="harga" value="{{$produk->harga}}" required style=width:30% >
    </div>
    <div class="mb-3">
    <label for="nabar" class="form-label" style="color:white">stok</label>
    <input type="text" class="form-control" id="stok" name="stok"value="{{$produk->stok}}"required style=width:30% >
    </div>  
    <button type="input" class="btn btn-primary"style="width:30%">tambahkan</button>


</div>
</body>
</html>