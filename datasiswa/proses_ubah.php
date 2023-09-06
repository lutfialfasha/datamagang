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
$ubah = "update tb_user set nama = '$nama', jenis_kelamin = '$jenis_kelamin', sekolah = '$sekolah', jurusan = '$jurusan', tempat_lahir = '$tempat', awal_magang = '$awal', akhir_magang = '$akhir', id_tempat = '$id_tempat' where tb_user.id_user = '$id'; ";
$hasil=mysqli_query($conn,$ubah);
if ($hasil === false):
	
else :
	echo "<script>alert('Berhasil Diubah!!');location.href='index.php';</script>";
endif;  

?>