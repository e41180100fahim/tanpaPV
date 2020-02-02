<?php
include 'koneksi.php';
session_start();
$user_id=$_SESSION['id'];
$id_trans = $_GET['id'];


$add_to_cart_query="UPDATE detail_transaksi SET status = REPLACE(status, 'BELUM BAYAR', 'Added to Cart') WHERE ID_Customer = '$user_id';";
$add_to_cart_result=mysqli_query($koneksi,$add_to_cart_query) or die(mysqli_error($koneksi));

$qq = mysqli_query($koneksi,"DELETE FROM transaksi WHERE ID_Transaksi = '$id_trans'") or die("Last error: {$koneksi->error}\n");
header('location: cart.php');
?>

