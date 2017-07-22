<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db="10114923_WeddingOrganizer";
	//mysql_connect($host,$user,$pass) or die("Error Connect DB ".mysql_error());
	//mysql_select_db("dbphp") or die("Database Tidak Ada. ".mysql_error());
	$connection = mysqli_connect($host, $user, $pass, $db);
?>