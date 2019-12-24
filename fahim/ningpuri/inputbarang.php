<?php
include 'koneksi.php';
$namabarang = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$gambar = $_FILES['gambar']['name'];
$tmpfile = $_FILES['gambar']['tmp_name'];

$query = mysqli_query($koneksi,"INSERT INTO `barang` (`ID_Barang`, `Nama_Barang`, `Harga`, `Stock`, `Gambar_Barang`) VALUES (NULL, '$namabarang', '$harga', '$stok', '$gambar')");
move_uploaded_file($tmpfile, 'filebarang/'.$gambar);
header("location:shop.php");



?>