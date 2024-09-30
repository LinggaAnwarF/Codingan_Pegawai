<?php
    if($_POST){
        $id_pegawai=$_POST['Id'];
        $nama_pegawai=$_POST['Nama'];
        $NIK=$_POST['Nik'];
        $alamat=$_POST['Alamat'];
        $Jenis_kelamin=$_POST['Jenis_kelamin'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $id=$_POST['Jabatan_id'];
        if(empty($nama_pegawai)){
            echo "<script>alert('nama pegawai tidak boleh kosong');location.href='register.php';</script>";

        } elseif(empty($username)){
            echo "<script>alert('username tidak boleh kosong');location.href='register.php';</script>";
        } else {
            include "koneksi.php";
            if(empty($password)){
                $update=mysqli_query($conn,"update pegawai set Nama='".$nama_pegawai."',Nik='".$NIK."', Jenis_kelamin='".$Jenis_kelamin."', Alamat='".$alamat."', username='".$username."', Jabatan_id='".$id."' where Id = '".$id_pegawai."' ") or die(mysqli_error($conn));
                if($update){
                    echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
                } else {
                    echo "<script>alert('Gagal update pegawai');location.href='ubah_pegawai.php?Id=".$id_pegawai."';</script>";
                }
            } else {
                $update=mysqli_query($conn,"update pegawai set Nama='".$nama_pegawai."',Nik='".$NIK."', Jenis_kelamin='".$Jenis_kelamin."', Alamat='".$alamat."', username='".$username."', password='".md5($password)."', Jabatan_id='".$id."' where Id = '".$id_pegawai."'") or die(mysqli_error($conn));
                if($update){
                    echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
                } else {
                    echo "<script>alert('Gagal update pegawai');location.href='ubah_pegawai.php?Id=".$id_pegawai."';</script>";
                }
            }
            
        } 
    }
?>