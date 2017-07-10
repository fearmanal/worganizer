<?php   

      session_start(); 

      if(!isset($_SESSION['ulogin'])) {
           header("location:login.php");  
      }
      else {

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GGWP - Gal Gadot Wedding Planner</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom -->
    <link href="css/order.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    
    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Custom -->
    <script src="js/order.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

  </head>
  <body>
    <div class="container">
      <center><h1>Create Order</h1></center>

        <div class="row">
          <section>
              <div class="wizard">
                  <div class="wizard-inner">
                      <div class="connecting-line"></div>
                      <ul class="nav nav-tabs" role="tablist">

                          <li role="presentation" class="active">
                              <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                  <span class="round-tab">
                                      <i class="fa fa-child"></i>
                                  </span>
                              </a>
                          </li>

                          <li role="presentation" class="disabled">
                              <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                  <span class="round-tab">
                                      <i class="fa fa-cutlery"></i>
                                  </span>
                              </a>
                          </li>

                          <li role="presentation" class="disabled">
                              <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                  <span class="round-tab">
                                      <i class="fa fa-tree"></i>
                                  </span>
                              </a>
                          </li>
                          
                          <li role="presentation" class="disabled">
                              <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 4">
                                  <span class="round-tab">
                                      <i class="fa fa-camera-retro"></i>
                                  </span>
                              </a>
                          </li>
                          
                          <li role="presentation" class="disabled">
                              <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab" title="Step 5">
                                  <span class="round-tab">
                                      <i class="fa fa-building"></i>
                                  </span>
                              </a>
                          </li>
                          
                          <li role="presentation" class="disabled">
                              <a href="#step6" data-toggle="tab" aria-controls="step6" role="tab" title="Step 6">
                                  <span class="round-tab">
                                      <i class="fa fa-music"></i>
                                  </span>
                              </a>
                          </li>
                          
                          <li role="presentation" class="disabled">
                              <a href="#step7" data-toggle="tab" aria-controls="step7" role="tab" title="Step 7">
                                  <span class="round-tab">
                                      <i class="fa fa-female"></i>
                                  </span>
                              </a>
                          </li>
                          
                          <li role="presentation" class="disabled">
                              <a href="#step8" data-toggle="tab" aria-controls="step8" role="tab" title="Step 8">
                                  <span class="round-tab">
                                      <i class="fa fa-birthday-cake"></i>
                                  </span>
                              </a>
                          </li>
                          
                          <li role="presentation" class="disabled">
                              <a href="#step9" data-toggle="tab" aria-controls="step9" role="tab" title="Step 9">
                                  <span class="round-tab">
                                      <i class="fa fa-gift"></i>
                                  </span>
                              </a>
                          </li>
                          
                          <li role="presentation" class="disabled">
                              <a href="#step10" data-toggle="tab" aria-controls="step10" role="tab" title="Step 10">
                                  <span class="round-tab">
                                      <i class="fa fa-file-text"></i>
                                  </span>
                              </a>
                          </li>

                          <li role="presentation" class="disabled">
                              <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                  <span class="round-tab">
                                      <i class="glyphicon glyphicon-ok"></i>
                                  </span>
                              </a>
                          </li>
                      </ul>
                  </div>
                  
                  <form role="form" action="order_review.php" enctype="multipart/form-data" method="POST">
                      <input type="hidden" name="id_user" value="<?php echo $_SESSION['ulogin']; ?>">
                      <div class="tab-content">
                          
                          <div class="tab-pane active" role="tabpanel" id="step1">
                              <center>
                                <h2>SERVICE</h2>
                              </center>
                              <br/>
                              <div class="row">                                
                                <?php 
                                  //menampilkan data mysqli
                                  include "koneksi.php";
                                  $tbname="service";
                                  $no = 0;
                                  $modal=mysqli_query($connection, "SELECT * FROM $tbname ORDER BY name ASC");
                                  while($r=mysqli_fetch_array($modal)){
                                  $no++;       
                                ?>
                                  <div class="col-md-4">
                                  <input type="radio" class="radio_item" value="<?php echo $r['id']; ?>" name="<?php echo $tbname ?>" id="<?php echo $tbname.$r['id']; ?>">
                                  <label class="label_item" for="<?php echo $tbname.$r['id']; ?>">
                                      <div class="hovereffect">
                                          <img class="img-responsive" src="<?php echo $r['image']; ?>" alt="">
                                          <div class="overlay">
                                             <h2><?php echo $r['name']; ?></h2>
                                             <p class="info"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-' ?></p>
                                          </div>
                                      </div>
                                  </label>
                                  </div>
                                <?php } ?>
                                <br>
                              </div>
                              <br>
                              <center>
                                    <button type="button" class="btn btn-danger reset-<?php echo $tbname; ?>">Reset</button>
                                    <button type="button" class="btn btn-success next-step ">Next</button>
                              </center>
                          </div>

                          <div class="tab-pane" role="tabpanel" id="step2">
                              <h4>Catering</h4>
                              <br/>
                              <div class="row">                                
                                <?php 
                                  //menampilkan data mysqli
                                  include "koneksi.php";
                                  $tbname="catering";
                                  $no = 0;
                                  $modal=mysqli_query($connection, "SELECT * FROM $tbname ORDER BY name ASC");
                                  while($r=mysqli_fetch_array($modal)){
                                  $no++;       
                                ?>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                  <input type="radio" class="radio_item" value="<?php echo $r['id']; ?>" name="<?php echo $tbname ?>" id="<?php echo $tbname.$r['id']; ?>">
                                  <label class="label_item" for="<?php echo $tbname.$r['id']; ?>">
                                      <div class="hovereffect">
                                          <img class="img-responsive" src="<?php echo $r['image']; ?>" alt="">
                                          <div class="overlay">
                                             <h2><?php echo $r['name']; ?></h2>
                                             <p class="info"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-/porsi' ?></p>
                                          </div>
                                      </div>
                                  </label>
                                  </div>
                                <?php } ?>
                                <br>
                              </div>
                              <ul class="list-inline pull-right">
                                  <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                  <li><button type="button" class="btn btn-default reset-<?php echo $tbname; ?>">Reset</button></li>
                                  <li><button type="button" class="btn btn-primary next-step">Next</button></li>
                              </ul>
                          </div>
                          <div class="tab-pane" role="tabpanel" id="step3">
                              <h4>Dekorasi</h4>
                              <br/>
                              <div class="row">                                
                                <?php 
                                  //menampilkan data mysqli
                                  include "koneksi.php";
                                  $tbname="dekorasi";
                                  $no = 0;
                                  $modal=mysqli_query($connection, "SELECT * FROM $tbname ORDER BY name ASC");
                                  while($r=mysqli_fetch_array($modal)){
                                  $no++;       
                                ?>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                  <input type="radio" class="radio_item" value="<?php echo $r['id']; ?>" name="<?php echo $tbname ?>" id="<?php echo $tbname.$r['id']; ?>">
                                  <label class="label_item" for="<?php echo $tbname.$r['id']; ?>">
                                      <div class="hovereffect">
                                          <img class="img-responsive" src="<?php echo $r['image']; ?>" alt="">
                                          <div class="overlay">
                                             <h2><?php echo $r['name']; ?></h2>
                                             <p class="info"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-' ?></p>
                                          </div>
                                      </div>
                                  </label>
                                  </div>
                                <?php } ?>
                                <br>
                              </div>
                              <ul class="list-inline pull-right">
                                  <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                  <li><button type="button" class="btn btn-default reset-<?php echo $tbname; ?>">Reset</button></li>
                                  <li><button type="button" class="btn btn-primary next-step">Next</button></li>
                              </ul>
                          </div>
                          <div class="tab-pane" role="tabpanel" id="step4">
                              <h4>Dokumentasi</h4>
                              <br/>
                              <div class="row">                                
                                <?php 
                                  //menampilkan data mysqli
                                  include "koneksi.php";
                                  $tbname="dokumentasi";
                                  $no = 0;
                                  $modal=mysqli_query($connection, "SELECT * FROM $tbname ORDER BY name ASC");
                                  while($r=mysqli_fetch_array($modal)){
                                  $no++;       
                                ?>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                  <input type="radio" class="radio_item" value="<?php echo $r['id']; ?>" name="<?php echo $tbname ?>" id="<?php echo $tbname.$r['id']; ?>">
                                  <label class="label_item" for="<?php echo $tbname.$r['id']; ?>">
                                      <div class="hovereffect">
                                          <img class="img-responsive" src="<?php echo $r['image']; ?>" alt="">
                                          <div class="overlay">
                                             <h2><?php echo $r['name']; ?></h2>
                                             <p class="info"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-' ?></p>
                                          </div>
                                      </div>
                                  </label>
                                  </div>
                                <?php } ?>
                                <br>
                              </div>
                              <ul class="list-inline pull-right">
                                  <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                  <li><button type="button" class="btn btn-default reset-<?php echo $tbname; ?>">Reset</button></li>
                                  <li><button type="button" class="btn btn-primary next-step">Next</button></li>
                              </ul>
                          </div>
                          <div class="tab-pane" role="tabpanel" id="step5">
                              <h4>Gedung</h4>
                              <br/>
                              <div class="row">                                
                                <?php 
                                  //menampilkan data mysqli
                                  include "koneksi.php";
                                  $tbname="gedung";
                                  $no = 0;
                                  $modal=mysqli_query($connection, "SELECT * FROM $tbname ORDER BY name ASC");
                                  while($r=mysqli_fetch_array($modal)){
                                  $no++;       
                                ?>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                  <input type="radio" class="radio_item" value="<?php echo $r['id']; ?>" name="<?php echo $tbname ?>" id="<?php echo $tbname.$r['id']; ?>">
                                  <label class="label_item" for="<?php echo $tbname.$r['id']; ?>">
                                      <div class="hovereffect">
                                          <img class="img-responsive" src="<?php echo $r['image']; ?>" alt="">
                                          <div class="overlay">
                                             <h2><?php echo $r['name']; ?></h2>
                                             <p class="info"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-' ?></p>
                                          </div>
                                      </div>
                                  </label>
                                  </div>
                                <?php } ?>
                                <br>
                              </div>
                              <ul class="list-inline pull-right">
                                  <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                  <li><button type="button" class="btn btn-default reset-<?php echo $tbname; ?>">Reset</button></li>
                                  <li><button type="button" class="btn btn-primary next-step">Next</button></li>
                              </ul>
                          </div>
                          <div class="tab-pane" role="tabpanel" id="step6">
                              <h4>Hiburan</h4>
                              <br/>
                              <div class="row">                                
                                <?php 
                                  //menampilkan data mysqli
                                  include "koneksi.php";
                                  $tbname="hiburan";
                                  $no = 0;
                                  $modal=mysqli_query($connection, "SELECT * FROM $tbname ORDER BY name ASC");
                                  while($r=mysqli_fetch_array($modal)){
                                  $no++;       
                                ?>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                  <input type="radio" class="radio_item" value="<?php echo $r['id']; ?>" name="<?php echo $tbname ?>" id="<?php echo $tbname.$r['id']; ?>">
                                  <label class="label_item" for="<?php echo $tbname.$r['id']; ?>">
                                      <div class="hovereffect">
                                          <img class="img-responsive" src="<?php echo $r['image']; ?>" alt="">
                                          <div class="overlay">
                                             <h2><?php echo $r['name']; ?></h2>
                                             <p class="info"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-' ?></p>
                                          </div>
                                      </div>
                                  </label>
                                  </div>
                                <?php } ?>
                                <br>
                              </div>
                              <ul class="list-inline pull-right">
                                  <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                  <li><button type="button" class="btn btn-default reset-<?php echo $tbname; ?>">Reset</button></li>
                                  <li><button type="button" class="btn btn-primary next-step">Next</button></li>
                              </ul>
                          </div>
                          <div class="tab-pane" role="tabpanel" id="step7">
                              <h4>Baju Pengantin &amp; Rias</h4>
                              <br/>
                              <div class="row">                                
                                <?php 
                                  //menampilkan data mysqli
                                  include "koneksi.php";
                                  $tbname="riasnbaju";
                                  $no = 0;
                                  $modal=mysqli_query($connection, "SELECT * FROM $tbname ORDER BY name ASC");
                                  while($r=mysqli_fetch_array($modal)){
                                  $no++;       
                                ?>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                  <input type="radio" class="radio_item" value="<?php echo $r['id']; ?>" name="<?php echo $tbname ?>" id="<?php echo $tbname.$r['id']; ?>">
                                  <label class="label_item" for="<?php echo $tbname.$r['id']; ?>">
                                      <div class="hovereffect">
                                          <img class="img-responsive" src="<?php echo $r['image']; ?>" alt="">
                                          <div class="overlay">
                                             <h2><?php echo $r['name']; ?></h2>
                                             <p class="info"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-' ?></p>
                                          </div>
                                      </div>
                                  </label>
                                  </div>
                                <?php } ?>
                                <br>
                              </div>
                              <ul class="list-inline pull-right">
                                  <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                  <li><button type="button" class="btn btn-default reset-<?php echo $tbname; ?>">Reset</button></li>
                                  <li><button type="button" class="btn btn-primary next-step">Next</button></li>
                              </ul>
                          </div>
                          <div class="tab-pane" role="tabpanel" id="step8">
                              <h4>Cake</h4>
                              <br/>
                              <div class="row">                                
                                <?php 
                                  //menampilkan data mysqli
                                  include "koneksi.php";
                                  $tbname="cake";
                                  $no = 0;
                                  $modal=mysqli_query($connection, "SELECT * FROM $tbname ORDER BY name ASC");
                                  while($r=mysqli_fetch_array($modal)){
                                  $no++;       
                                ?>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                  <input type="radio" class="radio_item" value="<?php echo $r['id']; ?>" name="<?php echo $tbname ?>" id="<?php echo $tbname.$r['id']; ?>">
                                  <label class="label_item" for="<?php echo $tbname.$r['id']; ?>">
                                      <div class="hovereffect">
                                          <img class="img-responsive" src="<?php echo $r['image']; ?>" alt="">
                                          <div class="overlay">
                                             <h2><?php echo $r['name']; ?></h2>
                                             <p class="info"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-' ?></p>
                                          </div>
                                      </div>
                                  </label>
                                  </div>
                                <?php } ?>
                                <br>
                              </div>
                              <ul class="list-inline pull-right">
                                  <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                  <li><button type="button" class="btn btn-default reset-<?php echo $tbname; ?>">Reset</button></li>
                                  <li><button type="button" class="btn btn-primary next-step">Next</button></li>
                              </ul>
                          </div>
                          <div class="tab-pane" role="tabpanel" id="step9">
                              <h4>Souvenir</h4>
                              <br/>
                              <div class="row">                                
                                <?php 
                                  //menampilkan data mysqli
                                  include "koneksi.php";
                                  $tbname="souvenir";
                                  $no = 0;
                                  $modal=mysqli_query($connection, "SELECT * FROM $tbname ORDER BY name ASC");
                                  while($r=mysqli_fetch_array($modal)){
                                  $no++;       
                                ?>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                  <input type="radio" class="radio_item" value="<?php echo $r['id']; ?>" name="<?php echo $tbname ?>" id="<?php echo $tbname.$r['id']; ?>">
                                  <label class="label_item" for="<?php echo $tbname.$r['id']; ?>">
                                      <div class="hovereffect">
                                          <img class="img-responsive" src="<?php echo $r['image']; ?>" alt="">
                                          <div class="overlay">
                                             <h2><?php echo $r['name']; ?></h2>
                                             <p class="info"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-/buah' ?></p>
                                          </div>
                                      </div>
                                  </label>
                                  </div>
                                <?php } ?>
                                <br>
                              </div>
                              <ul class="list-inline pull-right">
                                  <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                  <li><button type="button" class="btn btn-default reset-<?php echo $tbname; ?>">Reset</button></li>
                                  <li><button type="button" class="btn btn-primary next-step">Next</button></li>
                              </ul>
                          </div>
                          <div class="tab-pane" role="tabpanel" id="step10">
                              <h4>Undangan</h4>
                              <br/>
                              <div class="row">                                
                                <?php 
                                  //menampilkan data mysqli
                                  include "koneksi.php";
                                  $tbname="undangan";
                                  $no = 0;
                                  $modal=mysqli_query($connection, "SELECT * FROM $tbname ORDER BY name ASC");
                                  while($r=mysqli_fetch_array($modal)){
                                  $no++;       
                                ?>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                  <input type="radio" class="radio_item" value="<?php echo $r['id']; ?>" name="<?php echo $tbname ?>" id="<?php echo $tbname.$r['id']; ?>">
                                  <label class="label_item" for="<?php echo $tbname.$r['id']; ?>">
                                      <div class="hovereffect">
                                          <img class="img-responsive" src="<?php echo $r['image']; ?>" alt="">
                                          <div class="overlay">
                                             <h2><?php echo $r['name']; ?></h2>
                                             <p class="info"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-/buah' ?></p>
                                          </div>
                                      </div>
                                  </label>
                                  </div>
                                <?php } ?>
                                <br>
                              </div>
                              <ul class="list-inline pull-right">
                                  <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                  <li><button type="button" class="btn btn-default reset-<?php echo $tbname; ?>">Reset</button></li>
                                  <li><button type="button" class="btn btn-primary next-step">Next</button></li>
                              </ul>
                          </div>
                          <div class="tab-pane" role="tabpanel" id="complete">
                              <h4>Informasi Tambahan </h4>
                              <br/>
                              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                  <label for="wedding_date">Tanggal Pernikahan</label>
                                  <div class='input-group date' id='myDatepicker2'>
                                      <input type='text' name="wedding_date" class="form-control" required/>
                                      <span class="input-group-addon">
                                         <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                                  </div>
                              </div>                

                              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label for="jumlah_undangan">Jumlah Kartu Undangan</label>
                                <input type="text" name="jumlah_undangan" class="form-control" value="0"/>
                              </div>

                              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label for="jumlah_catering">Jumlah Catering</label>
                                <input type="text" name="jumlah_catering" class="form-control" value="0"/>
                              </div>

                              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label for="jumlah_souvenir">Jumlah Souvenir</label>
                                <input type="text" name="jumlah_souvenir" class="form-control" value="0"/>
                              </div>
                              <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                <li><button type="submit" class="btn btn-primary">Finish</button></li>
                              </ul>
                          </div>
                          <div class="clearfix"></div>
                      </div>
                  </form>
              </div>
          </section>
         </div>


    </div>

  <script>
    $(document).ready(function(){
        $(".reset-service").click(function(){
            $('input[name=service]').attr('checked',false);
        });

        $(".reset-cake").click(function(){
            $('input[name=cake]').attr('checked',false);
        });

        $(".reset-catering").click(function(){
            $('input[name=catering]').attr('checked',false);
        });

        $(".reset-dekorasi").click(function(){
            $('input[name=dekorasi]').attr('checked',false);
        });

        $(".reset-dokumentasi").click(function(){
            $('input[name=dokumentasi]').attr('checked',false);
        });

        $(".reset-gedung").click(function(){
            $('input[name=gedung]').attr('checked',false);
        });

        $(".reset-hiburan").click(function(){
            $('input[name=hiburan]').attr('checked',false);
        });

        $(".reset-riasnbaju").click(function(){
            $('input[name=riasnbaju]').attr('checked',false);
        });

        $(".reset-souvenir").click(function(){
            $('input[name=souvenir]').attr('checked',false);
        });

        $(".reset-undangan").click(function(){
            $('input[name=undangan]').attr('checked',false);
        });
    });

    $('#myDatepicker2').datetimepicker({
        format: 'YYYY-MM-DD'
    });
  </script>
  </body>
  </html>
<?php } ?>