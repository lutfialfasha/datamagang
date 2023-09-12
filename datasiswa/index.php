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

    <h5 align="right"><a class="btn btn-success" href="input.php">Tambah data</a> </h5>
    <center>
    <table class="table table-bordered" border="1"  style="background-color: rgba (255,255,255,0.5">
    <tr>
        <th>NO</th>
        <th>Id </th>
        <th width="100px">nama </th>
        <th width="100px">Jenis Kelamin</th>
        <th width="100px">Asal Sekolah </th> 
        <th>Jurusan </th>
        <th>Tempat Lahir </th>
        <th width="100px">Awal Magang </th>
        <th width="100px">Akhir Magang </th>
        <th>Id Tempat</th>
        <th> AKSI  </th>    
    </tr>
    <tr>
<?php 
include "../config/db_config.php";
if(isset($_GET['cari'])){
    $pencarian = $_GET['cari'];
    $data_siswa = "select * from  tb_user where id_user like '%".$pencarian."%' or nama like '%".$pencarian."%' or jenis_kelamin like '%".$pencarian."%' or sekolah like '%".$pencarian."%'
     or jurusan like '%".$pencarian."%' or tempat_lahir like '%".$pencarian."%' " ;
}   else {
    $data_siswa="select * from tb_user";
}

    
    $sql=mysqli_query($conn,$data_siswa);
    $nomor = 1;
        while($data = mysqli_fetch_array($sql)){
    ?>
    

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
                <a class="btn btn-primary" href="Ubah.php?id=<?php echo $data['id_user'];?>">
                Ubah</a> 
                <a class="btn btn-danger" href="hapus.php?id=<?php echo $data['id_user'];?>">
                Hapus</a>
            </td>

    </tr>
    <?php
    }
        ?>
</table>
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

<div class="card-footer">
<td align="center" colspan="5">
<a class="btn btn-dark" href="logout.php">KELUAR</a>
</tr>
</td>
</center>
</td>
<?php include '../layouts/footer.php'; ?>