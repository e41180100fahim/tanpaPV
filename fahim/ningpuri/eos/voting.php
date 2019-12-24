<?php 
session_start();
if(empty($_SESSION['nis'])){
      header("location:./index.php?page=error");
}else{
define('BASEPATH', dirname(__FILE__));

include('./include/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>SMA Ibrahimy</title>
      <link rel="stylesheet" href="css/stylee.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="js/jquery.js"></script>
</head>
<style media="screen">
         .img {
            height: 200px;
            width: 196px;
         }
         .nama {
           position:absolute;
           background: rgba(35, 35, 35, 0.624);
           top: 178px;
           font-size:16px;
         }
         .thumbnail {
    display: block;
    padding: 4px;
    margin-bottom: 20px;
    
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    -webkit-transition: border .2s ease-in-out;
    -o-transition: border .2s ease-in-out;
    transition: border .2s ease-in-out;
}
header {
      width: 100%;
      height: 100vh;
      background-size: cover;
      }


      </style>
<body>
 
      <div class="wrapper">
            <header class="col-md-12 col-sm-12 col-12" style="background: url(assets/img/asd.jpg) no-repeat 50% 50%;">
                  <nav>

                        <div class="menu-icon">
                              <i class="fa fa-bars fa-2x"></i>
                        </div>

                        <div class="logo">
                              SMA IBRAHIMY
                        </div>

                        <div class="menu">
                              <ul>
                                    <li><a href="daftar.php">Tes Online</a></li>
                                    <li><a href="voting.php">Voting</a></li>
                                    <li><a href="#">Agenda</a></li>
                                    <li><a href="profil.php">Profil</a></li>
                              </ul>
                        </div>
                  </nav>
                  <?php




$thn     = date('Y');
$dpn     = date('Y') + 1;
$periode = $thn.'/'.$dpn;

$get="SELECT * FROM t_pemilih WHERE nis='".$_SESSION['nis']."'";
$a = mysqli_query($con, $get);
$row = mysqli_fetch_array($a);

if (!$a) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}

$sql = $con->prepare("SELECT * FROM t_kandidat WHERE periode = ?") or die($con->error);
$sql->bind_param('s', $periode);
$sql->execute();
$sql->store_result();

if ($_SESSION['nis']==$row['nis']){

 echo '<div class="text-center" style="padding-top:20px;">
 <h2 style="color:white;margin-top:200px;padding-bottom:20px">Maaf Anda Sudah Memvoting</h2>
 <a href="homepage.php"><button class="btn2 col-md-1 col-sm-4 col-4">Kembali Ke Home</button></a>
</div>';


}
else{
  if ($sql->num_rows() > 0) {
           $numb = $sql->num_rows();
           echo '<div class="text-center" style="padding-top:20px;">
                   <h2 style="color:white;margin-top:200px;padding-bottom:20px">Daftar Calon Ketua Osis Periode '.$periode.'</h2>
               </div> ';

       

         echo '<div class="col-md-12 col-md-offset-1">';
         echo '<div class="row col-12">';

           for ($i = 1; $i <= $numb; $i++) {
               $sql->bind_result($id, $nama, $foto, $visi, $misi, $suara, $periode);
               $sql->fetch();
     ?>
                
               <div class="col-md-3 container">
               
                 <section>
                   <div class="thumbnail col-md-12">  
                     <div class="text-center">   
                       <img src="./assets/img/kandidat/<?php echo $foto; ?>" class="img">
                       <p class="nama col-md-12" style="color:white;"><?php echo $nama; ?></p>
                       <div class="caption">
                           <a href="./detail.php?id=<?php echo $id; ?>" class="btn btn-warning btn-block">Lihat Visi Misi</a>
                           <a href="./submit.php?id=<?php echo $id; ?>&s=<?php echo $suara; ?>" class="btn btn-success btn-block">Beri Suara</a>
                       </div>
                       </div>
                     </div>
                 </section>
               </div>
           
                     
             <?php
                   }

                 echo '</div>';

} 
     else {

           echo '<div class="callout warning">
                   <h2 style="color:white;">Belum Ada Calon Ketua</h2>
                 </div>';
         }
}
echo '</div>';

?>
   </div>
                  </div>
            </header>
            <?php
            if (isset($_GET['page'])) {
              switch ($_GET['page']) {
              case 'thanks':
                include('./thanks.php');
              break;
                              

              }
              exit;
              }
}

              ?>
        
        <?php include "footer.php";?>