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