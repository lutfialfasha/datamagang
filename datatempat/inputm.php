<!doctype html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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


<form action="prosesinputm.php" method="post">
<div class="form-group row">
    <label for="id" class="col-sm-2 col-form-label">ID TEMPAT</label>
    <div class="col-sm-5">
    <input type="number" id ="id" name="id" class="form-control" placeholder="Masukan Id" aria-label="Masukan Id" id="id">
  </div>
  </div>

<br>

<div class="form-group row">
    <label for="blok" class="col-sm-2 col-form-label">BLOK</label>
    <div class="col-sm-5">
    <input type="number" id ="blok" name="blok" class="form-control" placeholder="Blok" aria-label="Blok" id="blok">
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
    <input type="text" id ="bidang" name="bidang" class="form-control" placeholder="Nama Tempat" aria-label="Nama Tempat" id="bidang">
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
</body>
</html>