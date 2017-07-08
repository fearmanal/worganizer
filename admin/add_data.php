<?php
include "koneksi.php";
  $name =  mysqli_real_escape_string($connection, $_POST['name']);
  $price = $_POST['price'];
  $description = mysqli_real_escape_string($connection, $_POST['description']);

if(isset($_FILES['image'])){
  $errors= array();
  $file_name = $_FILES['image']['name'];
  $file_size =$_FILES['image']['size'];
  $file_tmp =$_FILES['image']['tmp_name'];
  $file_type=$_FILES['image']['type'];
  $temp_ext=explode('.',$_FILES['image']['name']);
  $file_ext=strtolower(end($temp_ext));
  
  $expensions= array("jpeg","jpg","png");
  $imgdir = "media/gallery/";
  $imgmaxsize = 1024000;
  $low_name = strtolower($file_name);
  $new_name = str_replace(' ','-',$low_name);

  if(in_array($file_ext,$expensions)=== false){
     $errors[]="extension not allowed, please choose a JPEG or PNG file.";
  }
  
  if($file_size > $imgmaxsize){
     $errors[]='File size must be excately 1 MB';
  }
  
  if(empty($errors)==true){
     move_uploaded_file($file_tmp,"../".$imgdir.$new_name);
     $image = $imgdir.$new_name;
  }else{
     print_r($errors);
  }
}

$tbname= $_POST['tbname'];
$headername= 'location:index.php?menu='.$tbname;

switch ($tbname) {
    case "cake":
        mysqli_query($connection, "INSERT INTO $tbname (name, price, image, description, create_date) VALUES ('$name', '$price', '$image', '$description', NOW())");
		    header($headername);
        break;
    case "catering":
        mysqli_query($connection, "INSERT INTO $tbname (name, price, image, description, create_date) VALUES ('$name', '$price', '$image', '$description', NOW())");
        header($headername);
        break;
    case "dekorasi":
        mysqli_query($connection, "INSERT INTO $tbname (name, price, image, description, create_date) VALUES ('$name', '$price', '$image', '$description', NOW())");
        header($headername);
        break;
    case "dokumentasi":
        mysqli_query($connection, "INSERT INTO $tbname (name, price, image, description, create_date) VALUES ('$name', '$price', '$image', '$description', NOW())");
        header($headername);
        break;
    case "gedung":
        $address = mysqli_real_escape_string($connection, $_POST['address']);
        mysqli_query($connection, "INSERT INTO $tbname (name, price, image, address, description, create_date) VALUES ('$name', '$price', '$image', '$address', '$description', NOW())");
        header($headername);
        break;
    case "hiburan":
        mysqli_query($connection, "INSERT INTO $tbname (name, price, image, description, create_date) VALUES ('$name', '$price', '$image', '$description', NOW())");
        header($headername);
        break;
    case "orderwo":
        mysqli_query($connection, "INSERT INTO $tbname (name, price, image, description, create_date) VALUES ('$name', '$price', '$image', '$description', NOW())");
        header($headername);
        break;
    case "riasnbaju":
        mysqli_query($connection, "INSERT INTO $tbname (name, price, image, description, create_date) VALUES ('$name', '$price', '$image', '$description', NOW())");
        header($headername);
        break;
    case "service":
        mysqli_query($connection, "INSERT INTO $tbname (name, price, image, description, create_date) VALUES ('$name', '$price', '$image', '$description', NOW())");
        header($headername);
        break;
    case "souvenir":
        mysqli_query($connection, "INSERT INTO $tbname (name, price, image, description, create_date) VALUES ('$name', '$price', '$image', '$description', NOW())");
        header($headername);
        break;
    case "undangan":
        mysqli_query($connection, "INSERT INTO $tbname (name, price, image, description, create_date) VALUES ('$name', '$price', '$image', '$description', NOW())");
        header($headername);
        break;       
    case "user":
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
        $gender = $_POST['gender'];
        $create_date = $_POST['create_date'];

        mysqli_query($connection, "INSERT INTO $tbname (username, password, email, type, status, name, birthdate, address, zip, city, province, country, phone, gender, image, create_date) VALUES ('$username', '$password', '$email', '$type', '$status', '$name', '$birthdate', '$address', '$zip', '$city', '$province', '$country', '$phone', '$gender', '$image', NOW())");
        header($headername);
        break;
    default:
        echo "Error! Table Not Found";
}
?>