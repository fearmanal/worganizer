<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GGWP - Gal Gadot Wedding Planner</title>
    <meta name="viewport" content="width=device-width">
    

    <link rel="stylesheet" href="css/aos.css" />
    <link href="css/heroic-features.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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

  <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Catalog</a>
                    </li>
                    <li>
                        <a href="#">Order</a>
                    </li>
                    <li>
                        <a href="#">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<div class="container">
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
                 <p class="info"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-' ?></p>
              </div>
          </div>
      </label>
      </div>
    <?php } ?>
    <br>
  </div>

</div>

    <script src="http://thecodeplayer.com/uploads/js/prefixfree.js" type="text/javascript"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>
  </body>
</html>
