<?php
include 'koneksi.php';
$idbarang = $_POST['id'];
$namabarang = $_POST['nama'];
$harga = $_POST['harga'];
$gambar = $_FILES['gambar']['name'];
$tmpfile = $_FILES['gambar']['tmp_name'];
$deskripsi = $_POST['deskripsi'];

if ($gambar == '') {
    $update = mysqli_query($koneksi, "UPDATE `barang` SET `Nama_Barang`='$namabarang',`Harga`='$harga',`Deskripsi`='$deskripsi' where ID_Barang='$idbarang'");
}
else{
$update = mysqli_query($koneksi, "UPDATE `barang` SET `Nama_Barang`='$namabarang',`Harga`='$harga',`Deskripsi`='$deskripsi',`Gambar_Barang`='$gambar' where ID_Barang='$idbarang'");
}
 header("location:shop.php?pesan=update");

?>