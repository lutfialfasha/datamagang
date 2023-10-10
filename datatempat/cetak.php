<!doctype html>
<html lang="en">
<head>
    <title> Laporan Data magang</title>
</head>

<?php include '../config/db_config.php' ; ?>

 
<h3 align="center"> LAPORAN DATA TEMPAT</h3>
<center>
<table <table class="table" border="1">
    <tr>
        <th> NO </th> 
        <th> ID TEMPAT </th> 
        <th> BLOK </th>
        <th> LANTAI </th>
        <th> BIDANG </th>
        <th> BAGIAN </th> 
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
        </tr>
        <?php
    }
        ?>
</table>
<script>
    window.print();
</script>
</center>
<?php include '../layouts/footer.php'; ?>