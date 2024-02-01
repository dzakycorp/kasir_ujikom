<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Navbar dengan Dropdown</title>
    <style>
                   
        body {
            font-family: 'Asap Condensed';
            margin: 0;
            padding: 0;
            
            
        }

        header {
            background-color: #033E3E;
            padding: 10px 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
        }

        .navbar {
            display: flex;
            align-items: center;
        }

        .dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #033E3E;
            box-shadow: #0000;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 14px 16px;
            display: block;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: #fff;
        }

        .navbar-text {
            margin-right: auto;
        }
    </style>
</head>
<body>

    <header>
    <div class="navbar-text">D-kasier</div>
        <div class="navbar">
        <a href="#">tambah produk</a>
            <a href="#">Beranda</a>
            <div class="dropdown">
                <a href="#">Kategori</a>
                <div class="dropdown-content">
                    <a href="/data_produk">data produk</a>
                    <a href="data_pelanggan">data pelanggan</a>
                    <a href="/penjualan">penjualan</a>
                    <a href="/data_penjualan">data penjualan</a>
                </div>
            </div>
          
        </div>

    </header>

    <!-- Konten halaman lainnya -->

</body>
</html>