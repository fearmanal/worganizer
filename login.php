<?php  
  session_start(); 

  if(isset($_SESSION['ulogin'])) {
      header("location:order.php"); 
  }

    $error='';

    if (isset($_POST['submit'])) {
      if (empty($_POST['username']) || empty($_POST['password'])) {
          $error = "Username or Password is invalid";
      }
    }

    if (isset($_POST['username']) || isset($_POST['password'])) {   
      include "koneksi.php";
      $susername = stripslashes($_POST['username']);
      $spassword = md5($_POST['password']);
      $username = mysqli_real_escape_string($connection, $susername);
      $password = mysqli_real_escape_string($connection, $spassword);

      $query = mysqli_query($connection, "SELECT * FROM user WHERE password='$password' AND username='$username'");
      $srow = mysqli_num_rows($query);

      if ($srow == 1) {
          $sid = mysqli_fetch_array($query);
          $_SESSION['ulogin'] = $sid['id'];
          header("location: order.php");
      }
      else {
          echo "Username or Password is invalid";
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>W Organizer </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Custom Theme Style -->
    <link href="vendors/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="" enctype="multipart/form-data" method="POST">
              <h1>Login Form</h1>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <input class="btn btn-default submit" name="submit" type="submit" value="login"/>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="add_data.php" name="modal_popup" enctype="multipart/form-data" method="POST">               
                <h1>Create Account</h1>
                <div class="row">
                  <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <input type="text" name="username"  class="form-control" placeholder="Username" required/>
                  </div>

                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input type="password" name="password"  class="form-control" placeholder="Password" required/>
                  </div>

                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input type="password" name="xpassword"  class="form-control" placeholder="Confirm Password" required/>
                  </div>                

                  <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <input type="text" name="name"  class="form-control" placeholder="Nama"/>
                  </div>

                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="email"  class="form-control" placeholder="Email"/>
                  </div>

                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="phone"  class="form-control" placeholder="Phone"/>
                  </div>

                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <select name="gender" class="form-control">
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                  </div>                

                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      <div class='input-group date' id='myDatepicker2'>
                          <input type='text' name="birthdate" class="form-control" placeholder="Tanggal Lahir" required/>
                          <span class="input-group-addon">
                             <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                      </div>
                  </div>   

                  <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <input type="text" name="address"  class="form-control" placeholder="Alamat"/>
                  </div>                

                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="zip"  class="form-control" placeholder="Kode Pos"/>
                  </div>

                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="city"  class="form-control" placeholder="Kota"/>
                  </div>

                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="province"  class="form-control" placeholder="Provinsi"/>
                  </div>

                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="country"  class="form-control" placeholder="Negara"/>
                  </div>
                  
                  <div class="form-group col-md-5 col-sm-5 col-xs-12">
                    <input type="hidden" name="image" class="form-control" value="images/no-image.jpg" />
                  </div>

                    <input type="hidden" name="tbname"  class="form-control" value="user" />
                    <input type="hidden" name="type" class="form-control" value="User" /> 
                    <input type="hidden" name="status" class="form-control" value="Enable" />
                 

                </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
              </form>
          </section>
        </div>
      </div>
    </div>
    <script>
    $('#myDatepicker2').datetimepicker({
        format: 'YYYY-MM-DD'
    });
  </script>
  </body>
</html>
