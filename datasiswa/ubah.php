<!doctype html>
<html lang="en">
<head>
    <title>Data Magang</title>
</head>


<body style="background: lavender;">
<?php include '../layouts/navbar.php';?>

<div class="container">
<div class="card text-center">
<div class="card-header">
   <h3>Ubah Data Siswa</h3>
   <?php
    include "../config/db_config.php";
    $a = $_GET['id'];
    $data_tempat = "select * from tb_user where tb_user.id_user = '$a';";
    $sql = mysqli_query($conn,$data_tempat);
    while ($data = mysqli_fetch_array($sql)){
    ?>
  </div>
  </div>

  <div class="card text-center">
  <div class="card-body">
 
  <form action="proses_ubah.php" method="post">

  <div class="form-group row">
    <label for="id_tempat" class="col-sm-2 col-form-label">Id Tempat Magang</label>
    <div class="col-sm-5">
    <select name="id_tempat" value="<?php echo $data['id_tempat'] ?>" class="form-control">
                    <option>Pilih Id Magang</option>
                    <?php
                    include "../config/db_config.php";
                    $id="select * from tb_tempat";
                    $sql_jurusan=mysqli_query($conn,$id);
                    while ($data_jurusan=mysqli_fetch_array($sql_jurusan)){
                    $i++;
                    ?>
                    <option value="<?php echo $data_jurusan['id_tempat'];?>">
                        <?php echo $data_jurusan['id_tempat'];?>
                    </option>
                    <?php
                }
                    ?>             
            </select>
  </div>
  </div>

  <br>

  <div class="form-group row">
    <label for="id" class="col-sm-2 col-form-label">ID</label>
    <div class="col-sm-5">
    <input type="number" id ="id" name="id" value="<?php echo $data['id_user'] ?>" readonly="" class="form-control" placeholder="Masukan Id" aria-label="Masukan Id" id="id">
  </div>
  </div>

<br>

  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">NAMA</label>
    <div class="col-sm-5">
    <input type="text" id ="nama" name="nama" value="<?php echo $data['nama'] ?>" class="form-control" placeholder="Nama Lengkap" aria-label="Nama Lengkap" id="nama">
  </div>
  </div>

<br>

  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">JENIS KELAMIN</label>
    <div class="col-sm-5">
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="laki laki">
  <label class="form-check-label" for="inlineRadio1">Laki Laki</label>
  
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="perempuan">
  <label class="form-check-label" for="inlineRadio1"> Perempuan</label>
  </div>
  </div>
  </div>
  </div>

 <br>

<div class="form-group row">
    <label for="sekolah" class="col-sm-2 col-form-label">SEKOLAH</label>
    <div class="col-sm-5">
    <input type="text" id ="sekolah" name="sekolah" value="<?php echo $data['sekolah'] ?>" class="form-control" placeholder="Asal Sekolah" aria-label="Asal Sekolah" id="sekolah">
  </div>
  </div>

  <br>

  <div class="form-group row">
     <label for="jurusan" class="col-sm-2 col-form-label">JURUSAN</label>
     <div class="col-sm-5">
                <select type="select" id="jurusan" name="jurusan" value="<?php echo $data['jurusan'] ?>" class="form-control">
                    <option>Pilih</option>
                    <option>RPL</option>
                    <option>DKV</option>
                    <option>Multi Media</option>
            </select>
  </div>
  </div>

  <br>

  <div class="form-group row">
    <label for="tempat" class="col-sm-2 col-form-label">TEMPAT LAHIR</label>
    <div class="col-sm-5">
    <input type="text" id ="tempat" name="tempat" value="<?php echo $data['tempat_lahir'] ?>" class="form-control" id="lahir">
  </div>
  </div>

  <br>

  <div class="form-group row">
    <label for="awal" class="col-sm-2 col-form-label">AWAL MAGANG</label>
    <div class="col-sm-5">
    <input type="date" id ="awal" name="awal" value="<?php echo $data['awal_magang'] ?>" class="form-control" id="awal">
  </div>
  </div>

  <br>

  <div class="form-group row">
    <label for="akhir" class="col-sm-2 col-form-label">AKHIR MAGANG</label>
    <div class="col-sm-5">
    <input type="date" id ="akhir" name="akhir" value="<?php echo $data['akhir_magang'] ?>" class="form-control" id="akhir">
  </div>
  </div>

  </div>
  <div class="card-footer">
  <button type="submit" value="submit" class="btn btn-primary">Simpan</button>
  <input type="reset" class="btn btn-danger"></input>
  <button type="button" value="kembali" onclick="history.go(-1)" class="btn btn-warning">kembali</button>
  </div>
</form>
<?php
    }
?>
<?php include '../layouts/footer.php'; ?>