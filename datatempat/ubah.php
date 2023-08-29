<!doctype html>
<html lang="en">
<head>
    <title>Data Magang</title>
</head>


<body style="background: lavender;">
<?php include '../layouts/navbar.php' ; ?>

<div class="container">
<div class="card text-center">
<div class="card-header">
<h3>Ubah Data Tempat</h3>
<?php
    include "../config/db_config.php";
    $a = $_GET['id_tempat'];
    $data_tempat = "select * from tb_tempat";
    $sql = mysqli_query($conn,$data_tempat);
    while ($data = mysqli_fetch_array($sql)){
    ?>
  </div>

  <div class="card text-center">
  <div class="card-body">


<form action="proses_ubah.php" method="post">
<div class="form-group row">
    <label for="id" class="col-sm-2 col-form-label">ID TEMPAT</label>
    <div class="col-sm-5">
    <input type="number" id ="id" name="id_tempat" value="<?php echo $data['id_tempat'] ?>"readonly="" class="form-control">
  </div>
  </div>

<br>

<div class="form-group row">
    <label for="blok" class="col-sm-2 col-form-label">BLOK</label>
    <div class="col-sm-5">
                <select type="select" id="blok" name="blok" value="<?php echo $data['blok'] ?>" class="form-control">
                    <option>Pilih</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>E</option>
                    <option>F</option>
                    <option>G</option>
            </select>
    </div>
  </div>

<br>

<div class="form-group row">
    <label for="lantai" class="col-sm-2 col-form-label">LANTAI</label>
    <div class="col-sm-5">
    <input type="number" id ="lantai" name="lantai" value="<?php echo $data['lantai'] ?>" class="form-control">
  </div>
  </div>

<br>

<div class="form-group row">
    <label for="bidang" class="col-sm-2 col-form-label">BIDANG</label>
    <div class="col-sm-5">
                <select type="select" id="bidang" name="bidang" value="<?php echo $data['bidang'] ?>" class="form-control">
                    <option>Pilih</option>
                    <option>Diskominfo</option>
                    <option>BKD</option>
                    <option>Grafis</option>
            </select>
    </div>
  </div>

<br>

<div class="form-group row">
    <label for="bagian" class="col-sm-2 col-form-label">BAGIAN</label>
    <div class="col-sm-5">
    <input type="text" id ="bagian" name="bagian" value="<?php echo $data['bagian'] ?>" class="form-control">
  </div>
  </div>
<br>

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