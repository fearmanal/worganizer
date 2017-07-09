<?php
	include "koneksi.php";
	$wedding_date = $_POST['wedding_date'];
	$id_user = "NULL";
	$id_cake = "NULL";
	$id_catering = "NULL";
	$id_dekorasi = "NULL";
	$id_dokumentasi = "NULL";
	$id_gedung = "NULL";
	$id_hiburan = "NULL";
	$id_riasnbaju = "NULL";
	$id_service = "NULL";
	$id_souvenir = "NULL";
	$id_undangan = "NULL";
	$harga_cake = "NULL";
	$harga_catering = "NULL";
	$harga_dekorasi = "NULL";
	$harga_dokumentasi = "NULL";
	$harga_gedung = "NULL";
	$harga_hiburan = "NULL";
	$harga_riasnbaju = "NULL";
	$harga_service = "NULL";
	$harga_souvenir = "NULL";
	$harga_undangan = "NULL";
	$jumlah_catering = "NULL";
	$jumlah_souvenir = "NULL";
	$jumlah_undangan = "NULL";
	$total = "NULL";

	if (isset($_POST['id_user'])) {
		$id_user = $_POST['id_user'];
	}

	if (isset($_POST['id_cake'])) {
		$id_cake = $_POST['id_cake'];
	}

	if (isset($_POST['id_catering'])) {
		$id_catering = $_POST['id_catering'];
	}

	if (isset($_POST['id_dekorasi'])) {
		$id_dekorasi = $_POST['id_dekorasi'];
	}

	if (isset($_POST['id_dokumentasi'])) {
		$id_dokumentasi = $_POST['id_dokumentasi'];
	}

	if (isset($_POST['id_gedung'])) {
		$id_gedung = $_POST['id_gedung'];
	}

	if (isset($_POST['id_hiburan'])) {
		$id_hiburan = $_POST['id_hiburan'];
	}

	if (isset($_POST['id_riasnbaju'])) {
		$id_riasnbaju = $_POST['id_riasnbaju'];
	}

	if (isset($_POST['id_service'])) {
		$id_service = $_POST['id_service'];
	}

	if (isset($_POST['id_souvenir'])) {
		$id_souvenir = $_POST['id_souvenir'];
	}

	if (isset($_POST['id_undangan'])) {
		$id_undangan = $_POST['id_undangan'];
	}

	if (isset($_POST['harga_cake'])) {
		$harga_cake = $_POST['harga_cake'];
	}

	if (isset($_POST['harga_catering'])) {
		$harga_catering = $_POST['harga_catering'];
	}

	if (isset($_POST['harga_dekorasi'])) {
		$harga_dekorasi = $_POST['harga_dekorasi'];
	}

	if (isset($_POST['harga_dokumentasi'])) {
		$harga_dokumentasi = $_POST['harga_dokumentasi'];
	}

	if (isset($_POST['harga_gedung'])) {
		$harga_gedung = $_POST['harga_gedung'];
	}

	if (isset($_POST['harga_hiburan'])) {
		$harga_hiburan = $_POST['harga_hiburan'];
	}

	if (isset($_POST['harga_riasnbaju'])) {
		$harga_riasnbaju = $_POST['harga_riasnbaju'];
	}

	if (isset($_POST['harga_service'])) {
		$harga_service = $_POST['harga_service'];
	}

	if (isset($_POST['harga_souvenir'])) {
		$harga_souvenir = $_POST['harga_souvenir'];
	}

	if (isset($_POST['harga_undangan'])) {
		$harga_undangan = $_POST['harga_undangan'];
	}

	if (isset($_POST['jumlah_catering'])) {
		$jumlah_catering = $_POST['jumlah_catering'];
	}

	if (isset($_POST['jumlah_souvenir'])) {
		$jumlah_souvenir = $_POST['jumlah_souvenir'];
	}

	if (isset($_POST['jumlah_undangan'])) {
		$jumlah_undangan = $_POST['jumlah_undangan'];
	}

	if (isset($_POST['total'])) {
		$total = $_POST['total'];
	}

	$execute = mysqli_query($connection, "INSERT INTO wodb.order (create_date, wedding_date, id_user, id_cake, id_catering, id_dekorasi, id_dokumentasi, id_gedung, id_hiburan, id_riasnbaju, id_service, id_souvenir, id_undangan, harga_cake, harga_catering, harga_dekorasi, harga_dokumentasi, harga_gedung, harga_hiburan, harga_riasnbaju, harga_service, harga_souvenir, harga_undangan, jumlah_catering, jumlah_souvenir, jumlah_undangan, total) VALUES (NOW(), '$wedding_date', $id_user, $id_cake, $id_catering, $id_dekorasi, $id_dokumentasi, $id_gedung, $id_hiburan, $id_riasnbaju, $id_service, $id_souvenir, $id_undangan, $harga_cake, $harga_catering, $harga_dekorasi, $harga_dokumentasi, $harga_gedung, $harga_hiburan, $harga_riasnbaju, $harga_service, $harga_souvenir, $harga_undangan, $jumlah_catering, $jumlah_souvenir, $jumlah_undangan, $total)") or die($connection);
	//$execute = mysqli_query($connection, "INSERT INTO order (create_date, wedding_date, id_user, id_cake, id_catering, id_dekorasi, id_dokumentasi, id_gedung, id_hiburan, id_riasnbaju, id_service, id_souvenir, id_undangan, harga_cake, harga_catering, harga_dekorasi, harga_dokumentasi, harga_gedung, harga_hiburan, harga_riasnbaju, harga_service, harga_souvenir, harga_undangan, jumlah_catering, jumlah_souvenir, jumlah_undangan, total) VALUES (NOW(), '$wedding_date', '$id_user', '$id_cake', '$id_catering', '$id_dekorasi', '$id_dokumentasi', '$id_gedung', '$id_hiburan', '$id_riasnbaju', '$id_service', '$id_souvenir', '$id_undangan', '$harga_cake', '$harga_catering', '$harga_dekorasi', '$harga_dokumentasi', '$harga_gedung', '$harga_hiburan', '$harga_riasnbaju', '$harga_service', '$harga_souvenir', '$harga_undangan', '$jumlah_catering', '$jumlah_souvenir', '$jumlah_undangan', '$total')");
	if ($execute) {
		echo "Success!<br> <p>Silakan Transfer bla.. bla.. bla.. bla..</p>";
		echo "Nanti menampilkan invoice";
	}
	else {
		echo "Fail";
	}
?>