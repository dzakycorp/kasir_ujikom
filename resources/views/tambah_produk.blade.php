<!DOCTYPE html>
<html>
<head>
  
    <title>Form Pendaftaran</title>
   
    <style>
        body {
            font-family: Arial, sans-serif;
       
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-container {
            background-color: #fff;
            border-radius: 7px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 20px;
        }

        .register-container h2 {
            text-align: left;
            color: #333;
        }

        .form-group {
            margin: 10px 0;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input {
            width: 375px;
            height: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 7px;
        }

        .form-group button {
            width: 100%;
            background-color: #033E3E;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 7px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #033E3E;
        }
    </style>
</head>

<body>

    <div class="register-container">
        <h2>TAMBAH PRODUK</h2>
        <form action="tambah_produk" method="POST" enctype="multipart/form-data" >
        @method('post')
        @csrf

        <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" id="nama_produk" name="nama_produk" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" id="harga" name="harga" required>
            </div>
            <div class="form-group">
                <label for="email">stok</label>
                <input type="text" id="stok" name="stok" required>

                <button type="submit" class="btn btn-outline-secondary">kirim</button>        
           
        </form>
    </div>
</body>

</html>

