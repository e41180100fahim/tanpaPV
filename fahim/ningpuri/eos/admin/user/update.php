<?php
if (!isset($_POST['update'])) {

   header('location: ../');

} else {
   define('BASEPATH', dirname(__FILE__));

   include('../../include/connection.php');

   $nis  = $_POST['nis'];
   $nama = $_POST['nama'];
   $jk   = $_POST['jk'];
   $kls  = $_POST['kelas'];
   $pil  = $_POST['pemilih'];
   $jbtn = $_POST['jabatan'];
   $password = $_POST['password'];
   $hashedpw = password_hash($password, PASSWORD_DEFAULT);

   if($nis == '' || $nama == '' || $jk == '' || $kls == '') {

      echo '<script type="text/javascript">alert("Semua form harus terisi");window.history.go(-1);</script>';

   } else if(!preg_match("/^[a-zA-z \'.]*$/",$nama)) {

      echo '<script type="text/javascript">alert("Nama hanya boleh mengandung huruf, titik(.), petik tunggal");window.history.go(-1)</script>';

   } else {

      $sql = $con->prepare("UPDATE t_user SET fullname = ?, id_kelas = ?, id_jbtn = ?, jk = ?, pemilih = ?, password=? WHERE id_user = ?");
      $sql->bind_param('sssssss', $nama, $kls, $jbtn, $jk, $pil, $hashedpw, $nis);
      $sql->execute();

      header('location:../dashboard.php?page=user');

   }

}

?>
