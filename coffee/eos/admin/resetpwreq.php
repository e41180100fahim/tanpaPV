<?php

require 'mail/phpmailer/PHPMailerAutoload.php';
if (isset($_POST["reset-request-submit"])) {
  
  define('BASEPATH', dirname(__FILE__));
  include '../include/connection.php';
  $userEmail = $_POST["email"];
  $id = mysqli_query($con, "SELECT * FROM t_admin WHERE email='$userEmail'");
  $ada = mysqli_num_rows($id);

  if($userEmail == null){
    header("location:./reset-password.php?reset=error");
  }
  elseif($ada == 0){
    header("location:./reset-password.php?reset=ada");
  }
  else{
  $selector = bin2hex(openssl_random_pseudo_bytes(8));
  $token = openssl_random_pseudo_bytes(32);

  $url = "localhost/eos/admin/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

  $expires = date("U") + 1800;
  


 

  


  $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Telah terjadi Error!";
    exit();
  }else {
    mysqli_stmt_bind_param($stmt, "s", $userEmail);
    mysqli_stmt_execute($stmt);
  }

  $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpire) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Telah terjadi Error!";
    exit();
  }else {
    $hashedToken = password_hash($token, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
    mysqli_stmt_execute($stmt);
  }
 // ini untuk menutup koneksi database dan statementnya agar aman dari para hacker yang akan masuk melalui jaringan database yang masih terbuka
  mysqli_stmt_close($stmt);
  mysqli_close($con);

 $mail = new PHPMailer;
$mail->isSMTP(); //baris ini wajib di disable kalau mau di upload ke live sever
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';

$mail->Username='emailsyetan@gmail.com';
$mail->Password='T00yol99';

$mail->setFrom('emailsyetan@gmail.com','SyetanUhU');
$mail->addAddress("$userEmail");
$mail->addReplyTo('emailsyetan@gmail.com');

$mail->isHTML(true);
$mail->Subject='PHP Mailer Subject';
$mail->Body='<p><a href="' . $url . '"><button>Ehoy</button></a></p>';
if($mail->send()){
	header("Location: ./reset-password.php?reset=success");
}
else{
	echo "Pesan telah terkirim";
 }
 // dari sini
 }} else {
  header("Location: ../index.php");
}
 




