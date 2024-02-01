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

        .register-container h1 {
            text-align: flex;
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
        <h2>UPDATE PELANGGAN</h2>
        <form action="{{url('/update_pelanggan',$pelanggan->pelanggan_id)}}" method="POST" enctype="multipart/form-data" >
        @method('post')
        @csrf

        <div class="form-group">
                <label for="nama_pelanggan">Nama Pelanggan</label>
                <input type="text" id="nama_pelanggan" name="nama_pelanggan"  value="{{$pelanggan->nama_pelanggan}}" required>
            </div>
            <div class="form-group">
                <label for="alamat">alamat</label>
                <input type="text" id="alamat" name="alamat" value="{{$pelanggan->alamat}}" required>
            </div>
            <div class="form-group">
                <label for="nomor_telepon">nomor telepon</label>
                <input type="text" id="nomor_telepon" name="nomor_telepon" value="{{$pelanggan->nomor_telepon}}" required>

                <button type="submit" class="btn btn-outline-secondary">update</button>        
           
        </form>
    </div>
</body>

</html>

