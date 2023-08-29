<?php
include '../config/db_config.php';
$id_tempat = $_POST['id_tempat'];
$blok = $_POST['blok'];
$lantai = $_POST['lantai'];
$bidang = $_POST['bidang'];
$bagian = $_POST['bagian'];
$ubah = "update tb_tempat set blok = '$blok', lantai = '$lantai', bidang = '$bidang', bagian = '$bagian' where tb_tempat.id_tempat = '$id_tempat'; ";
$hasil=mysqli_query($conn,$ubah);
if ($hasil === false):
	echo "<script>alert('Gagal Diubah!!');location.href='inputm.php';</script>";
else :
	echo "<script>alert('Berhasil Diubah!!');location.href='index.php';</script>";
endif;  

?>