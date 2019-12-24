<?php
session_start();
 include 'koneksi.php';
 $passnow = $_POST['katasandinow'];
 $password = $_POST['katasandi'];
 $pass2 = $_POST['ulangkatasandi'];

if ($password == $pass2) {
 $update = mysqli_query($koneksi, "UPDATE `customer` SET `Password`='$password'  WHERE Username='".$_SESSION['username']."'")or die(mysqli_error($koneksi));
e
 header("location:password.php?pesan=update");
}

else {
        echo"<script>alert('Password Tidak Sama');window.history.back();</script>";
}


 

?>