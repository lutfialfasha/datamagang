<?php
include '../config/db_config.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$sekolah = $_POST['sekolah'];
$jurusan = $_POST['jurusan'];
$tempat = $_POST['tempat'];
$awal = $_POST['awal'];
$akhir = $_POST['akhir'];
$id_tempat = $_POST['id_tempat'];
$tambah = "INSERT INTO tb_user (id_user, nama, jenis_kelamin, sekolah, jurusan, tempat_lahir, awal_magang, akhir_magang, id_tempat) VALUES ('$id','$nama','$jenis_kelamin','$sekolah','$jurusan','$tempat','$awal','$akhir','$id_tempat');";
$hasil = mysqli_query($conn,$tambah);
if ($hasil === false):
	echo "<script>alert('Gagal Disimpan!!');location.href='index.php';</script>";  
else :
	echo "<script>alert('Berhasil Disimpan!!');location.href='index.php';</script>";
endif;  

?>