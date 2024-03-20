<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background-image: url('https://i.ibb.co/yn6QSsV/background.png');
      background-repeat: no-repeat;
     background-attachment: fixed;
      background-size: 100% 100%;

    }

    header {
      background: #000080;
      color: white;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      top: 0;
      position: sticky;
      width: 100%;
      z-index: 1;
    }

    .navbar ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
      display: flex;
    }

    .navbar ul li {
      margin-right: 15px;
    }

    .navbar ul li:last-child {
      margin-right: 0;
    }

    .navbar ul li a {
      text-decoration: none;
      color: white;
    }

    .sidebar {
      background: #000030;
      color: white;
      width: 200px;
      padding: 20px;
      box-sizing: border-box;
      height: 100vh;
      position: fixed;
      left: 0;
      top: 60px;
    }

    .sidebar ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    .sidebar ul li {
      margin-bottom: 30px;
      border-bottom: 2px solid #555;
      padding-bottom: 8px;
    }

    .sidebar ul li a {
      text-decoration: none;
      color: white;
    }

    /* Tambahkan margin untuk konten utama */
    .content {
      margin-left: 220px; /* Sesuaikan dengan lebar sidebar + sedikit jarak */
      padding: 20px; /* Tambahkan padding agar konten tidak terlalu dekat dengan tepi */
    }
  </style>
</head>
<body>
  <header>
    <h3>D-KASIR</h3>
    <nav class="navbar">
      <ul>
        <li><a href="/dashboard">Dashboard</a></li>
      </ul>
    </nav>
  </header>

  <div class="sidebar">
    <ul>
      <li><a href="/penjualan">PENJUALAN</a></li>
      <li><a href="/data_produk">DATA PRODUK</a></li>
      <li><a href="/data_pelanggan">DATA PELANGGAN</a></li>
      <li><a href="/data_penjualan">DATA PENJUALAN</a></li>
      <li><a href="/logout">LOGOUT</a></li>
    </ul>
  </div>

  <div class="content">
 
  <div style="display:flex;">
        <div class="card" style="width: 18rem; margin-right:5%; border-radius:10px;">
        <div class="card-body" style="background-color: #000030; border-radius:10px;">
            <h5 style="color:white;" class="card-title">Data pelanggan</h5>
            <p class="card-text">
            <svg style="color:white;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
            </svg> 
            </p>
            <h3 style="color:white;">{{$total_penjualan}}</h3>
            <a href="/data_pelanggan" style="color:white; text-decoration:none;">More Info
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
            <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1"/>
            </svg>
            </a>
            </div>
        </div>

    <div class="card" style="width: 18rem; border-radius:10px;">
        <div class="card-body" style="background-color: #000030; border-radius:10px;">
            <h5 class="card-title" style="color:white;">Data produk</h5>
            <p style="display:flex; color:white;" class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
            <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"/>
            </svg>
            </p>
            <h3 style="color:white;">{{$total_produk}}</h3>
            <a href="/data_produk" style="color:white; text-decoration:none;">More Info
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
            <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1"/>
            </svg>
          
        </a>
        </div>
    </div>

    <div class="card" style="width: 18rem; margin-left:5%; border-radius:10px;">
        <div class="card-body" style="background-color: #000030; border-radius:10px;">
            <h5 style="color:white;" class="card-title">Data penjualan</h5>
            <p class="card-text">
            <svg style="color:white;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
        </svg>
        
            </p>
            <h3 style="color:white;">{{$total_penjualan}}</h3>
            <a href="data_penjualan" style="color:white; text-decoration:none;">More Info
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
        <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1"/>
        </svg>
      
        </a>
        </div>
    </div>
  </div>
  <br><br>
  @if (session('nama'))
  <div class="alert alert-primary" role="alert" id="alert" style="text-align: center; width:30%; margin:auto">
   selamat datang {{ session('nama') }}
  </div>
@endif
  <script>
    // Mengambil elemen alert
    var alertBox = document.getElementById("alert");

    // Menampilkan alert
    alertBox.style.display = "block";

    // Menyembunyikan alert setelah 5 detik
    setTimeout(function() {
      alertBox.style.display = "none";
    }, 4000); // 5000 milidetik atau 5 detik
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</body>
</html>
