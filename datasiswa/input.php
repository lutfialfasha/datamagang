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
   <h3>Tambah Data Siswa</h3>
  </div>

  <div class="card text-center">
  <div class="card-body">
 
  <form action="prosesinput.php" method="post">
  <div class="form-group row">
    <label for="id" class="col-sm-2 col-form-label">ID</label>
    <div class="col-sm-5">
    <input type="number" id ="id" name="id" class="form-control" placeholder="Masukan Id" aria-label="Masukan Id" id="id">
  </div>
  </div>

<br>

  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">NAMA</label>
    <div class="col-sm-5">
    <input type="text" id ="nama" name="nama" class="form-control" placeholder="Nama Lengkap" aria-label="Nama Lengkap" id="nama">
  </div>
  </div>

<br>

  <div class="form-group row">
    <label for="alamat" class="col-sm-2 col-form-label">ALAMAT</label>
    <div class="col-sm-5">
    <input type="text" id ="alamat" name="alamat" class="form-control" placeholder="Alamat" aria-label="Alamat" id="alamat">
  </div>
  </div>

  <br>

  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">JENIS KELAMIN</label>
    <div class="col-sm-5">
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="jenkel" id="inlineRadio1" value="laki laki">
  <label class="form-check-label" for="inlineRadio1">Laki Laki</label>
  
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="jenkel" id="inlineRadio1" value="perempuan">
  <label class="form-check-label" for="inlineRadio1"> Perempuan</label>
  </div>
  </div>
  </div>
  </div>

 <br>

<div class="form-group row">
    <label for="sekolah" class="col-sm-2 col-form-label">SEKOLAH</label>
    <div class="col-sm-5">
    <input type="text" id ="sekolah" name="sekolah" class="form-control" placeholder="Asal Sekolah" aria-label="Asal Sekolah" id="sekolah">
  </div>
  </div>

  <br>

  <div class="form-group row">
     <label for="jurusan" class="col-sm-2 col-form-label">JURUSAN</label>
     <div class="col-sm-5">
                <select type="select" id="jurusan" name="jurusan" class="form-control">
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
    <input type="text" id ="tempat" name="tempat" class="form-control" placeholder="Asal Tempat" aria-label="Asal Tempat" id="lahir">
  </div>
  </div>

  <br>

  <div class="form-group row">
    <label for="tgl" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
    <div class="col-sm-5">
    <input type="date" id ="tgl" name="tgl" class="form-control"id="tgl">
  </div>
  </div>

  <br>

  <div class="form-group row">
    <label for="awal" class="col-sm-2 col-form-label">AWAL MAGANG</label>
    <div class="col-sm-5">
    <input type="date" id ="awal" name="awal" class="form-control"id="awal">
  </div>
  </div>

  <br>

  <div class="form-group row">
    <label for="akhir" class="col-sm-2 col-form-label">AKHIR MAGANG</label>
    <div class="col-sm-5">
    <input type="date" id ="akhir" name="akhir" class="form-control"id="akhir">
  </div>
  </div>

  </div>
  <div class="card-footer">
  <button type="submit" value="submit" class="btn btn-primary">Simpan</button>
  <input type="reset" class="btn btn-danger"></input>
  <button type="button" value="kembali" onclick="history.go(-1)" class="btn btn-warning">kembali</button>
  </div>
</form>
<?php include '../layouts/footer.php'; ?>