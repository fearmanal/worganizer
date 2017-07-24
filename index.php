<?php   
   session_start(); 
?>
<!doctype html>
<html lang="en">
   <head>
      <!-- Character set configuration -->
      <meta charset="UTF-8">
      <title>GGWP - Gal Gadot Wedding Planner</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Viewport configuration, scaling options -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- CSS Stylesheet -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/demo-2/top-navbar-2.css" rel="stylesheet">
      <!-- Font Awesome icon -->
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link href="css/imagehover.min.css" rel="stylesheet">
      <link href="css/aos.css" rel="stylesheet">
      <!-- Google web font  -->
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,greek' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
       <style>
         .judul {
           font-family: 'Tangerine', serif;
           font-size: 48px;
           text-shadow: 4px 4px 4px #aaa;
         }
       </style>

   </head>
   <body class="demo">
      <div class="my-nav">
         <div class="navbar navbar-custom sticky mnav" role="navigation">
            <div class="container">
               <!-- Navbar-header -->
               <div class="navbar-header mnav">
                  <!-- Responsive menu button -->
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <i class="fa fa-bars"></i></button>
                  <!-- LOGO --> 
                  <a class="navbar-brand logo mnav" href="#"> <i class="fa fa-long-arrow-up"></i> GGWP <i class="fa fa-long-arrow-down"></i> </a> 
               </div>
               <!-- end navbar-header --> 
               <!-- menu -->
               <div class="navbar-collapse collapse  mnav" id="navbar-menu  mnav">
                  <!-- Navbar left -->
                  <ul class="nav navbar-nav nav-custom-left  mnav">
                     <li class="active  mnav"> <a href="index.php">Home</a> </li>
                     <li> <a href="#catalog">Catalog</a> </li>
                     <li> <a href="order.php">Order</a> </li>
                  </ul>
                  <!-- Navbar right -->
                  <ul class="nav navbar-nav navbar-right  mnav">
                  <?php
                        if(!isset($_SESSION['ulogin'])) {
                           echo "<li> <a href='login.php'>Login</a> </li>"; 
                        }
                        else {
                           echo "<li> <a href='logout.php'>Logout</a> </li>"; 
                        }
                  ?>
                     
                  </ul>
               </div>
               <!--/Menu --> 
            </div>
            <!-- end container --> 
         </div>
      </div>
      <!-- Intro Header -->
      <header>
         <div  align="center"><img src="images/home.jpg" class="img-responsive"></div>
         <br>
         <div id="catalog" >
            <div class="container">
               <div class="judul">
                  <center>
                     <font size="48">Our Catalog</font>
                  </center>
                  <br>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="aos-item" data-aos="fade-up">
                        <figure class="imghvr-fade">
                            <img src="image/service.png" width="300" height="200">
                            <figcaption>
                              <center>
                                 <br>
                                 <h2>Service</h2>
                              </center>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="aos-item" data-aos="fade-up">
                        <figure class="imghvr-fade">
                            <img src="image/buffet.jpg" width="300" height="200">
                            <figcaption>
                               <center>
                                 <br>
                                 <h2>Buffet</h2>
                              </center>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="aos-item" data-aos="fade-up">
                        <figure class="imghvr-fade">
                            <img src="image/cinderella.png" width="300" height="200">
                            <figcaption>
                              <center>
                                 <br>
                                 <h2>Cake</h2>
                              </center>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                     </div>
                  </div>
                  </div>
               </div>

               <hr>
            </div>
            <div class="container">
               <div class="judul">
                  <br>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="aos-item" data-aos="fade-up">
                        <figure class="imghvr-fade">
                            <img src="image/dekorasi.jpg" width="300" height="200">
                            <figcaption>
                              <center>
                                 <br>
                                 <h2>Dekorasi</h2>
                              </center>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="aos-item" data-aos="fade-up">
                        <figure class="imghvr-fade">
                            <img src="image/dokumentasi.jpg" width="300" height="200">
                            <figcaption>
                               <center>
                                 <br>
                                 <h2>Dokumentasi</h2>
                              </center>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="aos-item" data-aos="fade-up">
                        <figure class="imghvr-fade">
                            <img src="image/gedung.jpeg" width="300" height="200">
                            <figcaption>
                               <center>
                                 <br>
                                 <h2>Gedung</h2>
                              </center>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                     </div>
                  </div>
                  </div>
               </div>
               
               <hr>
            </div>
            <div class="container">
               <div class="judul">
                  <br>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="aos-item" data-aos="fade-up">
                        <figure class="imghvr-fade">
                            <img src="image/dangdut.jpg" width="300" height="200">
                            <figcaption>
                               <center>
                                 <br>
                                 <h2>Dangdut</h2>
                              </center>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="aos-item" data-aos="fade-up">
                        <figure class="imghvr-fade">
                            <img src="image/souvenir.jpg" width="300" height="200">
                            <figcaption>
                               <center>
                                 <br>
                                 <h2>Souvenir</h2>
                              </center>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="aos-item" data-aos="fade-up">
                        <figure class="imghvr-fade">
                            <img src="image/mail.jpg" width="300" height="200">
                            <figcaption>
                               <center>
                                 <br>
                                 <h2>Undangan</h2>
                              </center>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                     </div>
                  </div>
                  </div>
               </div>
               
               <hr>
            </div>
               <hr>
            </div>
         </div>
      </header>
      <!--  Latest jQuery Plugins -->
      <script src="js/jquery.min.js"></script> <!-- Include all compiled plugins (below), or include individual files as needed --> 
      <script src="js/bootstrap.min.js"></script>
      <script src="js/aos.js"></script> 
      <script>
         AOS.init({
           easing: 'ease-in-out-sine'
         });
       </script>
      <!-- Mynav Bar Script --> 
      <script src="js/nav-js-1/jquery.sticky.js"></script> 
      <script src="js/nav-js-1/jquery.app.js"></script>
      <script src="js/smooth-scroll.js"></script>
   </body>
</html>