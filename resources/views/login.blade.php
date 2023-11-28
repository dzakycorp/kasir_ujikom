@if(session("Error"))
   <div class= "alert alert-danger">{{session("Error")}}</div>
   @endif
<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #033E3E;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
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
            width: 370px;
            height: 25px;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 7px;
        }
        
        .form-group button {
            width: 100%;
            background-color: #033E3E;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        
        .form-group button:hover {
            background-color: #033E3E;
        }
    </style>
</head>
<body>
    <div class="login-container">
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
</body>
</html>
