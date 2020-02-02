<?php
session_start();
include "koneksi.php";


//$sql = mysqli_query($koneksi, "SELECT * FROM customer WHERE username='".$_SESSION['username']."'");
//$row = mysqli_fetch_array($sql);
//$username = $row['ID_Customer'];
$item_id=$_GET['id'];
$harga=$_GET['price'];
$qty=1;
$user_id=$_SESSION['id'];

$qq = mysqli_query($koneksi,"INSERT INTO detail_transaksi (ID_Barang, ID_Customer, Qty_Det, Subtotal, Status) VALUES ('$item_id','$user_id','$qty','$harga','Added to Cart')") or die("Last error: {$koneksi->error}\n");
// if($qq){
header('location: cart.php');
// }else{
// 	header('location: shops.php');
// }
	

	
?>
