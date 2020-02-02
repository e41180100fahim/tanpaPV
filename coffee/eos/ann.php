<?php
      $cresult = mysqli_query($con,"SELECT * FROM t_ann");
      $row = mysqli_fetch_array($cresult);
      $ada=mysqli_num_rows($cresult);
      $isi=$row['isi'];
      $wallpost=nl2br($isi);
?>

<div class="container">
              <div style="background-color:white;margin-top:10px" class="jumbotron jumbotron-fluid">
                <div class="container">
                    <?php
                    if($ada == 0){
                    ?>
                    <h1 class="display-4 text-center" style="color:grey;">Tidak Ada Pengumuman</h1>
                    <?php }else{ ?>
                  <h1 class="display-4">Pengumuman</h1>
                    <p class="lead"><?php echo $wallpost?></p>
                    <?php } ?>
                </div>
              </div>
            </div>