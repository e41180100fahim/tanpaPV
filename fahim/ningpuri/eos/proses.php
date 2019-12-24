<?php
define('BASEPATH', dirname(__FILE__));

include('./include/connection.php');
session_start();
$nis= $_POST['nis'];
$pass=$_POST['password'];

$log = $con->prepare("SELECT * FROM t_user WHERE id_user = ?") or die($con->error);
$log->bind_param('s', $nis);
$log->execute();
$log->store_result();
$jml = $log->num_rows();
$log->bind_result($nis, $fullname, $id_kelas, $id_jbtn, $jk, $foto, $pemilih, $password);
$log->fetch();

if ($jml > 0) {
    if (password_verify($pass, $password)) {

        $_SESSION['nis'] = $nis ;
    
        header('location:./homepage.php');
    }

    else {
    echo "<script type='text/javascript'>alert('Password Anda Salah') 
    ;window.history.back();</script>";
    }
}

?>