<?php
require_once "header.php";

$user_id=$_SESSION['id'];
$user_products_query="select detail_transaksi.ID_Detail,barang.ID_Barang,barang.Nama_Barang,barang.Deskripsi,
barang.Harga,barang.Stock,barang.Gambar_Barang,detail_transaksi.Qty_Det from detail_transaksi inner join 
barang on barang.ID_Barang=detail_transaksi.ID_Barang where detail_transaksi.ID_Customer='$user_id' 
and detail_transaksi.Status='Added to Cart'";
$user_products_result=mysqli_query($koneksi,$user_products_query) or die(mysqli_error($koneksi));
$no_of_user_products= mysqli_num_rows($user_products_result);
?>
    <!-- END nav -->

    <section class="ftco-menu mb-5 pb-5">
			<div class="container">
				<div class="row d-md-flex">
					<div class="col-lg-12 ftco-animate p-md-5">
						<div class="row">
					  <div class="col-md-12 nav-link-wrap mb-5">
						<div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<h1>Keranjang</h1>
						</div>
					  </div>
					  <div class="col-md-12 d-flex align-items-center">
		
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
				<?php 
			if(isset($_SESSION['message'])){
				?>
				<div class="alert alert-info text-center">
					<?php echo $_SESSION['message']; ?>
				</div>
				<?php
				unset($_SESSION['message']);
			}

			?>
					  
    				<div style="padding-top : 20px;">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>Produk</th>
						        <th>Nama Produk</th>
						        <th>Harga</th>
						        <th>Qty</th>
						        <th>Subtotal</th>
						      </tr>
						    </thead>
						    <tbody style="background-color: #191919;">
								<?php
								//initialize total
								
								//$sql = mysqli_query($koneksi, "SELECT * FROM detail_transaksi WHERE ID_Customer='".$_SESSION['id']."'");
								//$a = mysqli_num_rows($sql);								
				
								$total = 0;
								if($no_of_user_products > 0){
								
								while($roww=mysqli_fetch_array($user_products_result)){
								//create array of initail qty which is 1
								//while($b = mysqli_fetch_array($sql)){ ?>
								<?php
								 //$sql1 = "SELECT * FROM barang WHERE ID_Barang='".$b['ID_Barang']."'";
								 //$query = $koneksi->query($sql1);
								 //$row3 = $query->fetch_assoc();
									
								?>
								<form action="save_cart.php" method="post">
									
						      <tr class="text-center">
						        <td class="product-remove"><a href="delete_item.php?id=<?php echo $roww['ID_Barang']; ?>"><span class="icon-close"></span></a></td>
						        <!--<input type="hidden" name="id_barang" value="<?php echo $b['ID_Barang']; ?>">-->
						        <td class="image-prod"><div class="img" style="background-image:url(filebarang/<?php echo $roww['Gambar_Barang'] ?>);"></div></td>
						        
						        <td class="product-name">
						        	<h3><?php echo $roww['Nama_Barang']; ?></h3>
						        	<p><?php echo $roww['Deskripsi']; ?></p>
						        </td>
						        
						        <td class="price">Rp. <?php echo $roww['Harga']; ?></td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
									
								<input type="hidden" name="iddet" value="<?php echo $roww['ID_Detail']; ?>">
								<input type="hidden" id="hargacart" name="hargacart_" value="<?php echo $roww['Harga']; ?>">
					             	<input type="text" id="jmlcart" class="quantity form-control input-number" name="jumlahcart" value="<?php echo $roww['Qty_Det']; ?>"  onchange="mySubmit(this.form)" onkeypress="return hanyaAngka(event)">
					          	</div>
					          </td>
							  
						        <td class="total" id="totalharga" name="subtotal"  >Rp. <?php echo ($roww['Qty_Det']*$roww['Harga']); ?></td>
								<?php $total += $roww['Qty_Det']*$roww['Harga']; ?>
						      </tr>
							  
							  </form>	<!-- END TR-->
							  <?php
								
							}
						}		
						else{
							?>
							<tr>
								<td colspan="6" class="text-center">No Item in Cart</td>
							</tr>
							<?php
						}

					?>
						    </tbody>
						  </table>
						  <!--<div style="float: left;">
						  <a  href="shop.php" class="btn btn-danger"><span  class="glyphicon glyphicon-arrow-left"></span > Back</a> -->
						  
						
		</div>
		<form method="GET" action="inputtransaksi.php">
		<div class="row justify-content-end">
			<div class="col col-lg-4 col-md-6  cart-wrap ftco-animate">
    				<div class="cart-total mb-3	">
    					<h3>Cart Totals</h3>

    					<p class="d-flex total-price">
							<span>Total</span>
							<td class="total" id="grand" onchange="mySubmit(this.form)"> Rp. <?php echo $total;?></td>
							<!-- Rp. &nbsp; <span><?php //echo $total; ?>
							<select hidden name="tot" id="totalharga"> -->
							<!-- <option value="$total"></option>  -->
						</select>
							</span>
							</p>
							<input type ="hidden" name="totals" id="subtotal" value="<?php echo $total;?>">
						 
							
						<!--<label for="metode_pembayaran">Transfer Bank</label>
                                    <div class="select-wrap">
                                  <div class="icon"><span class=""></span></div>
                                  <select name="bank" id="" class="">
                                  
                                  </select>
                                </div> -->
					</div>         
					<p style="background-color: #191919;" class="text-center"><input type="submit" value="Checkout Sekarang" class="btn btn-primary py-3 px-4"></p>
					<p style="background-color: #191919;" class="text-center"><a style="color: white;" href="shop.php" class="btn btn-primary py-3 px-4">Lanjut Belanja</a></p>
				</div>
				
				         
					
    			
					</div>
					</form>
				</div>
    		</div>
    		</div>
			</div>
			
		</section>

		


    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-5 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Tentang Ning Puri</h2>
              <p>Ning Puri berdiri sejak tahun 2017 memproduksi hasil kebun sendiri menjadi produk olahan sirup markisa yang terkenal mengandung vit. C tinggi, menyehatkan tanpa bahan pengawet, tanpa pemanis buatan, tanpa pewarna tambahan,  ekonomis dengan harga terjangkau, dan baik di konsumsi untuk semua kalangan mulai dari anak-anak, orang tua dan ibu hamil.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
         
         
          <div style="padding-left: 100px;">
			<div class="col-lg-10 col-md-6 mb-5 mb-md-5">
			  <div class="ftco-footer-widget mb-4">
				  <h2 class="ftco-heading-2">Kontak Kami</h2>
				  <div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
       
      </div>
    </footer>
    
  

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
     function mySubmit(theForm) {
    $.ajax({ // create an AJAX call...
        data: $(theForm).serialize(), // get the form data
        type: $(theForm).attr('method'), // GET or POST
        url: $(theForm).attr('action'), // the file to call
        success: function (response) { // on success..
            $('#here').html(response);
			 // update the DIV
			 //location.reload();
        }
    });
}

$( "#jmlcart" ).keyup(function() {
  var jmlcart = $( "#jmlcart" ).val();
  var harga = $( "#hargacart" ).val();
  var total = jmlcart * harga;
  $( "#totalharga" ).text("Rp. "+total);
});

$( "#grand" ).change(function() {
  var jmlcart = $( "#jmlcart" ).val();
  var harga = $( "#hargacart" ).val();
  var total = jmlcart * harga;
  $( "#grand" ).text("Rp. "+total);
});

function hanyaAngka(evt) { //hanya angka
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
// $( "#jmlcart" ).keyup(function() {
//   var jmlcart = $( "#jmlcart" ).val();
//   var harga = $( "#hargacart" ).val();
//   var total = jmlcart * harga;
//   $( "#totalharga" ).text("Rp. "+total);
// });
    </script>
    
  </body>
</html>