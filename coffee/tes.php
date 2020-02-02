<?php
require_once "header.php";

$_GET['id'];
$editt = mysqli_query($koneksi, "SELECT pembayaran.ID_Pembayaran,pembayaran.ID_Transaksi, customer.ID_Customer, customer.Nama, customer.Alamat, bank.No_Rek, pembayaran.Bukti_Pembayaran, pembayaran.Tanggal_Pembayaran, pembayaran.Status, member.Member FROM pembayaran INNER JOIN transaksi JOIN customer JOIN bank JOIN member on pembayaran.ID_Transaksi=transaksi.ID_Transaksi AND transaksi.ID_Customer=customer.ID_Customer AND pembayaran.ID_Bank=bank.ID_Bank AND customer.ID_Member=member.ID_Member WHERE ID_Pembayaran='".$_GET['id']."'");
$edit = mysqli_fetch_array($editt);
$es = mysqli_query($koneksi, "SELECT * FROM Member");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pembayaran</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
        <section class="ftco-menu mb-5 pb-5">
			<div class="container">
				<div class="row d-md-flex">
					<div class="col-lg-12 ftco-animate p-md-5">
						<div class="row">
					    <div class="col-md-12 nav-link-wrap mb-5">
						<div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<h1>Form Pesanan</h1>
						</div>
					    </div>
					    <div class="col-md-12 d-flex align-items-center">
                        <div class="container">
        	            <div class="row">
				        <div class="col-lg-12 ftco-animate p-md-5">
                            <div  class="billing-form ftco-bg-dark p-3 p-md-5">
                                <form action="updatepesanan.php" method="post">
                                <h3 class="mb-4 billing-heading">Pembayaran</h3>
                            <div class="row align-items-end">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="id_transaksi">ID Pembayaran</label>
                            <input type="text"  class="form-control" placeholder="" <?php echo 'value="'.$edit['ID_Pembayaran'].'"' ?>>
                            <input type="hidden" name="id" class="form-control" placeholder="" <?php echo 'value="'.$_GET['id'].'"' ?>>
                            <input type="hidden" name="customer"  class="form-control" placeholder="" <?php echo 'value="'.$edit['ID_Customer'].'"' ?>>    
                        </div>
                            </div>
                           
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="metode_pembayaran">Member</label>
                                    <div class="select-wrap">
                                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                  
                                  <select name="member" id="" class="form-control">
                                  <?php
                                  while ($combo = mysqli_fetch_array($es)) { 
                                  
                                  echo "<option value=".$combo["Member"]." >".$combo['Member']."</option>"; 
                                     } ?>
                                </select>
                                
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
							<p><button type="submit" class="btn btn-primary py-3 px-4">Kirim</button></p>
                            </div>
                            </div>
                            
                        </div>
                        </div>
                                    </form>
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
                <!-- END -->

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