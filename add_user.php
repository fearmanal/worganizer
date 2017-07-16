<?php
include "koneksi.php";



$tbname= $_POST['tbname'];
$headername= 'location:success_reg.php';

$username = mysqli_real_escape_string($connection, $_POST['username']);
$password = md5($_POST['password']);
$email = mysqli_real_escape_string($connection, $_POST['email']);
$type = $_POST['type'];
$status = $_POST['status'];
$name = mysqli_real_escape_string($connection, $_POST['name']);
$birthdate = mysqli_real_escape_string($connection, $_POST['birthdate']);
$address = mysqli_real_escape_string($connection, $_POST['address']);
$zip = $_POST['zip'];
$city = mysqli_real_escape_string($connection, $_POST['city']);
$province = mysqli_real_escape_string($connection, $_POST['province']);
$country = mysqli_real_escape_string($connection, $_POST['country']);
$phone = mysqli_real_escape_string($connection, $_POST['phone']);
$image = mysqli_real_escape_string($connection, $_POST['image']);
$gender = $_POST['gender'];

$query = mysqli_query($connection, "INSERT INTO $tbname (username, password, email, type, status, name, birthdate, address, zip, city, province, country, phone, gender, image, create_date) VALUES ('$username', '$password', '$email', '$type', '$status', '$name', '$birthdate', '$address', '$zip', '$city', '$province', '$country', '$phone', '$gender', '$image', NOW())");
if ($query){
  echo "Success";
}
?>