<?php
	include "koneksi.php";
	$id=$_GET['id'];
	$tbname=$_GET['tbname'];
	$headername= 'location:index.php?menu='.$tbname;

    switch ($tbname) {
        case "cake":
            $modal=mysqli_query($connection, "Delete FROM $tbname WHERE id='$id'");
            header($headername);
            break;
        case "catering":
            $modal=mysqli_query($connection, "Delete FROM $tbname WHERE id='$id'");
            header($headername);
            break;
        case "dekorasi":
            $modal=mysqli_query($connection, "Delete FROM $tbname WHERE id='$id'");
            header($headername);
            break;
        case "dokumentasi":
            $modal=mysqli_query($connection, "Delete FROM $tbname WHERE id='$id'");
            header($headername);
            break;
        case "gedung":
            $modal=mysqli_query($connection, "Delete FROM $tbname WHERE id='$id'");
            header($headername);
            break;
        case "hiburan":
            $modal=mysqli_query($connection, "Delete FROM $tbname WHERE id='$id'");
            header($headername);
            break;
        case "orderwo":
            $modal=mysqli_query($connection, "Delete FROM $tbname WHERE id='$id'");
            header($headername);
            break;
        case "riasnbaju":
            $modal=mysqli_query($connection, "Delete FROM $tbname WHERE id='$id'");
            header($headername);
            break;
        case "service":
            $modal=mysqli_query($connection, "Delete FROM $tbname WHERE id='$id'");
            header($headername);
            break;
        case "souvenir":
            $modal=mysqli_query($connection, "Delete FROM $tbname WHERE id='$id'");
            header($headername);
            break;
        case "undangan":
            $modal=mysqli_query($connection, "Delete FROM $tbname WHERE id='$id'");
            header($headername);
            break;
        case "user":
            $modal=mysqli_query($connection, "Delete FROM $tbname WHERE id='$id'");
            header($headername);
            break;     
        default:
            echo "Error! Table Not Found";
    }

	
?>