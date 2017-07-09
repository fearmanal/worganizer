<center><h1>Order Review</h1></center>
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
		    
	?>
	<h3>Nama : <?php echo $r['name'];	?></h3>
	<?php } } ?>

	<h3>Tanggal Pernikahan : <?php echo $wedding_date; ?></h3>

	<table border="1">
		<tr>
			<td></td>
			<td>Nama Produk</td>
			<td></td>
			<td>Jumlah</td>
			<td></td>
			<td>Harga</td>
			<td>Subtotal</td>
		</tr>
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
				<td>:</td>
				<td>1</td>
				<td>X</td>
				<td style="text-align: right;"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?></td>
				<td style="text-align: right;">
					<?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?>
					<input type="hidden" name="id_service" value="<?php echo $r['id']; ?>">
					<input type="hidden" name="harga_service" value="<?php echo $r['price']; ?>">
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
				<td>:</td>
				<td>1</td>
				<td>X</td>
				<td style="text-align: right;"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?></td>
				<td style="text-align: right;">
					<?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?>
					<input type="hidden" name="id_cake" value="<?php echo $r['id']; ?>">
					<input type="hidden" name="harga_cake" value="<?php echo $r['price']; ?>">
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
				<td>:</td>
				<td><?php echo $jumlah; ?></td>
				<td>X</td>
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
				<td>:</td>
				<td>1</td>
				<td>X</td>
				<td style="text-align: right;"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?></td>
				<td style="text-align: right;">
					<?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?>
					<input type="hidden" name="id_dekorasi" value="<?php echo $r['id']; ?>">
					<input type="hidden" name="harga_dekorasi" value="<?php echo $r['price']; ?>">
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
				<td>:</td>
				<td>1</td>
				<td>X</td>
				<td style="text-align: right;"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?></td>
				<td style="text-align: right;">
					<?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?>
					<input type="hidden" name="id_dokumentasi" value="<?php echo $r['id']; ?>">
					<input type="hidden" name="harga_dokumentasi" value="<?php echo $r['price']; ?>">
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
				<td>:</td>
				<td>1</td>
				<td>X</td>
				<td style="text-align: right;"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?></td>
				<td style="text-align: right;">
					<?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?>
					<input type="hidden" name="id_gedung" value="<?php echo $r['id']; ?>">
					<input type="hidden" name="harga_gedung" value="<?php echo $r['price']; ?>">
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
				<td>:</td>
				<td>1</td>
				<td>X</td>
				<td style="text-align: right;"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?></td>
				<td style="text-align: right;">
					<?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?>
					<input type="hidden" name="id_hiburan" value="<?php echo $r['id']; ?>">
					<input type="hidden" name="harga_hiburan" value="<?php echo $r['price']; ?>">
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
				<td>:</td>
				<td>1</td>
				<td>X</td>
				<td style="text-align: right;"><?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?></td>
				<td style="text-align: right;">
					<?php echo 'Rp. '.number_format($r['price'],0,'','.').',-'; ?>
					<input type="hidden" name="id_riasnbaju" value="<?php echo $r['id']; ?>">
					<input type="hidden" name="harga_riasnbaju" value="<?php echo $r['price']; ?>">
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
				<td>:</td>
				<td><?php echo $jumlah; ?></td>
				<td>X</td>
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
				<td>:</td>
				<td><?php echo $jumlah; ?></td>
				<td>X</td>
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
				</td>
			</tr>
		<?php } } ?>

			<tr>
				<td colspan="6">Total</td>
				<td><?php echo 'Rp. '.number_format($total,0,'','.').',-'; ?></td>
			</tr>
			<tr>
				<td colspan="7">
					<center>
					<input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
					<input type="hidden" name="wedding_date" value="<?php echo $wedding_date; ?>">
					<input type="hidden" name="total" value="<?php echo $total; ?>">
					<a href="index.php" class="btn btn-default"></a>
					<button type="submit" class="btn btn-primary">Proceed Checkout</button>
					</center>
				</td>
			</tr>
	</table>
</form>