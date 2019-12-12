<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--=========================================   ======================================================-->	
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
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
			
					<span class="login100-form-title p-b-49">
						Daftar
					</span>

					<form action="inputdata.php" method="post" enctype="multipart/form-data">
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username dibutuhkan">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Username" required>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Password dibutuhkan">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" id="password" placeholder="Password" required>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-23" data-validate="Password dibutuhkan">
						<span class="label-input100">Comfirm Password</span>
						<input class="input100" type="password" name="comfirm_password" id="comfirm_password" placeholder="Comfirm Password" required>
					</div>
					
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email dibutuhkan">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Nama Lengkap dibutuhkan">
						<span class="label-input100">Nama Lengkap</span>
						<input class="input100" type="text" name="nama" placeholder="Nama Lengkap" required>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Alamat dibutuhkan">
						<span class="label-input100">Alamat</span>
						<input class="input100" type="text" name="alamat" placeholder="Alamat" required>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "No Telepon dibutuhkan">
						<span class="label-input100">No Telepon</span>
						<input class="input100" type="text" name="no_telp" placeholder="No Telepon" onkeypress="return hanyaAngka(event)" maxlength="14" required> 
					</div>
					
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Upload KTP dibutuhkan">
						<span class="label-input100">Upload KTP</span>
						<br>
						<br>
						<input class="input100" type="file" name="upload_ktp" placeholder="Upload KTP" required>
					</div>

					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="daftar">Daftar</button>
						</div>
					</div>
					</form>

					<div class="flex-col-c p-t-80">
						<span class="txt1 p-b-17">
							<a href="masuk.html" class="txt2">Sign In</a>
						</span>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
	
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script>
		// just for the demos, avoids form submit
		jQuery.validator.setDefaults({
		  	debug: true,
		  	success:  function(label){
        		label.attr('id', 'valid');
   		 	},
		});
		$( "#myform" ).validate({
		  	rules: {
			    password: "required",
		    	comfirm_password: {
		      		equalTo: "#password"
		    	}
		  	},
		  	messages: {
		  		nama_lengkap: {
		  			required: "Masukkan Nama Lengkap"
		  		},
		  		alamat: {
		  			required: "Masukkan Alamat"
		  		},
				no_telp: {
		  			required: "Masukkan No Telepon"
		  		},
		  		email: {
		  			required: "Masukkan email"
		  		},
		  		password: {
	  				required: "Masukkan password"
		  		},
		  		comfirm_password: {
		  			required: "Masukkan password",
		      		equalTo: "Password yang anda masukkan salah"
		    	}
		  	}
		});
	</script>

<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>

<!--===============================================================================================-->
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
	<script src="js/login.js"></script>

</body>
</html>