<?php
session_start();
	include 'koneksi.php';
	$idbarang = $_POST['id'];
	$iddetail = $_POST['iddet'];
	$jumlahcart = $_POST['jumlahcart'];
	$harga = $_POST['hargacart_'];
	$subtotal = $harga * $jumlahcart;
	
	
	$update = mysqli_query($koneksi,"UPDATE detail_transaksi SET Qty_Det='$jumlahcart', Subtotal='$subtotal' WHERE ID_Detail='$iddetail'") or die(mysqli_error($koneksi));
	//$a = mysqli_fetch_array($update);
	header("location:cart.php");
?>