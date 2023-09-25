<?php
include '../config/db_config.php';
$id_user = $_GET['id_user'];
$hapus = "delete from tb_user where id_user='$id_user' ";
$hasil=mysqli_query($conn,$hapus);
if ($hasil === false):
	echo "<script>alert('Gagal Dihapus!!');location.href='index.php';</script>";
else :
	echo "<script>alert('Berhasil Dihapus !!');location.href='index.php';</script>";
endif;  
?>