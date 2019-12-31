<?php
require_once ('header.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pemesanan</title>

  </head>
  <body>
    <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pemesanan</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <p>Simple table with project listing with progress and editing options</p>

                    <!-- start project list -->
                    <table class="table table-striped projects" style="background-color: black;">
                      <thead>
                        <tr>
                          <th style="width: 11%;">Id Pesanan</th>
                          <th style="width: 11%;">Id Transaksi</th>
                          <th style="width: 20%;">Nama Pemesan</th>
                          <th style="width: 30%;">Alamat</th>
                          <th style="width: 10%;">Kode Pos</th>
                          <th style="width: 7%;">No Hp</th>
                          <th style="width: 7%;">Member</th>
                          <th>Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1234567890</td>
                          <td>0987654321</td>
                          <td>Deny</td>
                          <td>Jember</td>
                          <td>12345</td>
                          <td>085212341234</td>
                          <td>Bronze</td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>1234567890</td>
                          <td>0987654321</td>
                          <td>Eko</td>
                          <td>Jember</td>
                          <td>12345</td>
                          <td>085212341234</td>
                          <td>Gold</td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          </td>
                        </tr>
                        <tr>
                          <td>1234567890</td>
                          <td>0987654321</td>
                          <td>Satrijo</td>
                          <td>Jember</td>
                          <td>12345</td>
                          <td>085212341234</td>
                          <td>Bronze</td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          </td>
                        </tr>
                        <tr>
                          <td>1234567890</td>
                          <td>0987654321</td>
                          <td>Achmad</td>
                          <td>Probolinggo</td>
                          <td>12345</td>
                          <td>085212341234</td>
                          <td>Gold</td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          </td>
                        </tr>
                        <tr>
                          <td>1234567890</td>
                          <td>0987654321</td>
                          <td>Syadidul</td>
                          <td>Probolinggo</td>
                          <td>12345</td>
                          <td>085212341234</td>
                          <td>Bronze</td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          </td>
                        </tr>
                        <tr>
                          <td>1234567890</td>
                          <td>0987654321</td>
                          <td>Fahim</td>
                          <td>Probolinggo</td>
                          <td>12345</td>
                          <td>085212341234</td>
                          <td>Gold</td>
                          </td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          </td>
                        </tr>
                        <tr>
                          <td>1234567890</td>
                          <td>0987654321</td>
                          <td>Nafis</td>
                          <td>Jember</td>
                          <td>12345</td>
                          <td>085212341234</td>
                          <td>Bronze</td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          </td>
                        </tr>
                        <tr>
                          <td>1234567890</td>
                          <td>0987654321</td>
                          <td>Hibatullah</td>
                          <td>Jember</td>
                          <td>12345</td>
                          <td>085212341234</td>
                          <td>Gold</td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          </td>
                        </tr>
                        <tr>
                          <td>1234567890</td>
                          <td>0987654321</td>
                          <td>Lestamanta</td>
                          <td>Jember</td>
                          <td>12345</td>
                          <td>085212341234</td>
                          <td>Bronze</td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          </td>
                        </tr>
                        <tr>
                          <td>1234567890</td>
                          <td>0987654321</td>
                          <td>Titik</td>
                          <td>Nganjuk</td>
                          <td>12345</td>
                          <td>085212341234</td>
                          <td>Gold</td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>