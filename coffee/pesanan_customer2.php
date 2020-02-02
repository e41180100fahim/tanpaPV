<?php
require_once "header.php";

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
                            <?php
				if (isset($_GET['id'])) {
					$id = mysqli_real_escape_string($koneksi, $_GET['id']);
                    $tampil = $koneksi->query("SELECT * FROM pembayaran WHERE ID_Transaksi='$id'");
                    $wer = $tampil->fetch_array();
				}
				
				?>
						</div>
					    </div>
					    <div class="col-md-12 d-flex align-items-center">
                        <div class="container">
                                <div class="row">
                        <form action="pesanan_action.php" method="post">
				        <div class="col-lg-12 ftco-animate p-md-5">
                            <form action="#" class="billing-form ftco-bg-dark p-3 p-md-5">
                                <h3 class="mb-4 billing-heading">Pembayaran</h3>
                            <div class="row align-items-end">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="id_transaksi">ID Transaksi</label>
                            <input type="text" class="form-control" placeholder="" value="<?php echo $wer['ID_Transaksi'] ?>" >
                            </div>
                            </div>
                            <div class="col-md-12">
                                <p>Mohon lakukan pembayaran agar transaksi anda kami proses.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="total_pembayaran">Total Pembayaran</label>
                            <input type="text"  class="form-control" placeholder="" value="<?php echo ($wer['Grand_Total']) ?>">
                            </div>
                            </div>
                            <div class="col-md-12">
                                <p>Metode Pembayaran
                                </p>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                               <?php $result2 = mysqli_query($koneksi, "SELECT * FROM bank "); ?>
                                
                                    <label for="metode_pembayaran">Bank</label>
                                    <div class="select-wrap">
                                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                  <select name="bank" id="" class="form-control">
                                  <?php while ($lol = mysqli_fetch_array($result2)) { 
                                   echo "<option  value=".$lol["ID_Bank"].">".$lol["No_Rek"]."&nbsp - &nbsp".$lol["Nama_Rek"]."</option>" ; 
                                  
                                    }
                                    ?>
                                  </select>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!--<div class="form-group">
                                <label for="towncity">Bukti Pembayaran</label>
                            <input type="file" name="bukti_pembayaran"> -->
                            <br>
                            <br>
							<p><button type="submit" href= class="btn btn-primary py-3 px-4">Bayar</button></p>
                            </div>
                            </div>
                            </form>
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