

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GGWP | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../vendors/build/css/custom.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
  </head>

  <body class="login">
  <div>
<?php  
  session_start(); 

  if(isset($_SESSION['ulogin'])) {
      header("location:index.php"); 
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
      $sid = mysqli_fetch_array($query);

      if ($srow == 1 && $sid['type']=='Admin') {          
          $_SESSION['ulogin'] = $sid['id'];
          header("location: index.php");
      }
      else {
          echo "<div class='login_msg'>Username or Password is invalid</div>";
      }
    }
?>
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="" enctype="multipart/form-data" method="POST">
              <h1>GGWP Admin</h1>
              <div class="form-group col-md-12 col-sm-12 col-xs-12">
                <input type="text" name="username" class="form-control" placeholder="Username" required="" />
              </div>
              <div class="form-group col-md-12 col-sm-12 col-xs-12">
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <input class="btn btn-default submit login-admin" name="submit" type="submit" value="login"/>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>
