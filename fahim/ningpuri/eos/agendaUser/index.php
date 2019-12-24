<!DOCTYPE html>
<html>
<head>
    <title>Agenda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <link rel="stylesheet" type= "text/css" href="css/css1/bootstrap-grid.css">
    <link rel="stylesheet" type= "text/css" href="css/css1/bootstrap.css">
    <link rel="stylesheet" type= "text/css" href="css/css1/owl.carousel.min.css">
    <link rel="stylesheet" type= "text/css" href="css/css1/owl.theme.default.min.css">
    <link rel="stylesheet" href="components/bootstrap2/css/bootstrap-responsive.css">
    <link rel="stylesheet" type= "text/css" href="css/css1/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
	  <link rel="stylesheet" href="css/css1/styles1.css">
   
   <script>
    $(document).ready(function(){
        var calendar = $('#calendar').fullCalendar({
            edittable:true,
            header:{
                left:'prev,next today',
                center:'tittle',
                right:'month,agendaWeek,agendaDay'
            },
            events: 'load.php',
            selectable:true  ,
            selectHelper:true ,
           
        });
    });
    </script>

</head>
<body>
  
<section>
         <nav class="navbar navbar-expand-lg navbar-dark bg-green">
        <div class="container">
          
            <img src="img/home.png" width="4%">
            <a id="hi" class="navbar-brand" href="../index.php">OSIS SMA Ibrahimy</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
              
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                  <a id="ho" class="nav-link" href="../daftar.php">Tes Online</a>
              <li class="nav-item">
                <a id="ho" class="nav-link" href="../voting.php">Vote</a>
              </li>
              <li class="nav-item">
                  <a id="ho" class="nav-link" href="index.php" >Agenda</a> <!--disini saya menggunakan #section1 agar langsung menuju ke div id section1-->
              </li>
              </ul>
            </div>
              
            </div>
            </div>
          </div>
        </div>
      </nav>
    </section>
    <br />
    <h2 align="center"> Jadwal Agenda Kegiatan Osis </h2>
    <br />
    <div calss="container">
      <div id="calendar"></div>
    </div>
    <section class="aboutu">
          <div class="container ">
              <div class="row">
                <div class="col-5">
                  <b style="color:black;">More Link</b>
                  <div id="sizeaboutu">
                    <p id="jarak2"><div id="section1"><a class="text-link" href="#">PRIVACY POLICY</a></div><br id="jarak2"><a class="text-link " href="#">TERMS AND CONDITIONS</a></p>
                  </div>
                </div>
              <div class="col-7">
                  <b style="color:black;">Contact Us</b>
                <div id="sizeaboutu">
                  <p id="jarak2">Perum Galaxy Patrang Blok G2 no 16 Jl Srikoyo Patrang, Jember - Indonesia</p>
                  <p><img src="img/phone.png" width="2%">(+62) 81216382297</p>
                  <div id="jarak3"><img src="img/mail.png" width="3%">contact@bishop.com</div>
                  <p id="wa"><img src="img/wa.png"  width="3%">081216382297  <img src="img/line.png"  width="3%">@BiShop</p>
                </div>
              </div>
            </div>
            <hr>
            <hr>
          </div>
      </section>
</body>
</html>