<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Navbar</title>
    <style>
                   
        body {
            font-family: 'Asap Condensed';
            margin: 0;
            padding: 0;
            
            
            
        }

        header {
            background-color: 	#000080;
            height: 10vh;
            width: 100%;
            padding: 10px 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
            top: 0;
            position: sticky;
            width: 100%;
            z-index: 1;
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
            background-color: #000080;
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
    <div class="navbar-text">
    <h3>D-KASIR</h3>
    </div>
        <div class="navbar">
        <a href="/dashboard">Dashboard</a>
        <a href="/penjualan">Penjualan</a>
            <div class="dropdown">
                <a href="#">Kategori</a>
                <div class="dropdown-content">
                    <a href="/data_produk">data produk</a>
                    <a href="data_pelanggan">data pelanggan</a>
                    <a href="/data_penjualan">data penjualan</a>
                    <a href="/register">registrasi akun</a>
                    <a href="/logout">logout</a>
                </div>
            </div>
            <!-- <button type="submit" class="btn btn-outline-danger" href="/logout">Logout</button> -->

          
        </div>

    </header>

    <!-- Konten halaman lainnya -->

</body>
</html>
