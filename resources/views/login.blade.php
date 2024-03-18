
<!DOCTYPE html>
<html>
<!-- <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
<head> -->
    <title>Form Login</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
  
    <style>
        body {
            font-family: Arial, sans-serif;
        
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://i.ibb.co/yn6QSsV/background.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        
        .login-container {
            background-color: #ffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 20px;
            
        }
        
        .login-container h2 {
            text-align: center;
            color: #333;
        }
        
        .form-group {
            margin: 8px;
            
        }
        
        .form-group label {
            display: block;
            font-weight: bold;
        }
        
        .form-group input {
            width: 345px;
            height: 37px;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 7px;
        }
        
        .form-group button {
            width: 100%;
            background-color: 	#000080;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        
        .form-group button:hover {
            background-color: 	#000080;
        }
    </style>
    
</head>
<body>
    <div class="login-container">
    @if (session()->has('alert'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert" >
    {{ session('alert') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    @endif
        <h2>LOGIN</h2>
        <form action="{{url('/login')}}" method="post">
          @method('post')
          @csrf
       
            <div class="form-group">
                <label for="username">username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Masuk</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
</body>
</html>
