<?php
require_once "header.php";

$result3 = mysqli_query($koneksi, "SELECT * FROM barang");
?>

    <section class="ftco-menu mb-5 pb-5">
			<div class="container">
				<div class="row d-md-flex">
					<div class="col-lg-12 ftco-animate p-md-5">
						<div class="row">
					  <div class="col-md-12 nav-link-wrap mb-5">
						<div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<h1>Penambahan Stok</h1>
						</div>
					  </div>
					  <div class="col-md-12 d-flex align-items-center">
		
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
	    				<table class="table">
						    <thead class="thead-primary" style="border-bottom: 2px solid white;">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>Produk</th>
						        <th>Nama Produk</th>
						        <th>Stok</th>
						        <th>Stok Yang Akan Ditambah</th>
						        <th>&nbsp;</th>
						      </tr>
						    </thead>
						    <tbody style="background-color: #191919;">
						      <tr class="text-center">
								  
							  <?php
							while($row3=mysqli_fetch_array($result3)) {
								?>
							  <td></td>
							  <form action="updatestok.php" method="post">	 
						        
						        
						        <td class="image-prod"><div class="img" style="background-image:url(filebarang/<?php echo $row3['Gambar_Barang'] ?>);"></div></td>
						        
						        <td class="product-name">
						        	<h3><?php echo $row3['Nama_Barang'] ?></h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="stok" class="quantity form-control input-number" disabled value=<?php echo $row3['Stock'] ?>>
					          	</div>
					          </td>
						        
								
								 <td class="quantity">
						        	<div class="input-group mb-3">
										<input type="hidden" name="id" value="<?php echo $row3['ID_Barang']; ?>">
					             	<input required type="text" name="stok" class="quantity form-control input-number" >
								  </div>
								  
								  <td><input type="submit" class="tombol" value="Tambah"></td>
					          </td></td>
							  </tr><!-- END TR-->
							  </form>
							  <?php
							}
						?>
							</tbody>
						  </table>
						  
						  
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

    
  </body>
</html>