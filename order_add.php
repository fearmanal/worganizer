<?php
	include "koneksi.php";
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
	
	$rcake = "";
	$rcatering = "";
	$rdekorasi = "";
	$rdokumentasi = "";
	$rgedung = "";
	$rhiburan = "";
	$rriasnbaju = "";
	$rservice = "";
	$rsouvenir = "";
	$rundangan = "";

	if (isset($_POST['id_user'])) {
		$id_user = $_POST['id_user'];
		$wedding_date = $_POST['wedding_date'];
		$user_name = $_POST['user_name'];
		$user_address = $_POST['user_address'];
		$user_cityzip = $_POST['user_city'].', '.$_POST['user_zip'];
	}

	if (isset($_POST['id_cake'])) {
		$id_cake = $_POST['id_cake'];
		$nama_cake = $_POST['nama_cake'];
		$idr_cake = 'Rp. '.number_format($_POST['harga_cake'],0,'','.').',-';
		$rcake = "
			<tr>
				<td>Cake</td>
				<td>".$nama_cake."</td>
				<td style='text-align: right;'>".$idr_cake."</td>
				<td class='text-center'>1</td>
				<td style='text-align: right;'>".$idr_cake."</td>
			</tr>
		";
	}

	if (isset($_POST['id_catering'])) {
		$id_catering = $_POST['id_catering'];
		$nama_catering = $_POST['nama_catering'];
		$qty_catering = $_POST['jumlah_catering'];
		$subtotal_catering =  'Rp. '.number_format($_POST['subtotal_catering'],0,'','.').',-';
		$idr_catering = 'Rp. '.number_format($_POST['harga_catering'],0,'','.').',-';
		$rcatering = "
			<tr>
				<td>catering</td>
				<td>".$nama_catering."</td>
				<td style='text-align: right;'>".$idr_catering."</td>
				<td class='text-center'>".$qty_catering ."</td>
				<td style='text-align: right;'>".$subtotal_catering."</td>
			</tr>
		";
	}

	if (isset($_POST['id_dekorasi'])) {
		$id_dekorasi = $_POST['id_dekorasi'];
		$nama_dekorasi = $_POST['nama_dekorasi'];
		$idr_dekorasi = 'Rp. '.number_format($_POST['harga_dekorasi'],0,'','.').',-';
		$rdekorasi = "
			<tr>
				<td>dekorasi</td>
				<td>".$nama_dekorasi."</td>
				<td style='text-align: right;'>".$idr_dekorasi."</td>
				<td class='text-center'>1</td>
				<td style='text-align: right;'>".$idr_dekorasi."</td>
			</tr>
		";
	}

	if (isset($_POST['id_dokumentasi'])) {
		$id_dokumentasi = $_POST['id_dokumentasi'];
		$nama_dokumentasi = $_POST['nama_dokumentasi'];
		$idr_dokumentasi = 'Rp. '.number_format($_POST['harga_dokumentasi'],0,'','.').',-';
		$rdokumentasi = "
			<tr>
				<td>dokumentasi</td>
				<td>".$nama_dokumentasi."</td>
				<td style='text-align: right;'>".$idr_dokumentasi."</td>
				<td class='text-center'>1</td>
				<td style='text-align: right;'>".$idr_dokumentasi."</td>
			</tr>
		";
	}

	if (isset($_POST['id_gedung'])) {
		$id_gedung = $_POST['id_gedung'];
		$nama_gedung = $_POST['nama_gedung'];
		$idr_gedung = 'Rp. '.number_format($_POST['harga_gedung'],0,'','.').',-';
		$rgedung = "
			<tr>
				<td>gedung</td>
				<td>".$nama_gedung."</td>
				<td style='text-align: right;'>".$idr_gedung."</td>
				<td class='text-center'>1</td>
				<td style='text-align: right;'>".$idr_gedung."</td>
			</tr>
		";
	}

	if (isset($_POST['id_hiburan'])) {
		$id_hiburan = $_POST['id_hiburan'];
		$nama_hiburan = $_POST['nama_hiburan'];
		$idr_hiburan = 'Rp. '.number_format($_POST['harga_hiburan'],0,'','.').',-';
		$rhiburan = "
			<tr>
				<td>hiburan</td>
				<td>".$nama_hiburan."</td>
				<td style='text-align: right;'>".$idr_hiburan."</td>
				<td class='text-center'>1</td>
				<td style='text-align: right;'>".$idr_hiburan."</td>
			</tr>
		";
	}

	if (isset($_POST['id_riasnbaju'])) {
		$id_riasnbaju = $_POST['id_riasnbaju'];
		$nama_riasnbaju = $_POST['nama_riasnbaju'];
		$idr_riasnbaju = 'Rp. '.number_format($_POST['harga_riasnbaju'],0,'','.').',-';
		$rriasnbaju = "
			<tr>
				<td>riasnbaju</td>
				<td>".$nama_riasnbaju."</td>
				<td style='text-align: right;'>".$idr_riasnbaju."</td>
				<td class='text-center'>1</td>
				<td style='text-align: right;'>".$idr_riasnbaju."</td>
			</tr>
		";
	}

	if (isset($_POST['id_service'])) {
		$id_service = $_POST['id_service'];
		$nama_service = $_POST['nama_service'];
		$idr_service = 'Rp. '.number_format($_POST['harga_service'],0,'','.').',-';
		$rservice = "
			<tr>
				<td>service</td>
				<td>".$nama_service."</td>
				<td style='text-align: right;'>".$idr_service."</td>
				<td class='text-center'>1</td>
				<td style='text-align: right;'>".$idr_service."</td>
			</tr>
		";
	}

	if (isset($_POST['id_souvenir'])) {
		$id_souvenir = $_POST['id_souvenir'];
		$nama_souvenir = $_POST['nama_souvenir'];
		$qty_souvenir = $_POST['jumlah_souvenir'];
		$subtotal_souvenir =  'Rp. '.number_format($_POST['subtotal_souvenir'],0,'','.').',-';
		$idr_souvenir = 'Rp. '.number_format($_POST['harga_souvenir'],0,'','.').',-';
		$rsouvenir = "
			<tr>
				<td>souvenir</td>
				<td>".$nama_souvenir."</td>
				<td style='text-align: right;'>".$idr_souvenir."</td>
				<td class='text-center'>".$qty_souvenir ."</td>
				<td style='text-align: right;'>".$subtotal_souvenir."</td>
			</tr>
		";
	}

	if (isset($_POST['id_undangan'])) {
		$id_undangan = $_POST['id_undangan'];
		$nama_undangan = $_POST['nama_undangan'];
		$qty_undangan = $_POST['jumlah_undangan'];
		$subtotal_undangan =  'Rp. '.number_format($_POST['subtotal_undangan'],0,'','.').',-';
		$idr_undangan = 'Rp. '.number_format($_POST['harga_undangan'],0,'','.').',-';
		$rundangan = "
			<tr>
				<td>undangan</td>
				<td>".$nama_undangan."</td>
				<td style='text-align: right;'>".$idr_undangan."</td>
				<td class='text-center'>".$qty_undangan ."</td>
				<td style='text-align: right;'>".$subtotal_undangan."</td>
			</tr>
		";
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
		$idr_total = 'Rp. '.number_format($_POST['total'],0,'','.').',-';
		$rtotal = "
			<tr>
				<td class='thick-line'></td>
                <td class='thick-line'></td>
				<td class='thick-line'></td>
				<td class='thick-line text-center'><strong>Total</strong></td>
				<td class='thick-line text-right'>".$idr_total."</td>				
			</tr>";
	}

	$execute = mysqli_query($connection, "INSERT INTO $db.order (create_date, wedding_date, id_user, id_cake, id_catering, id_dekorasi, id_dokumentasi, id_gedung, id_hiburan, id_riasnbaju, id_service, id_souvenir, id_undangan, harga_cake, harga_catering, harga_dekorasi, harga_dokumentasi, harga_gedung, harga_hiburan, harga_riasnbaju, harga_service, harga_souvenir, harga_undangan, jumlah_catering, jumlah_souvenir, jumlah_undangan, total) VALUES (NOW(), '$wedding_date', $id_user, $id_cake, $id_catering, $id_dekorasi, $id_dokumentasi, $id_gedung, $id_hiburan, $id_riasnbaju, $id_service, $id_souvenir, $id_undangan, $harga_cake, $harga_catering, $harga_dekorasi, $harga_dokumentasi, $harga_gedung, $harga_hiburan, $harga_riasnbaju, $harga_service, $harga_souvenir, $harga_undangan, $jumlah_catering, $jumlah_souvenir, $jumlah_undangan, $total)") or die($connection);
	//$execute = mysqli_query($connection, "INSERT INTO order (create_date, wedding_date, id_user, id_cake, id_catering, id_dekorasi, id_dokumentasi, id_gedung, id_hiburan, id_riasnbaju, id_service, id_souvenir, id_undangan, harga_cake, harga_catering, harga_dekorasi, harga_dokumentasi, harga_gedung, harga_hiburan, harga_riasnbaju, harga_service, harga_souvenir, harga_undangan, jumlah_catering, jumlah_souvenir, jumlah_undangan, total) VALUES (NOW(), '$wedding_date', '$id_user', '$id_cake', '$id_catering', '$id_dekorasi', '$id_dokumentasi', '$id_gedung', '$id_hiburan', '$id_riasnbaju', '$id_service', '$id_souvenir', '$id_undangan', '$harga_cake', '$harga_catering', '$harga_dekorasi', '$harga_dokumentasi', '$harga_gedung', '$harga_hiburan', '$harga_riasnbaju', '$harga_service', '$harga_souvenir', '$harga_undangan', '$jumlah_catering', '$jumlah_souvenir', '$jumlah_undangan', '$total')");
	if ($execute) {
		$last_id = mysqli_insert_id($connection);
		$modal2=mysqli_query($connection, "SELECT * FROM $db.order WHERE id = '$last_id'");
		while($r=mysqli_fetch_array($modal2)){
			$order_date = $r['create_date'];
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

	    <title>GGWP - Gal Gadot Wedding Planner</title>

	    <!-- Bootstrap -->
	    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	    <!-- Font Awesome -->
	    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	    <!-- Custom -->
	    <link href="css/order.css" rel="stylesheet">
	    <!-- CSS Stylesheet -->
	    <link href="css/demo-2/top-navbar-2.css" rel="stylesheet">
	    <!-- Google web font  -->
	    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,greek' rel='stylesheet' type='text/css'>
	    <!-- Font Awesome icon -->
	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    
	    <!-- jQuery -->
	    <script src="vendors/jquery/dist/jquery.min.js"></script>
	    <!-- Bootstrap -->
	    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	    <!-- Custom -->
	    <script src="js/order.js"></script>

	  </head>
	  <body>
      <div class="my-nav">
         <div class="navbar navbar-custom sticky mnav" role="navigation">
            <div class="container">
               <!-- Navbar-header -->
               <div class="navbar-header mnav">
                  <!-- Responsive menu button -->
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <i class="fa fa-bars"></i></button>
                  <!-- LOGO --> 
                  <a class="navbar-brand logo mnav" href="#">GGWP</a> 
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
                     <li> <a href="logout.php">Logout</a> </li>
                  </ul>
               </div>
               <!--/Menu --> 
            </div>
            <!-- end container --> 
         </div>
      </div>

	<div class="container">
	    <div class="order-success">
	        <center>
	        <h1>Success!</h1>
	        <p>Order berhasil dilakukan, silakan lakukan pembayaran sesuai invoice berikut:</p>
	        </center>
	    </div>
	    <div class="order-invoice">
	        <div class="row">
	            <div class="col-xs-12">
	        		<div class="invoice-title">
	        			<h2>Invoice</h2><h3 class="pull-right">Order # <?php echo $last_id; ?></h3>
	        		</div>
	        		<hr>
	        		<div class="row">
	        			<div class="col-xs-6">
	        				<address>
	        				<strong>Billed To:</strong><br>
	        					<?php echo $user_name; ?><br>
	        					<?php echo $user_address; ?><br>
	        					<?php echo $user_cityzip; ?>
	        				</address>
	        			</div>
	        			<div class="col-xs-6 text-right">
	                        <address>
	                            <strong>Order Date:</strong><br>
	                            <?php $phpdate = strtotime( $order_date ); echo date( 'F d, Y', $phpdate ); ?><br>
	                        </address>
	                        <address>
	                            <strong>Wedding Date:</strong><br>
	                            <?php $phpdate = strtotime( $wedding_date ); echo date( 'F d, Y', $phpdate ); ?><br>
	                        </address>
	                        <address>
	                            <strong>Payment Due:</strong><br>
	                            <?php echo date('F d, Y', strtotime($order_date. ' + 3 days')); ?><br>
	                        </address>
	                    </div>
	        		</div>
	        		<div class="row">
	        			<div class="col-xs-6">
	        				<address>
	        					<strong>Payment Method:</strong><br>
	        					Bank Transfer *********14<br>
	        				    sales@ggwp.co.id
	        				</address>
	        			</div>
	        			
	        		</div>
	        	</div>
	        </div>
	        
	        <div class="row">
	        	<div class="col-md-12">
	        		<div class="panel panel-default">
	        			<div class="panel-heading">
	        				<h3 class="panel-title"><strong>Order summary</strong></h3>
	        			</div>
	        			<div class="panel-body">
	        				<div class="table-responsive">
	        					<table class="table table-condensed">
	        						<thead>
	                                    <tr>
	                                        <td></td>
	                                        <td><strong>Nama Produk</strong></td>
	            							<td class="text-center"><strong>Harga</strong></td>
	            							<td class="text-center"><strong>Jumlah</strong></td>
	            							<td class="text-right"><strong>Subtotal</strong></td>
	                                    </tr>
	        						</thead>
	        						<tbody>
									<?php
										echo $rcake;
										echo $rcatering;
										echo $rdekorasi;
										echo $rdokumentasi;
										echo $rgedung;
										echo $rhiburan;
										echo $rriasnbaju;
										echo $rservice;
										echo $rsouvenir;
										echo $rundangan;
										echo $rtotal;

									?>
	        						</tbody>
	        					</table>
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        </div>
	    </div>
	</div>
	<?php
									}
	else {
		echo "Fail";
	}
?>