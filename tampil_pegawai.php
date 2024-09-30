<!DOCTYPE html>
<html lang="id">
<?php 
    include "header.php";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Pegawai</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            background-color: #f5f5f5; /* Latar belakang abu-abu terang */
            color: #333333; /* Warna teks gelap */
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        h3 {
            text-align: center;
            margin-bottom: 30px;
            color: #1976d2; 
            font-weight: bold;
        }

        /* Kotak untuk tabel */
        .table-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1); /* Shadow untuk efek kotak */
        }

        /* Tabel */
        table {
            background-color: #ffffff;
            color: #000000;
            border: 1px solid #dddddd;
        }

        tr:hover {
            background-color: #f2f2f2; /* Sedikit lebih terang saat di-hover */
        }

        td, th {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dddddd;
        }

        /* Mengatur tombol tambah pegawai */
        .btn-primary {
            background-color: #1976d2;
            border-color: #1976d2;
            margin-top: 20px;
        }

        /* Hover tombol tambah pegawai */
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

    </style>
</head>
<body>
    <div class="container">
        <h3>Daftar Pegawai</h3>
        <div class="table-container">
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA PEGAWAI</th>
                            <th>NIK</th>
                            <th>NO TELEPON</th>
                            <th>ALAMAT</th>
                            <th>JENIS KELAMIN</th>
                            <th>USERNAME</th>
                            <th>JABATAN</th>
                            <th>GAJI TOTAL</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        include "koneksi.php";
                        $qry_pegawai = mysqli_query($conn, "SELECT * FROM pegawai JOIN jabatan ON pegawai.Jabatan_id = jabatan.id");
                        $no=0;
                        while($data_pegawai=mysqli_fetch_array($qry_pegawai)){
                        $no++; ?>
                        <tr>
                            <td><?=$no?></td>
                            <td><?=$data_pegawai['Nama']?></td>
                            <td><?=$data_pegawai['Nik']?></td>
                            <td><?=$data_pegawai['No_tlp']?></td>
                            <td><?=$data_pegawai['Alamat']?></td>
                            <td><?=$data_pegawai['Jenis_kelamin']?></td>
                            <td><?=$data_pegawai['username']?></td>
                            <td><?=$data_pegawai['Nama_jabatan']?></td>
                            <td><?=number_format($data_pegawai['Gaji_pokok'] + $data_pegawai['Tunjangan'], 0, ',', '.')?></td>
                            <td>
                                <a href="ubah_pegawai.php?Id=<?=$data_pegawai['Id']?>" class="btn btn-success btn-sm">Ubah</a> 
                                <a href="hapus.php?Id=<?=$data_pegawai['Id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <a href="register.php" class="btn btn-primary">Tambah Pegawai</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
