<?php include'layouts/navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body id="page-top">
<?php 
include "login/ceksession.php";
include "config/db_config.php";
    $jumlah_siswa="select count(*) as jumlah from tb_user ";
    $sql=mysqli_query($conn,$jumlah_siswa);
    $data = mysqli_fetch_array($sql);
     
    $jumlah_tempat="select count(*) as jumlah from tb_tempat ";
    $sql=mysqli_query($conn,$jumlah_tempat);
    $data1 = mysqli_fetch_array($sql);
   
    ?>
    <br>
                
                        <h1>Dashboard</h1>
                    <br>
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-1">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class=" text-primary text-uppercase mb-1">
                                                <a class="btn btn-success" href="datasiswa/index.php">Jumlah Data Siswa Magang <br> <?php echo $data['jumlah'] ?> Orang</a>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-1">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-success text-uppercase mb-1">
                                            <a class="btn btn-primary" href="datatempat/index.php">Jumlah Data Tempat Magang <br> <?php echo $data1['jumlah'] ?> Tempat</a>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
</body>
 <?php include'layouts/footer.php'; ?>