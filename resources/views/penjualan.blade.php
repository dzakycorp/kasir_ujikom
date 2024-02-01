<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
</head>
<body>
@include('layout.navbar')
<div class="container">
  <div class="row">
    <h1>
        data 
</h1>
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

<br>                                                                                                                                                                                                                    
<div class="form-outline"style="width:65%">
    <input type="number"id="typeNumber" class="form-control"name="qty" />
    <label  class="form-label" for="typeNumber"style= "text-align:center; color:black">Number input</label>
</div>
<br>
<button type="input" class="btn btn-dark"style="width:45%">tambahkan</button>
<br><br>


<select class="form-select" aria-label="Default select example" style="width:65%"name="pelanggan">
  <option selected>pilih nama pelanggan</option>
  @foreach($pelanggan as $pelanggan)
  <option value="{{$pelanggan->pelanggan_id}}">{{ $pelanggan->nama_pelanggan }}</option>
  @endforeach
</select>
</form>

<table height="2px"  class="table table-bordered col ">
<thead>
       <tr>
       <th  scope="col">No</th>
        
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
    <th><a href=""><button type="button" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
      <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
      </svg></button></th>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
<div class="container">

<h1 style= "text-align:center; color:black">total harga: {{number_format($total_harga,0,',',',')}}</h1>
</div>
<div class="container">
        <form action={{ url('Checkout') }} method="POST">
            @method('POST')
            @csrf
            <input type="hidden" name="penjualan_id" value={{ $penjualan_id }}>
            <input type="hidden" name="total" value={{ $total_harga }}>
            <button type="submit" class="btn btn-outline-dark">Checkout</button>

        </form>
    </div>
 



</body>
</html>