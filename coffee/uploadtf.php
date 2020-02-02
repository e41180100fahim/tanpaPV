<?php
include 'koneksi.php';
$idtransaksi = $_POST['id'];
$gambar = $_FILES['gambar']['name'];
$tmpfile = $_FILES['gambar']['tmp_name'];

$update = mysqli_query($koneksi, "UPDATE `pembayaran` SET `Bukti_Pembayaran`='$gambar' where ID_Transaksi='$idtransaksi'");
move_uploaded_file($tmpfile, 'filebuktitf/'.$gambar); 

header("location:index.php");

?>