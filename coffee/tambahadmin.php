<?php
session_start();
include 'koneksi.php';
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];
$Alamat = $_POST['Alamat'];

$query = mysqli_query($koneksi, "INSERT INTO `admin` (`Username`, `Password`, `Email`, `Alamat`) VALUES ('$Username', '$Password', '$Email', '$Alamat')");
header("location:profiladmin.php");
?>