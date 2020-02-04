<?php
include 'koneksi.php';
session_start();

$result1 = mysqli_query($koneksi, " SELECT * FROM customer  WHERE Username='".$_SESSION['username']."'");
$row = mysqli_fetch_array($result1);

$result2 = mysqli_query($koneksi, "SELECT * FROM admin WHERE Username='".$_SESSION['username']."'");
$row2 = mysqli_fetch_array($result2);

// $result2 = mysqli_query($koneksi, " SELECT customer.ID_Customer,customer.Username,customer.Nama,customer.Email,customer.Alamat,customer.No_Telepon,member.Member FROM customer INNER JOIN member on customer.ID_Member=member.ID_Member='".$_SESSION['username']."'");
// $row2 = mysqli_fetch_array($result2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from https://bootdey.com  -->
    <!--  All snippets are MIT license https://bootdey.com/license -->
    <title>NingPuri</title>
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
                        <img class="img-profile img-circle img-responsive center-block" src="images/passionfruit.jpg" alt="">
                        <ul class="meta list list-unstyled">
                        <?php

                        if ($row!="") {
                        echo '<li style="color: white;" class="name"><b>'.$row['Username'].'</b></li>';
                        echo '<li style="color: white;" class="name"><p>'.$row['Email'].'</p></li>';
                        }

                        if ($row2!="") {
                            echo '<li style="color: white;" class="name"><b>'.$row2['Username'].'</b></li>';
                            echo '<li style="color: white;" class="name"><p>'.$row2['Email'].'</p></li>';
                            }
?> 
                        </ul>
                    </div>
            		<nav class="side-menu">
        				<ul class="nav">
                            <li class=""><a href="index.php"><span class=""></span> Beranda</a></li>
                            <?php 
                            if ($row!="") { 
                                echo '<li class=""><a href="profil.php"><span class=""></span> Profil</a></li>';
                             }

                            if ($row2!="") {
                                echo '<li class=""><a href="profiladmin.php"><span class=""></span> Tambah Admin</a></li>';    
                             }
                              ?>
                            
        					<li class="active"><a href="password.php"><span class=""></span> Kata Sandi</a></li>
        				</ul>
        			</nav>
                </div>
                <div class="content-panel">
 <!--<span " class="pro-label label label-warning"><?php 
                    // if($row['ID_Member'] == "1"){
                    //     echo 'Bronze';
                    // }else{
                    //     echo 'Gold';
                    // }
                    ?></span>-->
                    <div class="form-horizontal">
                        <fieldset class="fieldset">
                        <?php 
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan'] == "update"){
                                    echo 'Sudah di Update';
                                }
                            }
                        ?>  

                            <?php
                                if ($row!="") { ?>
                                    <h3 style="color: white;" class="fieldset-title">Kata Sandi</h3>
                            <form action="update_pass.php" method="post">
                            <div style="margin-left: 13px ;" class="form-group">
                                <label style="color: white;" class="col-md-2  col-sm-3 col-xs-12 control-label">Saat Ini</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text"  name="katasandinow" class="form-control" <?php echo 'value="'.$row['Password'].'"' ?> >
                                </div>
                            </div>
                               <?php } ?>
                               <?php
                                if ($row2!="") { ?>
                                    <h3 style="color: white;" class="fieldset-title">Kata Sandi</h3>
                            <form action="update_pass.php" method="post">
                            <div style="margin-left: 13px ;" class="form-group">
                                <label style="color: white;" class="col-md-2  col-sm-3 col-xs-12 control-label">Saat Ini</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text"  name="katasandinow" class="form-control" <?php echo 'value="'.$row2['Password'].'"' ?> >
                                </div>
                            </div>
                               <?php } ?>
                            
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