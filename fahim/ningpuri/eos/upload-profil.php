<?php
session_start();
      define('BASEPATH', dirname(__FILE__));

      include('./include/connection.php');
if(isset($_POST["image"])){
	$sql = mysqli_query($con, "SELECT * FROM t_user WHERE id_user='".$_SESSION['nis']."'");
	$row = mysqli_fetch_array($sql);
	$tempdir = "assets/img/profil/";
    if (!file_exists($tempdir))
      mkdir($tempdir);

	$data = $_POST["image"];
	$image_array_1 = explode(";", $data);
	$image_array_2 = explode(",", $image_array_1[1]);
	$data = base64_decode($image_array_2[1]);

	$imageName = $tempdir . $row['fullname'] . '-' . $_SESSION['nis'].'-'. time() . '.png';
	file_put_contents($imageName, $data);

	mysqli_query($con, "UPDATE t_user SET foto='$imageName' WHERE id_user = '".$_SESSION['nis']."'");
	echo '<script>location.reload();</script>';
}
?>