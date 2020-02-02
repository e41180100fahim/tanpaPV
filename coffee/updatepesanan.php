<?php
include 'koneksi.php';
$pembayaran = $_POST['id'];
$status = $_POST['status'];

$update = mysqli_query($koneksi, "UPDATE `pembayaran` SET `Status`='$status' where ID_Pembayaran='$pembayaran'");
header("location:pesanan.php");
?>