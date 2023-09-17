<?php 
session_start();

if (!isset($_SESSION['login'])){

	echo "<script>alert('Silahkan login Kembali');location.href='login.php';</script>";
}
?>