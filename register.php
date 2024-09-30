<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .register-card {
            display: flex;
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            width: 100%;
            max-width: 900px;
            transition: transform 0.3s ease;
        }
        .register-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
        }
        .register-card-left {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            padding: 40px;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            position: relative;
            overflow: hidden;
        }
        .register-card-left::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1), transparent);
            transform: translate(-50%, -50%);
            animation: rotate 10s infinite linear;
            opacity: 0.5;
        }
        @keyframes rotate {
            100% {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }
        .register-card-left h2 {
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 20px;
    color: white; /* Mengubah warna teks menjadi putih */
}

        .register-card-left p {
            font-size: 1rem;
            margin-bottom: 30px;
        }
        .register-card-left img {
            width: 70%;
            margin-top: 20px;
        }
        .register-card-right {
            flex: 1.5;
            padding: 40px;
        }
        .form-label {
            font-weight: 500;
            color: #333;
        }
        .form-control, .form-select {
            border-radius: 10px;
            padding: 12px;
            border: 2px solid #6a11cb;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        .form-control:focus, .form-select:focus {
            border-color: #2575fc;
            box-shadow: 0 0 10px rgba(37, 117, 252, 0.5);
        }
        .btn-register {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            font-weight: bold;
            border-radius: 10px;
            padding: 12px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .btn-register::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.2), transparent);
            transform: translate(-50%, -50%) scale(0);
            transition: transform 0.5s ease;
        }
        .btn-register:hover::before {
            transform: translate(-50%, -50%) scale(1);
        }
        .btn-register:hover {
            background: linear-gradient(135deg, #2575fc, #6a11cb);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
        .form-text {
            text-align: center;
            margin-top: 15px;
            color: #333;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="register-card">
            <!-- Bagian Kiri -->
            <div class="register-card-left">
                <h2>Selamat Datang!</h2>
                <p>Daftar sekarang dan nikmati berbagai fitur eksklusif yang telah kami sediakan.</p>
                <img src="https://via.placeholder.com/300x200" alt="Image Placeholder">
            </div>
            
            <!-- Bagian Kanan -->
            <div class="register-card-right">
                <h3 class="text-center">Register</h3>
                <form action="proses_register.php" method="post">
                    <div class="mb-3">
                        <label for="Nama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="Nama" class="form-control" id="Nama" placeholder="Masukkan Nama Lengkap" required>
                    </div>
                    <div class="mb-3">
                        <label for="NIK" class="form-label">NIK</label>
                        <input type="text" name="NIK" class="form-control" id="NIK" placeholder="Masukkan NIK" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_tlp" class="form-label">No Telepon</label>
                        <input type="text" name="no_tlp" class="form-control" id="no_tlp" placeholder="Masukkan Nomor Telepon" required>
                    </div>
                    <div class="mb-3">
                        <label for="Jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select name="Jenis_kelamin" class="form-select" id="Jenis_kelamin" required>
                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Alamat" class="form-label">Alamat</label>
                        <textarea name="Alamat" class="form-control" id="Alamat" rows="3" placeholder="Masukkan Alamat" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="id" class="form-label">Jabatan</label>
                        <select name="id" class="form-select" id="id" required>
                            <option value="" disabled selected>Pilih Jabatan</option>
                            <?php 
                            include "koneksi.php";
                            $qry_jabatan = mysqli_query($conn, "SELECT * FROM jabatan");
                            while ($data_jabatan = mysqli_fetch_array($qry_jabatan)) {
                                echo '<option value="'.$data_jabatan['id'].'">'.$data_jabatan['Nama_jabatan'].'</option>';    
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="simpan" class="btn btn-register">Daftar</button>
                    </div>
                    <p class="form-text">Sudah punya akun? <a href="login.php" style="color: #2575fc;">Masuk</a></p>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
