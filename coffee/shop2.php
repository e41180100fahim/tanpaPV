<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NingPuri</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
	  <!--HOME-->
	  <!--NAV-->
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index2.php">NING<small>PURI</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"> Menu </span>
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index2.php" class="nav-link">Beranda</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="shop.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produk</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop2.php">Produk</a>
                <a class="dropdown-item" href="masuk.php">Keranjang</a>
                <a class="dropdown-item" href="masuk.php">Pembayaran</a>
              </div>
            </li>
            <li class="nav-item cart"><a href="masuk.php" class="nav-link"><span class="icon icon-shopping_cart"></span><!--<span class="bag d-flex justify-content-center align-items-center"><small>1</small></span>--></a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="masuk.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/akun.png" alt="" style="width: 22px; height: 22px;"></a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="daftar.php">Daftar</a>
                <a class="dropdown-item" href="masuk.php">Masuk</a>
                

              </div>
            </li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->


 <section class="ftco-menu mb-5 pb-5">
    	<div class="container">
    		<div class="row d-md-flex">
	    		<div class="col-lg-12 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		            	<h1>Produk</h1>
		            </div>
				  </div>
				 
		          <div class="col-md-12 d-flex align-items-center">
		            
		                <div class="row">
						
						<?php
						$sql = "SELECT * FROM barang";
						$query = $koneksi->query($sql);
						while($row3 = $query->fetch_assoc()){
							
						?>
		              			<div class='col-md-4 text-center'>
		              			<div class="menu-wrap">
		              				<a  class="menu-img img mb-4"  style=" background-image: url(filebarang/<?php echo $row3['Gambar_Barang'] ?>);"></a>
		              				<div class="text">
										  <h3><?php echo  $row3['Nama_Barang'] ?> (Stok = <?php echo  $row3['Stock'] ?>)</h3> 
										  <input type="hidden" value=" <?php echo  $row3['ID_Barang'] ?>">
										 <p> <?php echo $row3['Deskripsi'] ?></p>
										  <p class="price"><span>Rp.&nbsp;<?php echo $row3['Harga'] ?></span></p>
										  
												<p><a href="masuk.php" class="btn btn-primary btn-outline-primary">Tambah</a></p>
										<?php } ?>
		              			</div>
							  </div>	  
						  </div>
		              	</div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>

	<?php
	require_once "footer.php";
	?>
    
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script>
	  $(document).ready(function(){
    $("#number").click(function(){
        alert("click");
    });
});
//   $( "#tambahfalse" ).on( "click", function() {
//   alert("wkwkkw");
// });
  </script>
  </body>
</html>