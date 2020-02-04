<?php
require_once "header.php";
// if(!isset($_SESSION['cart'])){
// 	$_SESSION['cart'] = array();
// }
$pembayaran = $koneksi->query("SELECT * FROM transaksi WHERE ID_Customer='".$_SESSION['username']."'") or die("Last error: {$koneksi->error}\n");
$hitung = mysqli_num_rows($pembayaran);
if ($hitung > 0) {
 echo '(location : pesanan_customer.php)';
}
	//unset qunatity
// unset($_SESSION['qty_array']);
?>

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
										   
										  <?php
										  if($row2!="") { ?>
										  <?php echo'<p><a href="editproduk.php?id=' ?> <?php echo $row3['ID_Barang'] ?>" <?php echo 'class="btn btn-primary btn-outline-primary">Edit</a></p>' ?>
										  <?php echo '<p><a href="delete.php?id=' ?> <?php echo $row3['ID_Barang'] ?>" <?php echo 'class="btn btn-primary btn-outline-primary">Hapus</a></p>' ?>
										<?php	
										}
										?>

										<?php
										  if($row!="") { ?>
											  
										
												<p><a href="add_cart.php?id=<?php echo $row3['ID_Barang'] ?>&price=<?php echo $row3['Harga'] ?>" class="btn btn-primary btn-outline-primary">Tambah</a></p>
										<?php } ?>
		              			</div>
							  </div>	  
						  </div>
						  <?php	
										} 
											  ?>
									
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