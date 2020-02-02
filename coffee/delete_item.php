<?php
	// session_start();

	// //remove the id from our cart array
	// $key = array_search($_GET['id'], $_SESSION['cart']);	
	// unset($_SESSION['cart'][$key]);

	// unset($_SESSION['qty_array'][$_GET['index']]);
	// //rearrange array after unset
	// $_SESSION['qty_array'] = array_values($_SESSION['qty_array']);

	// $_SESSION['message'] = "Product deleted from cart";
	// header('location: cart.php');
	include 'koneksi.php';
	session_start();
	$idbarang = $_GET['id'];
	$user_id=$_SESSION['id'];
	$query = mysqli_query($koneksi, "DELETE from detail_transaksi where ID_Customer='$user_id' AND ID_Barang='$idbarang'");
	
	header("location:cart.php");
?>