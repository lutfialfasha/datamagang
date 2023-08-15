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
<?php include '../layouts/navbar.php' ; ?>
<h3 align="center">INPUT DATA TEMPAT MAGANG</h3>
<form action="prosesinputm.php" method="post">
    <center>
    <table border="0" align="center">
        <tr>
            <td>ID</td>
            <td><input type="text" name="Vid"></td>
        </tr>
        <tr>
            <td>BLOK</td>
            <td><input type="text" name="Vblok"></td>
        </tr>
        <tr>
            <td>LANTAI</td>
            <td><input type="text" name="Vlantai"></td>
        </tr>
        <tr>
            <td>BIDANG</td>
            <td><input type="text" name="Vbidang"></td>
        </tr>
        <tr>
            <td>BAGIAN</td>
            <td><input type="text" name="Vbagian"></td>
        </tr>
        <tr>
           
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