<?php 
//session_start();
include_once "header.php";

$user_id=$_SESSION['id'];

$trans = "SELECT * FROM transaksi where ID_Customer = '$user_id'ORDER BY ID_Transaksi DESC LIMIT 1";
$Qtrans = mysqli_query($koneksi,$trans);

$user_products_query="select detail_transaksi.ID_Detail,barang.ID_Barang,barang.Nama_Barang,barang.Deskripsi,
barang.Harga,barang.Gambar_Barang,detail_transaksi.Qty_Det from detail_transaksi inner join 
barang on barang.ID_Barang=detail_transaksi.ID_Barang where detail_transaksi.ID_Customer='$user_id' 
and detail_transaksi.Status='SUDAH BAYAR'";
$user_products_result=mysqli_query($koneksi,$user_products_query) or die(mysqli_error($koneksi));
$no_of_user_products= mysqli_num_rows($user_products_result);
//$sum=0;

	
?>
 <!DOCTYPE html>
<html>
<head>
	<title>PEMBAYARAN</title>
</head>
<body style="padding-top: 100px;">

 
	<center>
		<h2>NING PURI</h2><br>
        <h3>Jl. Trunojoyo IV no 38 - Jember</h3>
        <!--<h3>CV. MACARINDO BERKAH GROUP</h3>-->
        <h3>Telp. 0813 3233 9568</h3>
        <!--<h3>NPWP : 90.856.404.0-626.000</h3>-->
        <p>----------------------------------------------------------------------------------------------------</p>
        <?php
        if($no_of_user_products > 0){

					while ($kdTR=mysqli_fetch_array($Qtrans)){
					$tr=$kdTR['ID_Transaksi'];
					$pem =  "select pembayaran.ID_Pembayaran,pembayaran.ID_Bank,pembayaran.ID_Transaksi,pembayaran.Tanggal_Pembayaran,pembayaran.Nama_Rek_Cus,pembayaran.No_Rek_Cus, transaksi.Grand_Total from pembayaran inner join 
					transaksi on transaksi.ID_Transaksi=pembayaran.ID_Transaksi where pembayaran.ID_Transaksi= '$tr'";
					$Qpem = mysqli_query($koneksi,$pem);
					while ($yeah =mysqli_fetch_array($Qpem) ){
					echo '<span><h4 >Bukti Pembayaran</h4></span></br>';
					?>
                        <span><h4 >Nama Rekening Pengirim : <?php echo $yeah['Nama_Rek_Cus'];?>
						</h4></span></br>
						<span><h4 >No Rekening Pengirim : <?php echo $yeah['No_Rek_Cus'];?></br>
						</h4></span></br>
						<span><h4 >Tanggal Kirim : <?php echo $yeah['Tanggal_Pembayaran'];?></br>
						</h4></span></br>
						<span><h4 >Total : <?php echo $yeah['Grand_Total'];?></br>
						</h4></span>
      
      
                        <?php }}}
                         else{
							?>
							<tr>
								<td colspan="6" class="text-center">Belum Melakukan Pembelian</td>
							</tr>
							<?php
                        } 
                        ?>
        
    
    
    <p>----------------------------------------------------------------------------------------------------</p>
    
    
 <h4> Barang yang sudah dibeli tidak bisa ditukar/dikembalikan</h4>
 <h4> Komplin dan keluhan pelanggan harap hubungi nomer yang tersedia</h4>
 </center>
 <script>
		window.print();
	</script>
</body>
</html>