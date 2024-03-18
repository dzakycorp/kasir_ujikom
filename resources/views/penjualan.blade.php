<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>penjualan</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
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
    @if (session()->has('alert'))
    <div class="alert alert-danger" role="alert" id="alert" style="text-align: center; width:30%; margin:auto">
    {{ session('alert') }}
</div>
    @endif

<div class="container">
  <div class="row">
  <h1 style= "color:white">PENJUALAN</h1>
<form action="/penjualan" method="POST" class="col">
  @method('POST')
  @csrf
<select class="form-select" aria-label="Default select example" style="width:65%"name="produk" required>
<option value="" disabled selected hidden>pilih produk</option>
  @foreach($produk as $produk)
  <option value="{{$produk->id}}" >{{ $produk->nama_produk }}</option>
  @endforeach
</select>
<input type="hidden" name="penjualan_id" value ={{$penjualan_id}}>
<br>
                                                                                                                                                                                                    
<div class="form-outline"style="width:65%">
    <input required placeholder="Jumlah" type="number" min="1" id="typeNumber" class="form-control"name="qty" />
    <label  class="form-label" for="typeNumber"> </label>
</div>



<select class="form-select" aria-label="Default select example" style="width:65%"name="pelanggan" >
<option value="" disabled selected hidden>pilih pelanggan</option>
  @foreach($pelanggan as $pelanggan)
  <option value="{{$pelanggan->pelanggan_id}}">{{ $pelanggan->nama_pelanggan }}</option>
  @endforeach
</select>
<br>
<button type="input" class="btn btn-primary"style="width:65%">tambahkan</button>
<br><br>
</form>

<table height="2px"  class="table table-bordered col ">
<thead>
       <tr class="table-dark">
         <th  scope="col">NO</th>
         <th  scope="col">NAMA PRODUK</th>
         <th  scope="col">HARGA</th>
         <th  scope="col">QTY</th>
         <th  scope="col">SUBTOTAL</th>
         <th  scope="col">OPSI</th>
               
       </tr>
</thead>   
<?php $no = 1;
      $total_harga = 0?>
      
<tbody>
  @foreach($detailpenjualan as $detailpenjualan)
  <tr>
    <th>{{$no++}}</th>
    <th>{{$detailpenjualan->nama_produk}}</th>
    <th>{{$detailpenjualan->harga}}</th>
    <th>{{$detailpenjualan->jumlah_produk}}</th>
    <th>{{$detailpenjualan->subtotal}}</th>
    <?php $total_harga= $total_harga + $detailpenjualan->subtotal?>
    <td>  <a href="hapus_penjualan/{{$detailpenjualan->produk_id}}"><button type="button" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
      <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
      </svg></button></a></td>
     
   
</tr>

@endforeach
</tbody>

</table>


</div>
</div>
<div class="container">

<h1 style= "color:white; margin-left:51%;">Total Harga:Rp.{{number_format($total_harga,0,',',',')}}</h1>
</div>
<div class="container">
        <form action={{ url('Checkout') }} method="POST">
            @method('POST')
            @csrf
            <input type="hidden" name="penjualan_id" value={{ $penjualan_id }}>
            <input type="hidden" name="total" value={{ $total_harga }}>
            <button type="submit" class="btn btn-dark" style="width:20%;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0m-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
</svg>Checkout</button>

        </form>
    </div>
    <script>
    // Mengambil elemen alert
    var alertBox = document.getElementById("alert");

    // Menampilkan alert
    alertBox.style.display = "block";

    // Menyembunyikan alert setelah 5 detik
    setTimeout(function() {
      alertBox.style.display = "none";
    }, 4000); // 5000 milidetik atau 5 detik
  </script>

   
</body>
</html>