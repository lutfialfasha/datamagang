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
    <table class="table table-bordered" border="1" style="background-color: rgba (255,255,255,0.5">
    <tr>
        <th> NO</th>
        <th> ID USER</th>
        <th> NAMA </th>
        <th> JENIS KELAMIN </th>
        <th> SEKOLAH </th> 
        <th> JURUSAN </th>
        <th> TEMPAT LAHIR </th>
        <th> AWAL MAGANG </th>
        <th> AKHIR MAGANG </th>
        <th> ID TEMPAT </th>
        <th> AKSI  </th>
          
        
    </tr>
    <?php
    include "../config/db_config.php";
    $data_siswa="select * from tb_user";
    $sql=mysqli_query($conn,$data_siswa);
    $nomor = 1;
        while($data = mysqli_fetch_array($sql)){
        ?>
    <tr>

    <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['id_user']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['jenis_kelamin'];?></td>
            <td><?php echo $data['sekolah'];?></td>
            <td><?php echo $data['jurusan'];?></td>
            <td><?php echo $data['tempat_lahir'];?></td>
            <td><?php echo $data['awal_magang'];?></td>
            <td><?php echo $data['akhir_magang'];?></td>
            <td><?php echo $data['id_tempat'];?></td>
               
            <td>
                <a href="edit.php?id=<?php echo $data['id_user'];?>">
                Ubah</a> 
                <a href="hapus.php?id=<?php echo $data['id_user'];?>">
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