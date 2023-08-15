<!doctype html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Data Magang</title>
</head>
<body style="background: lavender;">
<?php include '../layouts/navbar.php';?>
<h3 align="center">INPUT DATA SISWA</h3>
<form action="prosesinput.php" method="post">
    <center>
    <table border="0" align="center">
        <tr>
            <td>Id  </td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>Nama </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" name="jenkel"></td>
        </tr>
        <tr>
            <td>Sekolah</td>
            <td><input type="text" name="sekolah"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td><input type="text" name="Jurusan"></td>
        </tr>
        <tr>
            <td>tempat Lahir</td>
            <td><input type="text" name="tempat_lahir"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggal_lahir"></td>
        </tr>
        <tr>
            <td>Tanggal Awal Magang</td>
            <td><input type="date" name="awal"></td>
        </tr>
        <tr>
            <td>Tanggal Selesai Magang</td>
            <td><input type="date" name="akhir"></td>
        </tr>
        <tr>
            <td>Tempat</td>
            <td>
                <select name="tempat">
                    <option>--Pilih--</option>
                    <?php
                    
                    include "koneksi.php";
                    $jurusan="select * from tb_user";
                    $sql_jurusan=mysqli_query($koneksi,$jurusan);
                    while ($data_jurusan=mysqli_fetch_array($sql_jurusan)){
                    $i++;
                    ?>
                    <option value="<?php echo $data_jurusan['tb_user'];?>">
                        <?php echo $data_jurusan['tempat'];?>
                    </option>
                    <?php
                }
                    ?>             
            </select>
        </td>
    </center>
        </tr>
        <tr>
            <td><input type="submit" value="SIMPAN"></td>
            <td><input type="button" value="KEMBALI" onclick="history.go(-1);"></td>
        </tr>
    </table>
</form>
</body>
</html>