<?php
session_start();
 include 'koneksi.php';
 $username = $_POST['username'];
 $email = $_POST['email'];
 $nama = $_POST['nama'];
 $alamat = $_POST['alamat'];
 $no_telepon = $_POST['no_telp'];

 $update = mysqli_query($koneksi, "UPDATE `customer` SET `Username`='$username',`Email`='$email',`Nama`='$nama',`Alamat`='$alamat',`No_Telepon`='$no_telepon'  WHERE Username='".$_SESSION['username']."'")or die(mysqli_error($koneksi));

$_SESSION['username'] =  $username;
 header("location:profil.php?pesan=update");
 

?>