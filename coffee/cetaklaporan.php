<?php
require_once "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="stylesheet" href="css/report.css">
<!--===============================================================================================-->
</head>
<body style="padding-top: 100px;"">
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<!--<h6>Cari berdasarkan tanggal <input type="date" name="tanggal" data-date="" data-date-format="DD MMMM YYYY"></h6>
					<input type="submit" value="Cari" name="cari">-->
					</form>
					<table>
						<thead>
							<tr class="table100-head">
								<th style="width: 10%;" class="column1">ID_Transaksi</th>
								<th style="width: 10%;" class="column2">Nama_Customer</th>
								<th style="width: 10%;" class="column3">Tangga Transaksi</th>
								<th style="width: 10%;" class="column4">Tanggal Pembayaran</th>
								<th style="width: 10%; padding-right: 100px;" class="column5">Total</th>
							</tr>
							<?php
							if (isset($_POST['cari'])){
								echo $_POST['tanggal'];
							$sql = mysqli_query($koneksi, "SELECT transaksi.ID_Transaksi, customer.Nama, transaksi.Tanggal_Transaksi, pembayaran.Tanggal_Pembayaran, transaksi.Grand_Total FROM customer INNER JOIN transaksi JOIN pembayaran on transaksi.ID_Customer=customer.ID_Customer AND pembayaran.ID_Transaksi=transaksi.ID_Transaksi WHERE Tanggal_Transaksi='".$_POST['tanggal']."'") or die(mysqli_error($koneksi));
							while ($b = mysqli_fetch_array($sql)) {
							
							?>
						</thead>
						<tbody>
							
								<tr>
									<td class="column1"><?php echo $b['ID_Transaksi'] ?></td>
									<td class="column2"><?php echo $b['Nama'] ?></td>
									<td class="column3"><?php echo $b['Tanggal_Transaksi'] ?> </td>
									<td class="column4"><?php echo $b['Tanggal_Pembayaran'] ?></td>
									<td style="width: 10%; padding-right: 100px;" class="column5"><?php echo $b['Grand_Total'] ?></td>
								</tr>
							
						</tbody>
						<?php
							}
							}else{
							$sql = mysqli_query($koneksi, "SELECT transaksi.ID_Transaksi, customer.Nama, transaksi.Tanggal_Transaksi, pembayaran.Tanggal_Pembayaran, transaksi.Grand_Total FROM transaksi INNER JOIN customer JOIN pembayaran on transaksi.ID_Customer=customer.ID_Customer AND pembayaran.ID_Transaksi=transaksi.ID_Transaksi ORDER BY ID_Transaksi ASC") or die(mysqli_error($koneksi));
							while ($b = mysqli_fetch_array($sql)) {
							
							?>
						</thead>
						<tbody>
							
								<tr>
									<td class="column1"><?php echo $b['ID_Transaksi'] ?></td>
									<td class="column2"><?php echo $b['Nama'] ?></td>
									<td class="column3"><?php echo $b['Tanggal_Transaksi'] ?> </td>
									<td class="column4"><?php echo $b['Tanggal_Pembayaran'] ?></td>
									<td style="width: 10%; padding-right: 100px;" class="column5"><?php echo $b['Grand_Total'] ?></td>
								</tr>
							
						</tbody>
							<?php }} ?>
					</table>
				</div>
			</div>
		</div>
	</div>
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script>
	$('.datepicker').datepicker({
		dateFormat: 'yyyy-mm-dd',
    })
    </script>
    <script>
    window.print();
    </script>
</body>
</html>