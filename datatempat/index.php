<!doctype html>
<html lang="en">
<head>
    <title>Data magang</title>
</head>
<body style="background: lavender;">
<?php include '../layouts/navbar.php' ; ?>
<?php include '../config/db_config.php' ; ?>

<div class="container">
<div class="card text-center">
<div class="card-header">
    
<h3 align="center">DATA TEMPAT</h3>

<center>
<h5 align="right"><a href="inputm.php">Tambah data</a> </h5>
<table <table class="table table-striped" border="1" style="background-color: rgba (255,255,255,0.5">
    <tr>
        <th>| NO |</th> 
        <th>| ID TEMPAT |</th> 
        <th>| BLOK |</th>
        <th>| LANTAI |</th>
        <th>| BIDANG |</th>
        <th>| BAGIAN |</th> 
        <th>AKSI</th>
    </tr>
    <?php
    include "../config/db_config.php";
    $data_siswa="select * from tb_tempat";
    $sql=mysqli_query($conn,$data_siswa);
    $nomor = 1;
        while($data = mysqli_fetch_array($sql)){
        ?>

        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['id_tempat']; ?></td>
            <td><?php echo $data['blok']; ?></td>
            <td><?php echo $data['lantai']; ?></td>
            <td><?php echo $data['bidang']; ?></td>
            <td><?php echo $data['bagian']; ?></td>
            <td>
            <a href="ubah.php?id_tempat=<?php echo $data['id_tempat'];?>">
                Ubah</a> |
                <a href="hapus.php?id_tempat=<?php echo $data['id_tempat'];?>">
                Hapus</a>
            </td>
        </tr>
        <?php
    }
        ?>
</table>

<td align="center" colspan="5">
<a href="logout.php">KELUAR</a>
</tr>
</td>
</center>
</td>
<?php include '../layouts/footer.php'; ?>