<?php 
session_start();
if($_SESSION['status_login'] != true){
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pegawai</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #FFEB3B 0%, #FF9800 100%); /* Gradasi kuning ke oranye */
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: #8E24AA; /* Warna ungu cerah */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-weight: bold;
            color: #fff; /* Warna putih untuk teks logo */
        }
        .nav-link {
            color: #ffffff !important;
            font-weight: 500;
        }
        .nav-link:hover {
            color: #f3e5f5; /* Warna ungu muda saat hover */
        }
        .nav-link.active {
            color: #f3e5f5; /* Warna putih saat aktif */
            font-weight: bold;
        }
        
        h2 {
            color: #8E24AA; /* Warna ungu untuk heading */
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }
        p.lead {
            color: #FF5722; /* Warna oranye cerah untuk teks utama */
            text-align: center;
            font-size: 1.2em;
        }
        .btn-primary {
            background-color: #8E24AA; /* Warna ungu pada tombol utama */
            border: none;
        }
        .btn-primary:hover {
            background-color: #6a1b9a; /* Warna ungu lebih gelap saat hover */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">PEGAWAI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tampil_pegawai.php">Daftar Pegawai</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tambah_jabatan.php">Tambah Jabatan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Content -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
