<!doctype html>
<html lang="en">
<head>
    <title> Laporan Data Magang</title>
</head>

<body>

<h3 align="center"> LAPORAN DATA SISWA</h3>

<center>    
    <table class="table" border="1">
    <tr>
        <th>NO</th>
        <th width="100px">nama </th>
        <th width="100px">Jenis Kelamin</th>
        <th width="100px">Asal Sekolah </th> 
        <th>Jurusan </th>
        <th>Tempat Lahir </th>
        <th width="100px">Awal Magang </th>
        <th width="100px">Akhir Magang </th>
        <th>Tempat</th>
    </tr>
    <tr>
<?php 
include "../config/db_config.php";

    $data_siswa="select * from tb_user  user inner join tb_tempat tempat on user.id_tempat = tempat.id_tempat";
  
    $sql=mysqli_query($conn,$data_siswa);
    $nomor = 1;
        while($data = mysqli_fetch_array($sql)){
    ?>
    

    <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['jenis_kelamin'];?></td>
            <td><?php echo $data['sekolah'];?></td>
            <td><?php echo $data['jurusan'];?></td>
            <td><?php echo $data['tempat_lahir'];?></td>
            <td><?php echo $data['awal_magang'];?></td>
            <td><?php echo $data['akhir_magang'];?></td>
            <td><?php echo $data['bidang'];?> - <?php echo $data['bagian'];?></td>
    </tr>
  <?php 
        }
  ?>
</table>
<script>
    window.print();
</script>
</center>
</td>
<?php include '../layouts/footer.php'; ?>