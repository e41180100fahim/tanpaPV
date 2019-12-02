<?php
include 'koneksi.php';

if(@$_SESSION['admin'] || @$_SESSION['customer']) {

    if(@$_SESSION['admin']) {
        $user_terlogin = @$_SESSION['admin'];
    } else if (@$_SESSION['customer']) {
        $user_terlogin = @$_SESSION['customer'];  
    }
}
?>

<a><?php echo $user_terlogin; ?></a>