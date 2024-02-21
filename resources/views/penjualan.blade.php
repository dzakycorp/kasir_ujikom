<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
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
  <div class="row">
  <h1 style= "color:white">PENJUALAN</h1>
<form action="/penjualan" method="POST" class="col">
  @method('POST')
  @csrf
<select class="form-select" aria-label="Default select example" style="width:65%"name="produk">
  <option selected>pilih produk</option>
  @foreach($produk as $produk)
  <option value="{{$produk->produk_id}}" >{{ $produk->nama_produk }}</option>
  @endforeach
</select>
<input type="hidden" name="penjualan_id" value ={{$penjualan_id}}>
<br>
                                                                                                                                                                                                    
<div class="form-outline"style="width:65%">
    <input placeholder="Jumlah" type="number"id="typeNumber" class="form-control"name="qty" />
    <label  class="form-label" for="typeNumber" </label>
</div>



<select class="form-select" aria-label="Default select example" style="width:65%"name="pelanggan">
  <option selected>pilih nama pelanggan</option>
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
 



</body>
</html>