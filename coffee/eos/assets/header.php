<section>
         <nav class="navbar navbar-expand-lg navbar-dark bg-green">
        <div class="container">
          
            <img src="assets/img/home.png" width="4%">
            <a id="hi" class="navbar-brand" href="#">OSIS SMA Ibrahimy</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
              
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
              <!--<li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>-->
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
              <!--<li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>-->
              <li class="nav-item">
                <a id="ho" class="nav-link" href="index.html">Home</a>
             </li>
              <li class="nav-item">
                  <a id="ho" class="nav-link" href="#">Tes Online</a>
              </li>
              <li class="nav-item">
                <a id="ho" class="nav-link" href="#">Daftar</a>
              </li>
              <li class="nav-item">
                <a id="ho" class="nav-link" href="voting.php">Vote</a>
              </li>
              <li class="nav-item">
                <a id="ho" class="nav-link" href="#">Profil</a>
              </li>
              <li class="nav-item">
                  <a id="ho" class="nav-link" href="agenda.html" >Agenda</a> <!--disini saya menggunakan #section1 agar langsung menuju ke div id section1-->
              </li>
              </ul>
            </div>
              </ul>
            </div>
   
            <li id="aman" class="nav-item dropdown">
              <img class="profile dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" src="assets/img/profile.png" width="15%">
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a id="he" class="dropdown-item" href="logout.php">LogOut</a>

                <!--Modal-->
                
                <center><button type="button" id="he" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
                Profil
                </button></center>
              </div>
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <center>
                    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" style="border-radius:80%" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    <h3 class="media-heading"><?php 
                      $result1 = mysqli_query($con, $sqlnama);
                      $row = mysqli_fetch_array($result1);
                      echo $row['fullname'];
                    ?> <small>XII IPA-2</small></h3>
                    <span><strong>Jabatan: </strong></span>
                        <?php
                        $result = mysqli_query($con,$sqljbt);
                        $row = mysqli_fetch_array($result);
                        if($row['id_jbtn'] == "3") {
                          echo "<span class='badge badge-danger'>Ketua Osis</span>";
                        }
                        else {
                          echo "<span class='badge badge-success'>Wakil Ketua</span>";
                        }
                        ?>
                    </center>
                    <hr>
                    <center>
                    <p class="text-left"><strong>Bio: </strong><br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                    <br>
                    </center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div> 
            </li>
            </div>
            </div>
          </div>
        </div>
      </nav>
    </section>