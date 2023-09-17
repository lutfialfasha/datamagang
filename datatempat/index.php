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
<h5 align="left"><a class="btn btn-success" href="inputm.php">Tambah data</a> </h5>
<form method="GET" action="index.php" style="text-align center;">

<div class="form-group row">
<label for="cari"  class="col-sm-1 col-form-label">Pencarian</label>
<div class="col-sm-4">
<input type="text" id ="cari" name="cari" value="<?php if(isset($_GET['cari'])){ echo $_GET['cari'];} ?>">

<button class="btn btn-success me-md-2" type="submit">Cari</button>

</div>
</div>
</div>

</form>

<table <table class="table table-bordered" border="1" style="background-color: rgba (255,255,255,0.5">
    <tr>
        <th> NO </th> 
        <th> ID TEMPAT </th> 
        <th> BLOK </th>
        <th> LANTAI </th>
        <th> BIDANG </th>
        <th> BAGIAN </th> 
        <th>AKSI</th>
    </tr>
    
    <?php 
include "../login/ceksession.php";
include "../config/db_config.php";
if(isset($_GET['cari'])){
    $pencarian = $_GET['cari'];
    $data_siswa = "select * from  tb_tempat where id_tempat like '%".$pencarian."%' or blok like '%".$pencarian."%' or lantai like '%".$pencarian."%'
    or bidang like '%".$pencarian."%' or bagian like '%".$pencarian."%'" ;
}   else {
    $data_siswa="select * from tb_tempat";
}
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
            <a  class="btn btn-primary" href="ubah.php?id_tempat=<?php echo $data['id_tempat'];?>">
                Ubah</a> 
                <a class="btn btn-danger" href="hapus.php?id_tempat=<?php echo $data['id_tempat'];?>">
                Hapus</a>
            </td>
        </tr>
        <?php
    }
        ?>
</table>
<div class="card-footer">
<td align="center" colspan="5">
<a class="btn btn-dark" href="../login/logout.php">KELUAR</a>
</tr>
</td>
</center>
</td>
<?php include '../layouts/footer.php'; ?>