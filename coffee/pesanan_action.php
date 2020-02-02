<?php
include 'koneksi.php';
$idtransaksi = $_POST['idtransaksi'];
$bank = @$_POST['bank'];
$tanggal = date("Y-m-d");

$query = mysqli_query($koneksi,"INSERT INTO `pembayaran` (`ID_Pembayaran`,`ID_Bank`,`ID_Transaksi`,`Tanggal_Pembayaran`) VALUES (NULL,'$bank', '$idtransaksi', '$tanggal')") or die("Last error: {$koneksi->error}\n");
header("location:pesanan_customer2.php");
?>
