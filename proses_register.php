<?php
if($_POST){
    $Nama = $_POST['Nama'];
    $NIK = $_POST['NIK'];
    $NO_TLP = $_POST['no_tlp'];
    $Alamat = $_POST['Alamat'];
    $Jenis_kelamin = $_POST['Jenis_kelamin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $Jabatan_id = $_POST['id'];

    if(empty($Nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='register.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='register.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='register.php';</script>";
    } else {
        include "koneksi.php";
        // Tidak menyertakan kolom 'id' karena akan otomatis diisi oleh AUTO_INCREMENT
        $insert = mysqli_query($conn, "INSERT INTO pegawai (Nama, Nik, No_tlp, Jenis_kelamin, Alamat, username, password, Jabatan_id) 
        VALUES ('".$Nama."', '".$NIK."', '".$NO_TLP."', '".$Jenis_kelamin."', '".$Alamat."', '".$username."', '".md5($password)."', '".$Jabatan_id."')") 
        or die(mysqli_error($conn));
        
        if($insert){
            echo "<script>alert('Sukses menambahkan pegawai');location.href='register.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='register.php';</script>";
        }
    }
}
?>
