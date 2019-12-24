<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-OS - Admin Login</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="./"><b>Admin</b> E-Osis</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <center><h3 class="login-box-msg">Reset Password</h3></center>
    <section class="section-default">
                <p>Sistem akan mengirim email kepada alamat email anda dan akan memberi petunjuk untuk mereset password anda.</p>
                <form action="resetpwd.php" method="post">
                <center><input style="margin:20px 0;width:300px;text-align:center;" type="text" name="email" placeholder="Masukan Email">
                  <button type="submit" class="btn btn-primary btn-block btn-flat" name="reset-request-submit">Kirim Link Verifikasi</button></center>
                  </br>
                  <?php
                if (isset($_GET["reset"])) {
                  if ($_GET["reset"] == "success") {
                    echo '<div style="background:rgba(51,255,51,0.4);padding:10px 0px 1px 0px;text-align:center;color:black;"><p>Email Terkirim!</p></div>';
                  }
                  elseif ($_GET["reset"] == "error") {
                    echo '<div style="background:rgba(255,0,51,0.4);padding:10px 0px 1px 0px;text-align:center;color:black;"><p>Harap Isi Email Anda!</p></div>';
                  }
                  elseif ($_GET["reset"] == "ada") {
                    echo '<div style="background:rgba(255,0,51,0.4);padding:10px 0px 1px 0px;text-align:center;color:black;"><p>Email Tidak Di Temukan!</p></div>';
                  }
                }

                 ?>
                  <a href="index.php"><i class="large material-icons">chevron_left</i><div style="margin-left:23px;margin-top:-24px">Back</div></a>
                </form>
                
            </section>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<!--<form class="login100-form validate-form">-->
					<span class="login100-form-title p-b-30">
						Reset Password
          </span>
          <p >Sistem akan mengirim email kepada alamat email anda dan akan memberi petunjuk untuk mereset password anda.</p>

          <form action="resetpwd.php" method="post">  
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						
						<center><input style="text-align:center;" type="text" name="email" placeholder="Masukan Email">
					</div>
					<center><button style="width: 200px;" type="submit" class="btn btn-primary btn-block btn-flat" name="reset-request-submit">Kirim Link Verifikasi</button></center>
 
          <?php
                if (isset($_GET["reset"])) {
                  if ($_GET["reset"] == "success") {
                    echo '<div style="background:rgba(51,255,51,0.4);padding:10px 0px 1px 0px;text-align:center;color:black;"><p>Email Terkirim!</p></div>';
                  }
                  elseif ($_GET["reset"] == "error") {
                    echo '<div style="background:rgba(255,0,51,0.4);padding:10px 0px 1px 0px;text-align:center;color:black;"><p>Harap Isi Email Anda!</p></div>';
                  }
                  elseif ($_GET["reset"] == "ada") {
                    echo '<div style="background:rgba(255,0,51,0.4);padding:10px 0px 1px 0px;text-align:center;color:black;"><p>Email Tidak Di Temukan!</p></div>';
                  }
                }

                 ?>

					

					<div class="flex-col-c p-t-80">
						<span class="txt1 p-b-17">
							<a href="daftar.html" class="txt2">Sign Up</a>
						</span>
					</div>
				</form>
			</div>
		</div>
    </div>
    </form>


<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>
  
  </body>
</html>