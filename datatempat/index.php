<!doctype html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Data magang</title>
</head>
<body style="background: lavender;">
<?php include '../layouts/navbar.php' ; ?>
<h3 align="center">DATA TEMPAT</h3>

<center>
<h3 align="right"><a href="inputm.php">Tambah data</a> </h3>
<table <table class="table table-striped" border="1" style="background-color: rgba (255,255,255,0.5">
    <tr>
        <th>ID TEMPAT</th>
        <th>BLOK</th>
        <th>LANTAI</th>
        <th>BIDANG</th>
        <th>BAGIAN</th> 
        <th>JURUSAN</th>
        <th>AKSI</th>   
    </tr>
  
<!--
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['id_tempat']; ?></td>
            <td><?php echo $data['blok']; ?></td>
            <td><?php echo $data['lantai']; ?></td>
            <td><?php echo $data['bidang']; ?></td>
            <td><?php echo $data['bagian']; ?></td>
          
            <td>
              

                <a href="edit.php?id_tempat=<?php echo $data['id_tempat'];?>">
                Ubah</a> |
                <a href="hapus.php?id_tempat=<?php echo $data['id_tempat'];?>">
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
</body>
</html>