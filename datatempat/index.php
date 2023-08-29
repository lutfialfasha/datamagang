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
        <th>ID TEMPAT</th>
        <th>BLOK</th>
        <th>LANTAI</th>
        <th>BIDANG</th>
        <th>BAGIAN</th> 
        <th>JURUSAN</th>
           
    </tr>
  

        <tr>
            <td><?php echo $nomor=""; ?></td>
            <td><?php echo $data=isset($row['id_tempat']) ?$row['id_tempat']: ''; ?></td>
            <td><?php echo $data=isset($row['blok']) ?$row['blok']: ''; ?></td>
            <td><?php echo $data=isset($row['lantai']) ?$row['lantai']: ''; ?></td>
            <td><?php echo $data=isset($row['bidang']) ?$row['bidang']: ''; ?></td>
            <td><?php echo $data=isset($row['bagian']) ?$row['bagian']: ''; ?></td>
            <td><?php echo $data=isset($row['jurusan']) ?$row['jurusan']: ''; ?></td>
            <td>
                <a href="edit.php?id_tempat=<?php echo $data=isset($row['id_tempat']) ?$row['id_tempat']:'';?>">
                Ubah</a> 
                <a href="hapus.php?id_tempat=<?php echo $data=isset($row['id_tempat']) ?$row['id_tempat']:'';?>">
                Hapus</a>
            </td>
        </tr>

</table>

<td align="center" colspan="5">
<a href="logout.php">KELUAR</a>
</tr>
</td>
</center>
</td>
<?php include '../layouts/footer.php'; ?>