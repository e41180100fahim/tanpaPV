<?php
include "header.php";
include "../koneksi.php";
$id=$_GET["id"];
$res=mysqli_query($link,"SELECT * from exam_category where id = '$id'");
while($row=mysqli_fetch_array($res))
{
  $exam_category=$row["category"];
  $exam_time=$row["exam_time_in_minutes"];
}
 ?>
 <div class="breadcrumbs">
     <div class="col-sm-4">
         <div class="page-header float-left">
             <div class="page-title">
                 <h1>Edit Exam</h1>
             </div>
         </div>
     </div>

 </div>

 <div class="content mt-3">
     <div class="animated fadeIn">


         <div class="row">
             <div class="col-lg-12">
                 <div class="card">
                     <form name="form1" action="" method="post">
                     <div class="card-body">

                         <div class="col-lg-6">
                             <div class="card">
                                 <div class="card-header"><strong>Edit Exam</strong>
                                 <div class="card-body card-block">
                                     <div class="form-group"><label for="company" class=" form-control-label">New Exam Category</label><input type="text" placeholder="Add Exam Category" name="examnew" class="form-control"></div>
                                     <div class="form-group"><label for="vat" class=" form-control-label">Exam Time In Minutes</label><input type="text"  placeholder="Add Exam Time" class="form-control"  name="examtime" ></div>
                                     <div class="form-group">
                                         <input type="submit" name="submit1" value="Add Exam" class="btn btn-success">

                                     </div>

                                 </div>
                             </div>

                         </div>



                     </div>

                 </div>
                     </form>

             </div>
             <!--/.col-->

                                 </div><!-- .animated -->
                             </div><!-- .content -->



         <?php
         if (isset($_POST["submit1"]))
         {
             mysqli_query($link,"INSERT into exam_category values(NULL,'$_POST[examnew]','$_POST[examtime]')") or die(mysqli_error($link));

           ?>
           <script type="text/javascript">
               alert("exam edit successfully");
               window.location.href=window.location.href;
           </script>
           <?php
         }
         ?>
<?php
include "footer.php";
?>
