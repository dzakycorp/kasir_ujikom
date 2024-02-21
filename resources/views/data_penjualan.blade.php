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
<br>

<h1 style= "text-align:center; color:white">DATA PENJUALAN</h1>

<div class="container">
 
    <table class="table table-bordered border-secondary">
    
      
  <thead>
   
</tr>
    <tr class="table-dark">
    
     
     <th scope="col"style="width:20%">TANGGAL</th>
      <th scope="col" style="width:25%"> NAMA PELANGGAN</th>
      <th scope="col"style="width:17%">TOTAL</th>
      <th scope="col"style="width:10%">OPSI</th>

    </tr>
   
  

    <tbody>
    @foreach ($penjualan as $penjualan)
    <tr>
      <td>{{$penjualan->tanggal_penjualan}}</td>
      <td>{{$penjualan->nama_pelanggan}}</td>
      <td>{{$penjualan->total_harga}}</td>
      <td>   <a href="detail_penjualan/{{ $penjualan->penjualan_id }}" type="submit"
                                    class="btn btn-outline-dark" style="margin:4px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                    </svg>Detail</a></td>
      
     
  </thead>
     </tr>
  
    @endforeach
</table>
 
</body>

</html>