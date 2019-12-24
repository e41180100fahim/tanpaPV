<?php
include 'koneksi.php';
session_start();

$result1 = mysqli_query($koneksi, "SELECT * FROM customer WHERE Username='".$_SESSION['username']."'");
$row = mysqli_fetch_array($result1);

$result2 = mysqli_query($koneksi, "SELECT * FROM admin WHERE Username='".$_SESSION['username']."'");
$row2 = mysqli_fetch_array($result2);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NingPuri</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/upload.css">

    <style>
    .btn.btn-primary {
    background: black;
    border: 1px solid #c49b63;
    color: white; }
    </style>

  </head>
  <body>
	  <!--HOME-->
	  <!--NAV-->
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">NING<small>PURI</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"> Menu </span>
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Beranda</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="shop.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produk</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="shop.php">Produk</a>
                
                <?php            

                if ($row2!="") {
                  echo '<a class="dropdown-item" href="tambahproduk.php">Tambah Produk</a>';
                  echo '<a class="dropdown-item" href="penambahanstok.php">Penambahan Stok</a>';
                }

                else {
                  echo '<a class="dropdown-item" href="cart.php">Keranjang</a>';
                  echo '<a class="dropdown-item" href="checkout.php">Pembayaran</a>';
                }

                ?>

              </div>
            </li>

            <?php

            if ($row!="") {
              echo '<li class="nav-item cart"><a href="cart.php" class="nav-link"><span class="icon icon-shopping_cart"></span><!--<span class="bag d-flex justify-content-center align-items-center"><small>1</small></span>--></a></li>';
            
            }

            else {
              echo '<li class="nav-item"><a href="index.php" class="nav-link">Pesanan</a></li>';
              echo '<li class="nav-item"><a href="index.php" class="nav-link">Laporan</a></li>';
            }
            
            ?>
            
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="shop.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/akun.png" alt="" style="width: 22px; height: 22px;"></a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">

                <?php

                if ($row!="") {
                  echo '<a class="dropdown-item" href="profil.php">Profil</a>'; ?>
                   <a class="dropdown-item" href="testlogout.php" onclick="return confirm('Yakin ingin logout?');">Log out</a> 
                  <?php
                  echo '<li  class="nav-item"><a href="profil.php" class="nav-link">  Hello '.$row['Username'].'</a></li>';
                }

                elseif ($row2!="") {
                  echo '<a class="dropdown-item" href="profil.php"> Profil</a>'; ?>
                   <a class="dropdown-item" href="testlogout.php" onclick="return confirm('Yakin ingin logout?');">Log out</a>
                   <?php 
                  echo '<li class="nav-item"><a href="profil.php" class="nav-link"> Hello '.$row2['Username'].'</a></li>';
                  
                }

                else {
                  echo '<a class="dropdown-item" href="daftar.php">Daftar</a>';
                  echo '<a class="dropdown-item" href="masuk.php">Masuk</a>';
                }
                ?>


              </div>
            </li>
	        </ul>
	      </div>
		  </div>
      </nav>
            </body>
            