<?php
include 'koneksi.php';
$idbarang = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE from barang where ID_Barang='$idbarang'");

header("location:shop.php?pesan=update");
?>