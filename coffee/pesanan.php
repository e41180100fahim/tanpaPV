<?php
require_once ('header.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pemesanan</title>

  </head>
  <body>
    <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pemesanan</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <p>Simple table with project listing with progress and editing options</p>

                    <!-- start project list -->
               <br>
                    <table class="table table-striped projects" style="background-color: white;">
                      <thead>
                        <tr style="background: black;">
                          <th style="width: 10%;">Id Pembayaran</th>
                          <th style="width: 11%;">Id Transaksi</th>
                          <th style="width: 20%;">Nama Pemesan</th>
                          <th style="width: 30%;">Alamat Pengiriman</th>
                          <th style="width: 9%;">No. Rekening</th>
                          <th style="width: 7%;">Bukti Pembayaran</th>
                          <th style="width: 7%;">Tanggal Pembayaran</th>
                          <th style="width: 7%;">Status Pembayaran</th>
                          <th>Edit</th>
                        </tr>
                      </thead>
                      <?php
                    $sql = mysqli_query($koneksi, "SELECT pembayaran.ID_Pembayaran,pembayaran.ID_Transaksi, customer.Nama, customer.Alamat, bank.No_Rek, pembayaran.Bukti_Pembayaran, pembayaran.Tanggal_Pembayaran, pembayaran.Status FROM pembayaran INNER JOIN transaksi JOIN customer JOIN bank  on pembayaran.ID_Transaksi=transaksi.ID_Transaksi AND transaksi.ID_Customer=customer.ID_Customer AND pembayaran.ID_Bank=bank.ID_Bank ORDER BY pembayaran.Status = 'sukses' ASC") or die(mysqli_error($koneksi));
							while ($b = mysqli_fetch_array($sql)) {
              ?>
              <tr>
									
								</tr>
                      <tbody>
                        <tr style="color: black;">
                        <td><?php echo $b['ID_Pembayaran'] ?></td>
									<td><?php echo $b['ID_Transaksi'] ?></td>
									<td><?php echo $b['Nama'] ?> </td>
									<td><?php echo $b['Alamat'] ?></td>
                  <td><?php echo $b['No_Rek'] ?></td>
                  <td><?php echo $b['Bukti_Pembayaran'] ?></td>
									<td><?php echo $b['Tanggal_Pembayaran'] ?></td>
									<td><?php echo $b['Status'] ?> </td>
                         
                          <td>
                            <a href="editpesanan.php?id=<?php echo $b['ID_Pembayaran'] ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          </td>
                        </tr>
                      </tbody>
                      <?php
                        }
                        ?>

                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>