<?php
$mysqli= new mysqli("localhost", "root", "", "db_magang");
if ($mysqli->connect_errno):
	echo "Gagal mengkoneksikan ke MySQL", $mysqli-
connect_error;
endif;
?>