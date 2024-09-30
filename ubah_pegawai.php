<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <div class="container">
    <?php 
    include "koneksi.php";
    $qry_get_pegawai=mysqli_query($conn,"select * from pegawai where 
Id = '".$_GET['Id']."'");
    $dt_pegawai=mysqli_fetch_array($qry_get_pegawai);
    ?>
    <h3>Ubah Pegawai</h3>
    <form action="proses_ubah_pegawai.php" method="post">
        <input type="hidden" name="Id" value= 
  "<?=$dt_pegawai['Id']?>">
        Nama :
  <input type="text" name="Nama" value=   "<?=$dt_pegawai['Nama']?>" class="form-control">
        NIK : 
  <input type="text" name="Nik" value="<?=$dt_pegawai['Nik']?>" class="form-control">
        Jenis Kelamin : 
        <?php 
        $arr_gender=array('L'=>'Laki-laki','P'=>'Perempuan');
        ?>
        <select name="Jenis_kelamin" class="form-control">
            <option></option>
            <?php foreach ($arr_gender as $key_gender => $val_gender):
                if($key_gender==$dt_pegawai['Jenis_kelamin']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
<option value="<?=$key_gender?>" <?=$selek?>><?=$val_gender?></option>
            <?php endforeach ?>
        </select>
        Alamat : 
<textarea name="Alamat" class="form-control" rows="4"><?=$dt_pegawai['Alamat']?></textarea>
<label for="jabatan" class="form-label">Jabatan</label>
          <select name="Jabatan_id" class="form-control"  required>
              <option value="">Pilih jabatan</option>
              <?php
                  $qry_jabatan = mysqli_query($conn, "SELECT * FROM jabatan");
                  while ($dt_jabatan = mysqli_fetch_array($qry_jabatan)) {
                      $selected = ($dt_jabatan['id'] == $dt_pegawai['id']) ? 'selected' : '';
                      echo '<option value="' . $dt_jabatan['id'] . '" ' . $selected . '>' . $dt_jabatan['Nama_jabatan'] . '</option>';
              }
              ?>
          </select>
        Username : 
        <input type="text" name="username" value="<?=$dt_pegawai['username']?>" class="form-control">
        Password : 
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="simpan" value="Ubah Pegawai" class="btn btn-primary">
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
