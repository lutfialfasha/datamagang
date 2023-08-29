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
<h3>Tambah Data Tempat</h3>
  </div>

  <div class="card text-center">
  <div class="card-body">


<form action="proses.php" method="post">
<div class="form-group row">
    <label for="id" class="col-sm-2 col-form-label">ID TEMPAT</label>
    <div class="col-sm-5">
    <input type="number" id ="id" name="id_tempat" class="form-control" placeholder="Masukan Id" aria-label="Masukan Id" id="id">
  </div>
  </div>

<br>

<div class="form-group row">
    <label for="blok" class="col-sm-2 col-form-label">BLOK</label>
    <div class="col-sm-5">
                <select type="select" id="blok" name="blok" class="form-control">
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
    <input type="number" id ="lantai" name="lantai" class="form-control" placeholder="Lantai" aria-label="Lantai" id="lantai">
  </div>
  </div>

<br>

<div class="form-group row">
    <label for="bidang" class="col-sm-2 col-form-label">BIDANG</label>
    <div class="col-sm-5">
                <select type="select" id="bidang" name="bidang" class="form-control">
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
    <input type="text" id ="bagian" name="bagian" class="form-control" placeholder="Di Tempatkan Di..." aria-label="Di Tempatkan Di..." id="bagian">
  </div>
  </div>

<br>

<div class="card-footer">
  <button type="submit" value="submit" class="btn btn-primary">Simpan</button>
  <input type="reset" class="btn btn-danger"></input>
  <button type="button" value="kembali" onclick="history.go(-1)" class="btn btn-warning">kembali</button>
  </div>
</form>
<?php include '../layouts/footer.php'; ?>