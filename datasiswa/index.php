<!doctype html>
<html lang="en">
<head>
    <title>Data Magang</title>
</head>

<body style="background: lavender;">

<?php include '../layouts/navbar.php' ; ?>
<?php include '../config/db_config.php' ; ?>


<div class="container">
<div class="card text-center">
<div class="card-header">


<h3 align="center">DATA SISWA</h3>

    <h5 align="right"><a href="input.php">Tambah data</a> </h5>
    <center>
    <table class="table table-striped" border="1" style="background-color: rgba (255,255,255,0.5">
    <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>SEKOLAH</th> 
        <th>JURUSAN</th>
        <th>TEMPAT LAHIR</th>
        <th>AWAL MAGANG</th>
        <th>AKHIR MAGANG</th>
          
        
    </tr>
<!--
    <tr>

    <td><?php echo $nomor=""; ?></td>
            <td><?php echo $data=isset($row['id']) ?$row['id']: ''; ?></td>
            <td><?php echo $data=isset($row['nama']) ?$row['nama']: ''; ?></td>
            <td><?php echo $data=isset($row['alamat']) ?$row['alamat']: '';?></td>
            <td><?php echo $data=isset($row['sekolah']) ?$row['sekolah']: '';?></td>
            <td><?php echo $data=isset($row['jurusan']) ?$row['jurusan']: '';?></td>
            <td><?php echo $data=isset($row['tempat_lahir']) ?$row['tempat_lahir']: '';?></td>
            <td><?php echo $data=isset($row['awal_magang']) ?$row['awal_magang']: '';?></td>
            <td><?php echo $data=isset($row['akhir_magang']) ?$row['akhir_magang']: '';?></td>
            <td><?php echo $data=isset($row['id_tempat']) ?$row['id_tempat']: '';?></td>         
            <td>
                <a href="edit.php?id=<?php echo $data=isset($row['id']) ?$row['id']: '';?>">
                Ubah</a> 
                <a href="hapus.php?id=<?php echo $data=isset($row['id']) ?$row['id']: ''?>">
                Hapus</a>
            </td>

    </tr>
-->
</table>

<td align="center" colspan="5">
<a href="logout.php">KELUAR</a>
</tr>
</td>
</center>
</td>
<?php include '../layouts/footer.php'; ?>