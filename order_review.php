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
<div class="col-xs-12 col-md-8 col-md-offset-2">
<center><h1>Order Review</h1></center>
<br><br>
<form action="order_add.php" name="modal_popup" enctype="multipart/form-data" method="POST">
	<?php
		include "koneksi.php";
		$wedding_date = $_POST['wedding_date'];

		if (isset($_POST['id_user'])) {
			$id_user = $_POST['id_user'];
			$tbname="user";
		    $no = 0;
		    $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id = '$id_user'");
		    while($r=mysqli_fetch_array($modal)){
		    $no++;
		    $user_name = $r['name'];
		    $user_address = $r['address'];
		    $user_city = $r['city'];
		    $user_zip = $r['zip'];
	?>
	<table>
	<tr>
		<td>Nama &nbsp;</td>
		<td> &nbsp;: &nbsp;<b><?php echo $r['name']; ?></b></td>
	</tr>
	<?php } } ?>
	<tr>
		<td>Tanggal Pernikahan &nbsp;</td>
		<td> &nbsp;: &nbsp;<b><?php echo $wedding_date; ?></b></td>
	</tr>
	</table>
	<br><br>
	<table class="table table-striped">
		<thead>
			<th></th>
			<th>Nama Produk</th>
			<th style="text-align: center;">Jumlah</th>
			<th style="text-align: center;">Harga</th>
			<th style="text-align: center;">Subtotal</th>
		</thead>
		<?php
			include "koneksi.php";
			$total = 0;
		?>
		<?php
			if (isset($_POST['service'])) {
				$idx = $_POST['service'];
				$tbname="service";
			    $no = 0;
			    $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id = '$idx'");
			    while($r=mysqli_fetch_array($modal)){
			    $no++;
			    $total = $total + $r['price'];	
		?>
			<tr>
				<td>Service</td>
				<td><?php echo $r['name']; ?></td>
				<td style="text-align: center;">1</td>
				<td style="text-align: right;"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?></td>
				<td style="text-align: right;">
					<?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?>
					<input type="hidden" name="id_service" value="<?php echo $r['id']; ?>">
					<input type="hidden" name="harga_service" value="<?php echo $r['price']; ?>">
					<input type="hidden" name="nama_service" value="<?php echo $r['name']; ?>">
				</td>
			</tr>
		<?php } } ?>

		<?php
			if (isset($_POST['cake'])) {
				$idx = $_POST['cake'];
				$tbname="cake";
			    $no = 0;
			    $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id = '$idx'");
			    while($r=mysqli_fetch_array($modal)){
			    $no++;
			    $total = $total + $r['price'];	
		?>
			<tr>
				<td>Cake</td>
				<td><?php echo $r['name']; ?></td>
				<td style="text-align: center;">1</td>
				<td style="text-align: right;"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?></td>
				<td style="text-align: right;">
					<?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?>
					<input type="hidden" name="id_cake" value="<?php echo $r['id']; ?>">
					<input type="hidden" name="harga_cake" value="<?php echo $r['price']; ?>">
					<input type="hidden" name="nama_cake" value="<?php echo $r['name']; ?>">
				</td>
			</tr>
		<?php } } ?>

		<?php
			if (isset($_POST['catering'])) {
				$idx = $_POST['catering'];
				$jumlah = $_POST['jumlah_catering'];
				$tbname="catering";
			    $no = 0;
			    $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id = '$idx'");
			    while($r=mysqli_fetch_array($modal)){
			    $no++;			    	
		?>
			<tr>
				<td>Catering</td>
				<td><?php echo $r['name']; ?></td>
				<td style="text-align: center;"><?php echo $jumlah; ?></td>
				<td style="text-align: right;"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?></td>
				<td style="text-align: right;">
					<?php 
						$subtotal = $jumlah * $r['price'];
						echo 'Rp. '.number_format($subtotal,0,'','.').',-';
						$total = $total + $subtotal; 
					?>
					<input type="hidden" name="id_catering" value="<?php echo $r['id']; ?>">
					<input type="hidden" name="harga_catering" value="<?php echo $r['price']; ?>">
					<input type="hidden" name="jumlah_catering" value="<?php echo $jumlah; ?>">
					<input type="hidden" name="subtotal_catering" value="<?php echo $subtotal; ?>">
					<input type="hidden" name="nama_catering" value="<?php echo $r['name']; ?>">
				</td>
			</tr>
		<?php } } ?>

		<?php
			if (isset($_POST['dekorasi'])) {
				$idx = $_POST['dekorasi'];
				$tbname="dekorasi";
			    $no = 0;
			    $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id = '$idx'");
			    while($r=mysqli_fetch_array($modal)){
			    $no++;
			    $total = $total + $r['price'];	
		?>
			<tr>
				<td>Dekorasi</td>
				<td><?php echo $r['name']; ?></td>
				<td style="text-align: center;">1</td>
				<td style="text-align: right;"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?></td>
				<td style="text-align: right;">
					<?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?>
					<input type="hidden" name="id_dekorasi" value="<?php echo $r['id']; ?>">
					<input type="hidden" name="harga_dekorasi" value="<?php echo $r['price']; ?>">
					<input type="hidden" name="nama_dekorasi" value="<?php echo $r['name']; ?>">
				</td>
			</tr>
		<?php } } ?>

		<?php
			if (isset($_POST['dokumentasi'])) {
				$idx = $_POST['dokumentasi'];
				$tbname="dokumentasi";
			    $no = 0;
			    $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id = '$idx'");
			    while($r=mysqli_fetch_array($modal)){
			    $no++;
			    $total = $total + $r['price'];	
		?>
			<tr>
				<td>Dokumentasi</td>
				<td><?php echo $r['name']; ?></td>
				<td style="text-align: center;">1</td>
				<td style="text-align: right;"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?></td>
				<td style="text-align: right;">
					<?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?>
					<input type="hidden" name="id_dokumentasi" value="<?php echo $r['id']; ?>">
					<input type="hidden" name="harga_dokumentasi" value="<?php echo $r['price']; ?>">
					<input type="hidden" name="nama_dokumentasi" value="<?php echo $r['name']; ?>">
				</td>
			</tr>
		<?php } } ?>

		<?php
			if (isset($_POST['gedung'])) {
				$idx = $_POST['gedung'];
				$tbname="gedung";
			    $no = 0;
			    $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id = '$idx'");
			    while($r=mysqli_fetch_array($modal)){
			    $no++;
			    $total = $total + $r['price'];	
		?>
			<tr>
				<td>Gedung</td>
				<td><?php echo $r['name']; ?></td>
				<td style="text-align: center;">1</td>
				<td style="text-align: right;"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?></td>
				<td style="text-align: right;">
					<?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?>
					<input type="hidden" name="id_gedung" value="<?php echo $r['id']; ?>">
					<input type="hidden" name="harga_gedung" value="<?php echo $r['price']; ?>">
					<input type="hidden" name="nama_gedung" value="<?php echo $r['name']; ?>">
				</td>
			</tr>
		<?php } } ?>

		<?php
			if (isset($_POST['hiburan'])) {
				$idx = $_POST['hiburan'];
				$tbname="hiburan";
			    $no = 0;
			    $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id = '$idx'");
			    while($r=mysqli_fetch_array($modal)){
			    $no++;
			    $total = $total + $r['price'];	
		?>
			<tr>
				<td>Hiburan</td>
				<td><?php echo $r['name']; ?></td>
				<td style="text-align: center;">1</td>
				<td style="text-align: right;"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?></td>
				<td style="text-align: right;">
					<?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?>
					<input type="hidden" name="id_hiburan" value="<?php echo $r['id']; ?>">
					<input type="hidden" name="harga_hiburan" value="<?php echo $r['price']; ?>">
					<input type="hidden" name="nama_hiburan" value="<?php echo $r['name']; ?>">
				</td>
			</tr>
		<?php } } ?>

		<?php
			if (isset($_POST['riasnbaju'])) {
				$idx = $_POST['riasnbaju'];
				$tbname="riasnbaju";
			    $no = 0;
			    $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id = '$idx'");
			    while($r=mysqli_fetch_array($modal)){
			    $no++;
			    $total = $total + $r['price'];	
		?>
			<tr>
				<td>Baju Pengantin &amp; Rias</td>
				<td><?php echo $r['name']; ?></td>
				<td style="text-align: center;">1</td>
				<td style="text-align: right;"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?></td>
				<td style="text-align: right;">
					<?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?>
					<input type="hidden" name="id_riasnbaju" value="<?php echo $r['id']; ?>">
					<input type="hidden" name="harga_riasnbaju" value="<?php echo $r['price']; ?>">
					<input type="hidden" name="nama_riasnbaju" value="<?php echo $r['name']; ?>">
				</td>
			</tr>
		<?php } } ?>

		<?php
			if (isset($_POST['souvenir'])) {
				$idx = $_POST['souvenir'];
				$jumlah = $_POST['jumlah_souvenir'];
				$tbname="souvenir";
			    $no = 0;
			    $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id = '$idx'");
			    while($r=mysqli_fetch_array($modal)){
			    $no++;	
		?>
			<tr>
				<td>Souvenir</td>
				<td><?php echo $r['name']; ?></td>
				<td style="text-align: center;"><?php echo $jumlah; ?></td>
				<td style="text-align: right;"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?></td>
				<td style="text-align: right;">					
					<?php 
						$subtotal = $jumlah * $r['price'];
						echo 'Rp. '.number_format($subtotal,0,'','.').',-';
						$total = $total + $subtotal; 
					?>
					<input type="hidden" name="id_souvenir" value="<?php echo $r['id']; ?>">
					<input type="hidden" name="harga_souvenir" value="<?php echo $r['price']; ?>">
					<input type="hidden" name="jumlah_souvenir" value="<?php echo $jumlah; ?>">
					<input type="hidden" name="subtotal_souvenir" value="<?php echo $subtotal; ?>">
					<input type="hidden" name="nama_souvenir" value="<?php echo $r['name']; ?>">
				</td>
			</tr>
		<?php } } ?>

		<?php
			if (isset($_POST['undangan'])) {
				$idx = $_POST['undangan'];
				$jumlah = $_POST['jumlah_undangan'];
				$tbname="undangan";
			    $no = 0;
			    $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id = '$idx'");
			    while($r=mysqli_fetch_array($modal)){
			    $no++;	
		?>
			<tr>
				<td>Undangan</td>
				<td><?php echo $r['name']; ?></td>
				<td style="text-align: center;"><?php echo $jumlah; ?></td>
				<td style="text-align: right;"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?></td>
				<td style="text-align: right;">					
					<?php 
						$subtotal = $jumlah * $r['price'];
						echo 'Rp. '.number_format($subtotal,0,'','.').',-';
						$total = $total + $subtotal; 
					?>
					<input type="hidden" name="id_undangan" value="<?php echo $r['id']; ?>">
					<input type="hidden" name="harga_undangan" value="<?php echo $r['price']; ?>">
					<input type="hidden" name="jumlah_undangan" value="<?php echo $jumlah; ?>">
					<input type="hidden" name="subtotal_undangan" value="<?php echo $subtotal; ?>">
					<input type="hidden" name="nama_undangan" value="<?php echo $r['name']; ?>">
				</td>
			</tr>
		<?php } } ?>

			<tr>
				<td colspan="4"><b>Total</b></td>
				<td style="text-align: right;"><b><?php echo 'Rp. '.number_format($total,0,'','.').',-'; ?></b></td>
			</tr>
			<tr>
				<td colspan="5">
					<br>
					<center>
					<input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
					<input type="hidden" name="user_name" value="<?php echo $user_name; ?>">
					<input type="hidden" name="user_address" value="<?php echo $user_address; ?>">
					<input type="hidden" name="user_city" value="<?php echo $user_city; ?>">
					<input type="hidden" name="user_zip" value="<?php echo $user_zip; ?>">
					<input type="hidden" name="wedding_date" value="<?php echo $wedding_date; ?>">
					<input type="hidden" name="total" value="<?php echo $total; ?>">
					<a href="index.php" class="btn btn-default">Cancel</a>
					<button type="submit" class="btn btn-primary">Proceed Checkout</button>
					</center>
				</td>
			</tr>
	</table>
</form>
</div>
</div>
</body>
</html>