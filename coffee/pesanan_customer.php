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
                            <h1>Form Pembayaran</h1>
                            <?php
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    $tampil = $koneksi->query("SELECT * FROM pembayaran WHERE ID_Transaksi='$id'");
    $olee = $koneksi->query("SELECT * FROM transaksi WHERE ID_Transaksi='$id'");
    $allo = $koneksi->query("SELECT pembayaran.ID_Bank, bank.No_Rek, bank.Nama_Rek FROM pembayaran JOIN bank on pembayaran.ID_Bank=bank.ID_Bank");
    }
    $tes = $tampil->fetch_array();
    $oey = $olee->fetch_array();
    $bree = $allo->fetch_array();
                            ?>
						</div>
					    </div>
					    <div class="col-md-12 d-flex align-items-center">
                        <div class="container">
                                <div class="row">
                        <form action="uploadtf.php" method="post" enctype="multipart/form-data">
				        <div class="col-lg-12 ftco-animate p-md-5">
                            <div class="billing-form ftco-bg-dark p-3 p-md-5">
                                
                            <div class="row align-items-end">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="id_transaksi">ID Transaksi</label>
                            <input type="text" class="form-control" disabled name="id" placeholder="" value="<?php echo $tes['ID_Transaksi'] ?>" >
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="total_pembayaran">Tagihan yang harus dibayar</label>
                            <input type="text"  class="form-control" disabled placeholder="" value="<?php echo $oey['Grand_Total'] ?>">
                            </div>
                            </div>
                            <div class="col-md-12">
                                <p>No. Rekening Yang Dituju</p>
                            <input type="text"  class="form-control" disabled placeholder="" value="<?php echo $bree['No_Rek'] ?>">
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="id_transaksi">Status Transaksi</label>
                                <input type="text"  disabled class="form-control" placeholder="" value="<?php echo $tes['Status'] ?>">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="id_transaksi">Tanggal Transaksi</label>
                                <input type="text" disabled  class="form-control" placeholder="" value="<?php echo $oey['Tanggal_Transaksi'] ?>">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="towncity">Bukti Pembayaran</label>
                            <input type="file" name="gambar">
                            <br>
                            <br>
							<p><button type="submit" class="btn btn-primary py-3 px-4">Upload</button></p>
                            </div>
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