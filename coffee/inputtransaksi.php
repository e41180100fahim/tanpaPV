<?php
include 'koneksi.php';
session_start();
$user_id=$_SESSION['id'];
$tgl=date('Y-m-d');
// $jumlahcart = $_GET['jumlahcart'];
// $harga = $_GET['hargacart_'];
$grand = $_GET['totals'];

//$grands += $harga * $jumlahcart;


$add_to_cart_query="UPDATE detail_transaksi SET Status = REPLACE(Status, 'Added to Cart', 'BELUM BAYAR') WHERE ID_Customer = '$user_id';";
$add_to_cart_result=mysqli_query($koneksi,$add_to_cart_query) or die(mysqli_error($koneksi));

$add_to_trans ="insert into transaksi(ID_Customer, Tanggal_Transaksi, Grand_Total) values ('$user_id','$tgl','$grand')";
$add_to_trans_result=mysqli_query($koneksi,$add_to_trans) or die(mysqli_error($koneksi));

//$qq = mysqli_query($koneksi,"INSERT INTO transaksi (ID_Customer, Tanggal_Transaksi, Grand_Total) VALUES ('$user_id','$tgl','$grand')") or die("Last error: {$koneksi->error}\n");
header('location: checkout.php');
?>

