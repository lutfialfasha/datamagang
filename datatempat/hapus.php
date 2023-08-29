<?php
include '../config/db_config.php';
$id_tempat = $_GET['id_tempat'];
$hapus = "delete from tb_tempat where id_tempat='$id_tempat' ";
$hasil=mysqli_query($conn,$hapus);
if ($hasil === false):
	echo "<script>alert('Gagal Dihapus!!');location.href='inputm.php';</script>";
else :
	echo "<script>alert('Berhasil Dihapus !!');location.href='index.php';</script>";
endif;  
?>