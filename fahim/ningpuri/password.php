<?php
include 'koneksi.php';
session_start();

$result1 = mysqli_query($koneksi, " SELECT * FROM customer  WHERE Username='".$_SESSION['username']."'");
$row = mysqli_fetch_array($result1);

$result2 = mysqli_query($koneksi, " SELECT customer.ID_Customer,customer.Username,customer.Nama,customer.Email,customer.Alamat,customer.No_Telepon,member.Member FROM customer INNER JOIN member on customer.ID_Member=member.ID_Member='".$_SESSION['username']."'");
$row2 = mysqli_fetch_array($result2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from https://bootdey.com  -->
    <!--  All snippets are MIT license https://bootdey.com/license -->
    <title>Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/profil.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
    img {
        width: 350px;
        height: 350px;
        border-radius: 50%;
     }
    </style>
</head>
<body style="background-image: url(images/bg_4.jpg);">
<div  class="container">
    <div style="background: #191919;" class="view-account">
        <section class="module">
            <div class="module-inner">
                <div class="side-bar">
                    <div class="user-info">
                        <img class="img-profile img-circle img-responsive center-block" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        <ul class="meta list list-unstyled">
                            <li style="color: white;" class="name"><b><?php echo ''.$row['Username'].'' ?></b></li>
                            <li style="color: white;" class="name"><p><?php echo ''.$row['Email'].'' ?></p></li>
                        </ul>
                    </div>
            		<nav class="side-menu">
        				<ul class="nav">
        					<li class=""><a href="index.php"><span class=""></span> Beranda</a></li>
        					<li class=""><a href="profil.php"><span class=""></span> Profil</a></li>
        					<li class="active"><a href="password.php"><span class=""></span> Kata Sandi</a></li>
        				</ul>
        			</nav>
                </div>
                <div class="content-panel">
                    <h2 style="color: white;" class="title">Profil<span " class="pro-label label label-warning"><?php 
                    if($row['ID_Member'] == "1"){
                        echo 'Bronze';
                    }else{
                        echo 'Gold';
                    }
                    ?></span></h2>
                    <div class="form-horizontal">
                        <fieldset class="fieldset">
                        <?php 
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan'] == "update"){
                                    echo 'Sudah di Update';
                                }
                            }
                        ?>
                            <h3 style="color: white;" class="fieldset-title">Kata Sandi</h3>
                            <form action="update_pass.php" method="post">
                            <div style="margin-left: 13px ;" class="form-group">
                                <label style="color: white;" class="col-md-2  col-sm-3 col-xs-12 control-label">Saat Ini</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text"  name="katasandinow" class="form-control" <?php echo 'value="'.$row['Password'].'"' ?> >
                                </div>
                            </div>
                            <div style="margin-left: 13px;" class="form-group">
                                <label style="color: white;" class="col-md-2  col-sm-3 col-xs-12 control-label">Baru</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="password" name="katasandi" class="form-control" >
                                </div>
                            </div>
                            <div style="width: 1500px;" class="form-group">
                                <label style="margin-left: -200px; color:white;" class="  col-sm-3 col-xs-12 control-label">Ketik ulang yang baru</label>
                                <div style="width: 735px;"  class="col-md-15 col-sm-6 col-xs-10">
                                    <input type="password" name="ulangkatasandi" class="form-control" >
                                </div>
                                <br>
                                <br>
                                <div style="padding-top: 20px; padding-left: 20px;">
                                <a href="#">lupa kata sandi Anda?</a>
                            </div>
                            </div>
                        </fieldset>
                        <hr>
                        <div class="form-group">
                            <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
                                <input class="btn btn-primary" type="submit" value="Simpan Perubahan">
                            </div>
                        </div>
                        </form>
                        </div>
                </div>
            </div>
        </section>
    </div>
</div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>