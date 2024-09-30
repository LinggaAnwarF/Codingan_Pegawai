<?php
if($_POST){
    $Nama_jabatan=$_POST['Nama_jabatan'];
    $Gaji=$_POST['Gaji_pokok'];
    $Tunjangan=$_POST['Tunjangan'];
    if(empty($Nama_jabatan)){
        echo "<script>alert('nama jabatan tidak boleh kosong');location.href='tambah_jabatan.php';</script>";
    } elseif (empty($Gaji)) {
        echo "<script>alert('gaji tidak boleh kosong');location.href='tambah_jabatan.php';</script>";
    } elseif (empty($Tunjangan)){
        echo "<script>alert('tunjangan tidak boleh kosong');location.href='tambah_jabatan.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into jabatan (Nama_jabatan, Gaji_pokok, Tunjangan) value ('".$Nama_jabatan."', '".$Gaji."', '".$Tunjangan."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan jabatan');location.href='tambah_jabatan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan jabatan');location.href='tambah_jabatan.php';</script>";
        }
    }
}
?>