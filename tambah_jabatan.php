<!DOCTYPE html>
<html>
<?php 
    include "header.php";
?>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Jabatan</title>
    <style>
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }
        .form-header {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h3 class="form-header">Tambah Jabatan</h3>
            <form action="proses_tambah_jabatan.php" method="post">
                <div class="mb-3">
                    <label for="Nama_jabatan" class="form-label">Nama Jabatan:</label>
                    <input type="text" name="Nama_jabatan" class="form-control" id="Nama_jabatan">
                </div>
                <div class="mb-3">
                    <label for="Gaji_pokok" class="form-label">Gaji Pokok:</label>
                    <input type="text" name="Gaji_pokok" class="form-control" id="Gaji_pokok">
                </div>
                <div class="mb-3">
                    <label for="Tunjangan" class="form-label">Tunjangan:</label>
                    <input type="text" name="Tunjangan" class="form-control" id="Tunjangan">
                </div>
                <div class="d-grid">
                    <input type="submit" name="simpan" value="Tambah Jabatan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
