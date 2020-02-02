<?php
include 'koneksi.php';
$idbarang = $_POST['id'];
$stok = $_POST['stok'];

$update = mysqli_query($koneksi, "SELECT * FROM barang WHERe ID_Barang='$idbarang'") or die(mysqli_error($koneksi));
$a = mysqli_fetch_array($update);

$baru = $a['Stock'] + $stok;

mysqli_query($koneksi,"UPDATE barang SET Stock='$baru' WHERE ID_Barang='$idbarang'");


header("location:penambahanstok.php?pesan=update");

?>