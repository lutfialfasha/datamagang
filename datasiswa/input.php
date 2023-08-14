<!DOCTYPE html>
<html>
<head>
    <title>Data Magang</title>
    <style>
     * {
         margin:0; 
         padding:0;
              }
 
    nav {
        font-family: arial;
    } 
    
    nav ul {
        background:violet;
        padding: 0 20px;
        list-style: none;
        display: inline-table;
        width: 100%;
     }

    nav ul li{
        float:left;
    }

    nav ul li:hover{
        background:white;
    }

    nav ul li:hover a{
     	color:blue;
    }

    nav ul li a{
     	display: block;
     	padding: 25px;
     	color: purple;
     	text-decoration: none;
    }
    </style>

</head>
<body style="background: lavender;">
<?php include 'layouts/navbar.php';?>
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