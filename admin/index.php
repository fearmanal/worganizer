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

    <title>W Organizer | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../vendors/build/css/custom.min.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Custom Style -->
    <link href="../css/admin-style.css" rel="stylesheet">
    
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><span>GGWP</span></a>
            </div>

            <div class="clearfix"></div>

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li class="active"><a href="index.php?menu=dashboard"><i class="fa fa-home"></i> Home </a></li>
                  <li><a href="index.php?menu=order"><i class="fa fa-shopping-cart"></i> Order </a></li>
                  <li><a><i class="fa fa-edit"></i> Manage Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?menu=cake">Cake</a></li>
                      <li><a href="index.php?menu=catering">Catering</a></li>
                      <li><a href="index.php?menu=dekorasi">Dekorasi</a></li>
                      <li><a href="index.php?menu=dokumentasi">Dokumentasi</a></li>
                      <li><a href="index.php?menu=gedung">Gedung</a></li>
                      <li><a href="index.php?menu=hiburan">Hiburan</a></li>
                      <li><a href="index.php?menu=riasnbaju">Baju &amp; Rias</a></li>
                      <li><a href="index.php?menu=service">Service</a></li>
                      <li><a href="index.php?menu=souvenir">Souvenir</a></li>
                      <li><a href="index.php?menu=undangan">Undangan</a></li>
                    </ul>
                  </li>
                  <li><a href="index.php?menu=user"><i class="fa fa-users"></i> Manage User </a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <?php
              
              if (isset($_GET['menu'])) {
                $menu = $_GET['menu'];
                switch ($menu) {
                    case "dashboard":
                        include "$menu.php";
                        break;
                    case "order":
                        include "$menu.php";
                        break;
                    case "cake":
                        include "$menu.php";
                        break;
                    case "catering":
                        include "$menu.php";
                        break;
                    case "dekorasi":
                        include "$menu.php";
                        break;
                    case "dokumentasi":
                        include "$menu.php";
                        break;
                    case "gedung":
                        include "$menu.php";
                        break;
                    case "hiburan":
                        include "$menu.php";
                        break;
                    case "orderwo":
                        include "$menu.php";
                        break;
                    case "riasnbaju":
                        include "$menu.php";
                        break;
                    case "service":
                        include "$menu.php";
                        break;
                    case "souvenir":
                        include "$menu.php";
                        break;
                    case "undangan":
                        include "$menu.php";
                        break;
                    case "user":
                        include "$menu.php";
                        break;        
                    default:
                        echo "Error! Page Not Found";
                        echo "<br>".$_SESSION['ulogin'];
                }
              }
              else {
                include "dashboard.php";
              } 
            ?>

          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gal Gadot Wedding Planner @2017
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->        


      </div>
    </div>


    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../vendors/build/js/custom.min.js"></script>
  </body>
</html>

<?php } ?>