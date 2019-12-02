<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$katasandi = $_POST['katasandi'];
$email = $_POST['email'];

mysqli_query($koneksi,"INSERT INTO customer VALUES('','','','','','','$nama','$katasandi','$email')");

header("location:index.php?pesan=input");
?>