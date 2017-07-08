<?php
    session_start(); // Starting Session
    $error='';


    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }

    include "koneksi.php";
    $susername = stripslashes($_POST['username']);
    $spassword = stripslashes($_POST['password']);
    $username = mysqli_real_escape_string($connection, $susername);
    $password = mysqli_real_escape_string($connection, $spassword);

    $query = mysqli_query($connection, "SELECT * FROM user WHERE password='$password' AND username='$username'");
    $srow = mysql_num_rows($query);

    if ($srow == 1) {
        $sid = mysqli_fetch_array($query);
        $_SESSION['ulogin'] = $sid['id'];
        header("location: index.php");
    }
    else {
        $error = "Username or Password is invalid";
        header("location: login.php");
    }
?>