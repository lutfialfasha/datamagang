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
<?php include 'layouts/navbar.php' ; ?>
<h3 align="center">DATA SISWA</h3>
<center>
<table border="1" align="center">
    <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>JENIS KELAMIN</th>
        <th>SEKOLAH</th> 
        <th>JURUSAN</th>
        <th>TEMPAT LAHIR</th>
        <th>TANGGAL LAHIR</th>
        <th>AWAL MAGANG</th>
        <th>AKHIR MAGANG</th>
        <th>AKSI</th>   
    </tr>

        <!-- <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['sekolah']; ?></td>
            <td><?php echo $data['jurusan']; ?></td>
            <td><?php echo $data['tempat_lahir']; ?></td>
            <td><?php echo $data['tanggal_lahir']; ?></td>
            <td><?php echo $data['tgl_awal_magang']; ?></td>
            <td><?php echo $data['tgl_akhir_magang']; ?></td>
            <td><?php echo $data['id_tempat']; ?></td>
            <td>
                <a href="inputm.php">Tambah data</a>

                <a href="edit.php?id_tempat=<?php echo $data['id_tempat'];?>">
                Ubah</a> |
                <a href="hapus.php?id_tempat=<?php echo $data['id_tempat'];?>">
                Hapus</a>
            </td>
        </tr> -->
</table>

<td align="center" colspan="5">
<a href="logout.php">KELUAR</a>
</tr>
</td>
</center>
</td>
</body>
</html>