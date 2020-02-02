<?php 
	define('BASEPATH', dirname(__FILE__));
	include 'include/connection.php';


	$nis = $_POST['nishtml'];
	$nilai = $_POST['nilaihtml'];
	$status = $_POST['statushtml'];
	$visi = $_POST['visihtml'];
	$misi = $_POST['misihtml'];

	mysqli_query($con, "INSERT INTO t_calon VALUES('','$nis','','$status','$visi','$misi')");

	header('location:homepage.php?page=terimakasih')

 ?>