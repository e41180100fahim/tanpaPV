<?php
if(!isset($_SESSION['id_admin'])) {
   header('location: ../');
}
?>
<div class="col-md-12">
<div class="box box-danger">
<div class="row">
   <div class="col-md-9 col-sm-9">
      <h3>Daftar Soal</h3>
   </div>
   <div class="col-md-3 col-sm-3" style="padding-top:10px;">
</div>
   <div style="clear:both"></div>
   <hr />
   <div class="col-md-10 col-sm-12">
      <table class="table table-striped table-hover">
            <thead>
                  <tr>
                  <th style="text-align:center;">#</th>
                  <th style="text-align:center;">Soal</th>
                  <th style="text-align:center;">A</th>
                  <th style="text-align:center;">B</th>
                  <th style="text-align:center;">C</th>
                  <th style="text-align:center;">D</th>
                  <th width="200px" style="text-align:center;">Opsi</th>

                  </tr>
            </thead>
            <tbody>
                  <?php
                  require('../include/connection.php');

                  if (isset($_GET['hlm'])) {
                              $hlm = $_GET['hlm'];
                              $no  = (4*$hlm) - 3;
                        } else {
                              $hlm = 1;
                              $no  = 1;
                        }
                  $start  = ($hlm - 1) * 4;

                  $sql = mysqli_query($con, "SELECT * FROM t_soal LIMIT $start,5");

                  if (mysqli_num_rows($sql) > 0) {

                  $i = 1;
                  while($data = mysqli_fetch_array($sql)) {
                        ?>
                        <tr>
                        <td style="text-align:center;vertical-align:middle;">
                              <?php echo $no++; ?>
                        </td>
                        <td style="padding-left:25px;vertical-align:middle;">
                              <?php echo $data['soal']; ?>
                        </td>
                        <td style="text-align:center;vertical-align:middle;">
                              <?php echo $data['a']; ?>
                        </td>
                        <td style="text-align:center;vertical-align:middle;">
                              <?php echo $data['b']; ?>
                        </td>
                        <td style="text-align:center;vertical-align:middle;">
                              <?php echo $data['c']; ?>
                        </td>
                        <td style="text-align:center;vertical-align:middle;">
                              <?php echo $data['d']; ?>
                        </td>
                        <td style="text-align:center;vertical-align:middle;">
                              <a href="?page=soal&action=adds&id=<?php echo $data['idkategori']; ?>" class="btn btn-primary btn-sm">
                              Select
                              </a>
                        </td>

                        </tr>
                        <?php
                  }

                  } else {

                  echo "<tr>
                              <td colspan='10' style='text-align:center;'><h4>Belum ada data</h4></td>
                        </tr>";
                  }
                  ?>
            </tbody>
      </table>
      <?php
      echo '<ul class="pagination">';
         if($hlm > 1){ //start if
            $hlmn = $hlm - 1;
      ?>
            <li class="waves-effect">
               <a href="?page=user&hlm=<?php  echo $hlmn; ?>">
                  <i class='fa fa-caret-left'></i> Prev
               </a>
            </li>
      <?php
         }		//end if $hlm > 1


         $hitung = mysqli_num_rows(mysqli_query($con, "SELECT * FROM t_soal"));

         $total  = ceil($hitung /4 );
         for ($i = 1; $i <= $total ; $i++) { //start for
      ?>
            <li <?php if ($hlm != $i) { echo 'class="waves-effect"'; } else { echo 'class="active"'; } ?>>
               <a href="?page=user&hlm=<?php  echo $i; ?>">
                  <?php  echo $i; ?>
               </a>
            </li>
         <?php
         } // end for

         if ($hlm < $total) { //start if $hlm < $total
            $next = $hlm + 1;
         ?>
            <li class="waves-effect">
               <a href="?page=user&hlm=<?php  echo $next; ?>">
                  Next <i class='fa fa-caret-right'></i>
               </a>
            </li>
         <?php
         }	//end if $hlm < $total

      echo '</ul>';	//end pagination
      ?>
      </div>
      </div>
      </div>
</div>
