<?php
include '../config/db_config.php';
$id_tempat = $_POST['id_tempat'];
$blok = $_POST['blok'];
$lantai = $_POST['lantai'];
$bidang = $_POST['bidang'];
$bagian = $_POST['bagian'];
$tambah = "insert into tb_tempat values ('$id_tempat','$blok','$lantai','$bidang','$bagian')";
$hasil = mysqli_query($conn,$tambah);
	if ($hasil === false):
	echo "<script>alert('Gagal Disimpan!!');location.href='inputm.php';</script>";
else :
	echo "<script>alert('Berhssil Disimpan!!');location.href='index.php';</script>";
endif;  
?>