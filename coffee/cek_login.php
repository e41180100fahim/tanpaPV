<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query =
mysqli_query($koneksi,"select * from customer where Username='$username' and Password='$password'");
$cek = mysqli_num_rows($query);
$query1 = 
mysqli_query($koneksi,"select * from admin where Username='$username' and Password='$password'");
$cek1 = mysqli_num_rows($query1);


$get= mysqli_fetch_array($query);
$get1= mysqli_fetch_array($query1);

if($cek > 0) {
    session_start();
    $id=$get['ID_Customer'];
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $id;
    $_SESSION['status'] = 'login';

    header("location:index.php");
}

else if ($cek1 > 0){
    session_start();
    $id1=$get1['ID_Admin'];
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $id1;
    $_SESSION['status'] = 'login';
    
    header("location:index.php");
}

else if($username==null || $password==null){
    echo "<script>alert('username dan password tidak boleh kosong');window.history.back();</script>";
}

else{
    echo"<script>alert('username atau password anda salah');window.history.back();</script>";
} 

?>