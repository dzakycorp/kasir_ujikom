<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail penjualan</title>
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
        <BR>
        <div class="table-responsive">
            <table class="table table-bordered">
            <h1 style= "text-align:center; color:white">DETAIL PENJUALAN</h1>
 
                <thead>
                    <tr class="table-dark">
                        <th scope="col" style="text-align: center">Nama Produk</th>
                        <th scope="col" style="text-align: center">Harga</th>
                        <th scope="col" style="text-align: center">qty</th>
                        <th scope="col" style="text-align: center">Sub Total</th>
                        

                    </tr>
                </thead>
                @foreach ($detail as $detail) 
                    <tbody>
                        <tr>
                            <td style="text-align: center;">{{$detail->nama_produk}}</td>
                            <td style="text-align: center;">{{$detail->harga}}</td>
                            <td style="text-align: center;">{{$detail->	jumlah_produk}}</td>
                            <td style="text-align: center;">{{$detail->subtotal}}</td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
        <h1 style= "color:white"> Total Harga:Rp.{{ number_format($detail->total_harga, 0, ',', '.') }}</h1>
        <div>
            <a href="{{ url('data_penjualan') }}" type="submit" class="btn btn-primary" style="display:inline-block;"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z" />
                    <path fill-rule="evenodd"
                        d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                </svg> kembali</a>
                <a href="/struk/{{$detail->penjualan_id}}" class="btn btn-dark" style="float:right;">cetak struk</a>
        </div>
        
    </div>
   
</body>
</html>