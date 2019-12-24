<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$pass2 = $_POST['comfirm_password'];
$email = $_POST['email'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$scan_ktp = $_FILES['upload_ktp']['name'];
$tmpfile = $_FILES['upload_ktp']['tmp_name'];

if ($password == $pass2) {
$query = mysqli_query($koneksi, "INSERT INTO `customer` (`ID_Customer`, `ID_Member`, `Username`, `Password`, `Email`, `Nama`, `Alamat`, `No_Telepon`, `Scan_KTP`) VALUES (NULL, '1', '$username', '$password', '$email', '$nama', '$alamat', '$no_telp', '$scan_ktp')");
move_uploaded_file($tmpfile, 'filecustomer/'.$scan_ktp); 
header("location:masuk.php");
    }

else {
   echo"<script>alert('Password Tidak Sama');window.history.back();</script>";
}


?>