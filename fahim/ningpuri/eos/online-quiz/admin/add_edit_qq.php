<?php
include "header.php";
include "../koneksi.php";
$id=$_GET["id"];
$exam_category='';
$res=mysqli_query($link,"SELECT * from exam_category where id=$id");
while ($row=mysqli_fetch_array($res)) {
  $exam_category=$row["category"];
}
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Question Inside <?php echo "<font color='red'>" .$exam_category. "</font>"; ?></h1>
                    </div>
                </div>
            </div>

        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">

                              <div class="col-lg-6">
                                <form class="form1" action="" method="post" enctype="multipart/form-data">
                                  <div class="card">
                                      <div class="card-header"><strong>Add New Questions with Text</strong>
                                      <div class="card-body card-block">
                                          <div class="form-group"><label for="company" class=" form-control-label">Add Question</label><input type="text" placeholder="Add Question" name="question" class="form-control"></div>
                                          <div class="form-group"><label for="company" class=" form-control-label">Add Option 1</label><input type="text" placeholder="Add Option 1" name="opt1" class="form-control"></div>
                                          <div class="form-group"><label for="company" class=" form-control-label">Add Option 2</label><input type="text" placeholder="Add Option 2" name="opt2" class="form-control"></div>
                                          <div class="form-group"><label for="company" class=" form-control-label">Add Option 3</label><input type="text" placeholder="Add Option 3" name="opt3" class="form-control"></div>
                                          <div class="form-group"><label for="company" class=" form-control-label">Add Option 4</label><input type="text" placeholder="Add Option 4" name="opt4" class="form-control"></div>
                                          <div class="form-group"><label for="company" class=" form-control-label">Add Answer</label><input type="text" placeholder="Add Answer" name="answer" class="form-control"></div>
                                          <div class="form-group">
                                              <input type="submit" name="submit1" value="Add Question" class="btn btn-success">

                                          </div>

                                      </div>
                                  </div>

                              </div>



                          </div>
                          <div class="col-lg-6">

                              <div class="card">
                                  <div class="card-header"><strong>Add New Questions with Image</strong>
                                  <div class="card-body card-block">
                                      <div class="form-group"><label for="company" class=" form-control-label">Add Question</label><input type="text" placeholder="Add Question" name="fquestion" class="form-control"></div>
                                      <div class="form-group"><label for="company" class=" form-control-label">Add Option 1</label><input type="file" name="fopt1" class="form-control" style="padding-bottom:45px;"></div>
                                      <div class="form-group"><label for="company" class=" form-control-label">Add Option 2</label><input type="file" name="fopt2" class="form-control" style="padding-bottom:45px;"></div>
                                      <div class="form-group"><label for="company" class=" form-control-label">Add Option 3</label><input type="file" name="fopt3" class="form-control" style="padding-bottom:45px;"></div>
                                      <div class="form-group"><label for="company" class=" form-control-label">Add Option 4</label><input type="file" name="fopt4" class="form-control" style="padding-bottom:45px;"></div>
                                      <div class="form-group"><label for="company" class=" form-control-label">Add Answer</label><input type="file" name="fanswer" class="form-control" style="padding-bottom:45px;"></div>
                                      <div class="form-group">
                                          <input type="submit" name="submit2" value="Add Question" class="btn btn-success">

                                      </div>

                                  </div>
                              </div>

                          </div>


                            </form>
                      </div>

                            </div>
                        </div>

                    </div>
                    <!--/.col-->

                                        </div><!-- .animated -->
                                    </div><!-- .content -->


<?php
if (isset($_POST["submit1"]))
{
  $loop=0;
    $count=0;
      $res=mysqli_query($link,"SELECT * from questions where category='$exam_category' order by id asc") or die (mysqli_error($link));
        $count=mysqli_num_rows($res);
        if ($count=0)
        {

        }
        else
        {
          while ($row=mysqli_fetch_array($res))
          {
            $loop=$loop+1;
            mysqli_query($link,"UPDATE questions set qustion_no='$loop' where id =$row[id]");
          }
        }

$loop=$loop+1;







mysqli_query($link,"INSERT into questions values(NULL,'$loop','$_POST[question]','$_POST[opt1]','$_POST[opt2]','$_POST[opt3]','$_POST[opt4]','$_POST[answer]','$exam_category')") or die (mysqli_error($link));

?>
<script type="text/javascript">
  alert("Question Added Successfully");
  window.location.href=window.location.href;
</script>
<?php
}

 ?>

 <?php
 if (isset($_POST["submit2"]))
 {
   $loop=0;
     $count=0;
       $res=mysqli_query($link,"SELECT * from questions where category='$exam_category' order by id asc") or die (mysqli_error($link));
         $count=mysqli_num_rows($res);
         if ($count=0)
         {

         }
         else
         {
           while ($row=mysqli_fetch_array($res))
           {
             $loop=$loop+1;
             mysqli_query($link,"UPDATE questions set qustion_no='$loop' where id =$row[id]");
           }
         }

 $loop=$loop+1;

 $tm=md5(time());

 $fnm1=$_FILES["fopt1"]["name"];
 $dst1="./gambar/".$tm.$fnm1;//untuk upload image
 $dst_db1="gambar/".$tm.$fnm1;
 move_uploaded_file($S_FILES["fopt1"]["tmp_name"],$dst1);

 $fnm2=$_FILES["fopt2"]["name"];
 $dst2="./gambar/".$tm.$fnm2;//untuk upload image
 $dst_db2="gambar/".$tm.$fnm2;
 move_uploaded_file($S_FILES["fopt2"]["tmp_name"],$dst2);

 $fnm3=$_FILES["fopt3"]["name"];
 $dst3="./gambar/".$tm.$fnm3;//untuk upload image
 $dst_db3="gambar/".$tm.$fnm3;
 move_uploaded_file($S_FILES["fopt3"]["tmp_name"],$dst3);

 $fnm4=$_FILES["fopt4"]["name"];
 $dst4="./gambar/".$tm.$fnm4;//untuk upload image
 $dst_db4="gambar/".$tm.$fnm4;
 move_uploaded_file($S_FILES["fopt4"]["tmp_name"],$dst4);

 $fnm5=$_FILES["fanswer"]["name"];
 $dst5="./gambar/".$tm.$fnm5;//untuk upload image
 $dst_db5="gambar/".$tm.$fnm5;
 move_uploaded_file($S_FILES["fanswer"]["tmp_name"],$dst5);

 mysqli_query($link,"INSERT into questions values(NULL,'$loop','$_POST[fquestion]','$dst_db1','$dst_db2','$dst_db3','$dst_db4','$dst_db5','$exam_category')") or die (mysqli_error($link));

 ?>
 <script type="text/javascript">
   alert("Question Added Successfully");
   window.location.href=window.location.href;
 </script>
 <?php
 }

  ?>


<?php
include "footer.php";
?>
