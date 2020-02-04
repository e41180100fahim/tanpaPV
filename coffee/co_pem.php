<?php
require 'koneksi.php';

session_start();

$user_id=$_SESSION['id'];
$tgl=date('Y-m-d');
//$grand = $_GET['tot'];
$bukti = $_FILES['buktiByr']['name'];
$tmpfile = $_FILES['buktiByr']['tmp_name'];
$bank = $_POST['bank_tujuan'];
$kdtr = $_POST['kdtr'];
$namarekres = $_POST['namarekres']; 
$norekres = $_POST['norekres'];
$idbarang = $_POST['idbarang'];
//$jmlcart = $_POST['jmlcart'];
//$statuspes=0;

$add="UPDATE detail_transaksi SET Status = REPLACE(Status, 'SUDAH BAYAR', '') WHERE ID_Customer = '$user_id';";
$add_to_cart_result=mysqli_query($koneksi,$add) or die(mysqli_error($koneksi));

$add_to_cart_query="UPDATE detail_transaksi SET Status = REPLACE(Status, 'BELUM BAYAR', 'SUDAH BAYAR') WHERE ID_Customer = '$user_id';";
$add_to_cart_result=mysqli_query($koneksi,$add_to_cart_query) or die(mysqli_error($koneksi));

$add_to_pem ="insert into pembayaran(ID_Bank,ID_Transaksi,Bukti_Pembayaran,Tanggal_Pembayaran,Nama_Rek_Cus,No_Rek_Cus,Status)
values ('$bank','$kdtr','$bukti','$tgl','$namarekres','$norekres','Menunggu')";
$add_to_pem_result=mysqli_query($koneksi,$add_to_pem) or die(mysqli_error($koneksi));
move_uploaded_file($tmpfile, 'filebuktitf/'.$bukti);

header('location: pembayaran.php');

// $sql = mysqli_query($koneksi, "SELECT * FROM detail_transaksi WHERE ID_Customer='".$_SESSION['id']."' AND Status='SUDAH BAYAR'");
// $detail = mysqli_num_rows($sql);

//$update = mysqli_query($koneksi, "SELECT * FROM barang WHERE ID_Barang='$idbarang'") or die(mysqli_error($koneksi));
//$a = mysqli_fetch_array($update);

//$baru = $a['Stock'] - $detail['Qty_Det'];

//mysqli_query($koneksi,"UPDATE barang SET Stock='$baru' WHERE ID_Barang='$idbarang'");
?>





