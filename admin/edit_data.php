<?php
	include "koneksi.php";
	$id = $_POST['id'];
	$name =  mysqli_real_escape_string($connection, $_POST['name']);
	$price = $_POST['price'];
	$description = mysqli_real_escape_string($connection, $_POST['description']);
    $image = $_POST['eximage'];

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
            $modal=mysqli_query($connection, "UPDATE $tbname SET name = '$name', price = '$price', image = '$image', description = '$description', create_date = NOW() WHERE id = '$id'");
		        header($headername);
            break;
        case "catering":
            $modal=mysqli_query($connection, "UPDATE $tbname SET name = '$name', price = '$price', image = '$image', description = '$description', create_date = NOW() WHERE id = '$id'");
            header($headername);
            break;
        case "dekorasi":
            $modal=mysqli_query($connection, "UPDATE $tbname SET name = '$name', price = '$price', image = '$image', description = '$description', create_date = NOW() WHERE id = '$id'");
            header($headername);
            break;
        case "dokumentasi":
            $modal=mysqli_query($connection, "UPDATE $tbname SET name = '$name', price = '$price', image = '$image', description = '$description', create_date = NOW() WHERE id = '$id'");
            header($headername);
            break;
        case "gedung":
            $address = mysqli_real_escape_string($connection, $_POST['address']);
            $modal=mysqli_query($connection, "UPDATE $tbname SET name = '$name', price = '$price', image = '$image', address = '$address', description = '$description', create_date = NOW() WHERE id = '$id'");
            header($headername);
            break;
        case "hiburan":
            $modal=mysqli_query($connection, "UPDATE $tbname SET name = '$name', price = '$price', image = '$image', description = '$description', create_date = NOW() WHERE id = '$id'");
            header($headername);
            break;
        case "orderwo":
            $modal=mysqli_query($connection, "UPDATE $tbname SET name = '$name', price = '$price', image = '$image', description = '$description', create_date = NOW() WHERE id = '$id'");
            header($headername);
            break;
        case "riasnbaju":
            $modal=mysqli_query($connection, "UPDATE $tbname SET name = '$name', price = '$price', image = '$image', description = '$description', create_date = NOW() WHERE id = '$id'");
            header($headername);
            break;
        case "service":
            $modal=mysqli_query($connection, "UPDATE $tbname SET name = '$name', price = '$price', image = '$image', description = '$description', create_date = NOW() WHERE id = '$id'");
            header($headername);
            break;
        case "souvenir":
            $modal=mysqli_query($connection, "UPDATE $tbname SET name = '$name', price = '$price', image = '$image', description = '$description', create_date = NOW() WHERE id = '$id'");
            header($headername);
            break;
        case "undangan":
            $modal=mysqli_query($connection, "UPDATE $tbname SET name = '$name', price = '$price', image = '$image', description = '$description', create_date = NOW() WHERE id = '$id'");
            header($headername);
            break;      
        default:
            echo "Error! Table Not Found";
    }

?>