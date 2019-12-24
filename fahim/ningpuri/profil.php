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
                        ?>                           
                        </ul>
                    </div>
            		<nav class="side-menu">
        				<ul class="nav">
        					<li class=""><a href="index.php"><span class=""></span> Beranda</a></li>
        					<li class="active"><a href="#"><span class=""></span> Profil</a></li>
        					<li><a href="password.php"><span class=""></span> Kata Sandi</a></li>
        				</ul>
        			</nav>
                </div>
                <div class="content-panel" style="margin-bottom: 30px;">
                    <h2 class="title" style="color: white;">Profil<span " class="pro-label label label-warning"><?php 
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
                            <h3 class="fieldset-title" style="color: white;">Biodata</h3>
                           
                            <form action="update_User.php" method="post">
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label" style="color: white;" >Username</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" name="username" class="form-control" <?php echo 'value="'.$row['Username'].'"' ?> >
                                </div>
                            </div>
        
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label" style="color: white;">Nama</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" name="nama" class="form-control" <?php echo 'value="'.$row['Nama'].'"'  ?>>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="fieldset">
                            <h3 class="fieldset-title" style="color: white;">Informasi Kontak</h3>
                            <div class="form-group">
                                <label class="col-md-2  col-sm-3 col-xs-12 control-label" style="color: white;">Email</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="email" name="email" class="form-control" <?php echo 'value="'.$row['Email'].'"'  ?>>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2  col-sm-3 col-xs-12 control-label" style="color: white;">Alamat</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" name="alamat" class="form-control"<?php echo 'value="'.$row['Alamat'].'"'  ?>>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2  col-sm-3 col-xs-12 control-label" style="color: white;">No Telp</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" name="no_telp" onkeypress="return hanyaAngka(event)" maxlength="14" class="form-control" <?php echo 'value="'.$row['No_Telepon'].'"' ?>>
                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <div class="form-group">
                            <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
                                <input class="btn btn-primary" type="submit" value="Update Profile">
                            </div>
                            </form>
                        </div>
                        </div>                   
                </div>
            </div>
        </section>
    </div>
</div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript"></script>

<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>
	

</body>
</html>