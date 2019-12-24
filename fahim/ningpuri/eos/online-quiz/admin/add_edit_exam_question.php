<?php
include "header.php";
include "../koneksi.php";
?>
        <div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Select Exam Categories for add and edit question</h1>
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
                              <table class="table table-bordered">
                                  <thead>
                                  <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">Exam Name</th>
                                      <th scope="col">Exam Time</th>
                                      <th scope="col">Select</th>

                                  </tr>
                                  </thead>
                                  <tbody>

                                    <?php
                                    $count=0;
                                      $res=mysqli_query($link,"SELECT * from exam_category");
                                        while ($row=mysqli_fetch_array($res))
                                        {
                                          $count=$count+1;
                                          ?>
                                          <tr>
                                              <th scope="row"><?php echo $count;?></th>
                                              <td><?php echo $row["category"]; ?></td>
                                              <td><?php echo $row["exam_time_in_minutes"]; ?></td>
                                              <td><a href="add_edit_question.php?id=<?php echo $row["id"]; ?>">Select</a></td>

                                          </tr>
                                          <?php
                                        }

                                     ?>



                                  </tbody>
                              </table>


                            </div>
                        </div>

                    </div>
                    <!--/.col-->
</div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
<?php
include "footer.php";
?>
