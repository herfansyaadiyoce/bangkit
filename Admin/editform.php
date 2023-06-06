<!DOCTYPE html>
<html lang="en">

<head>
	<title>Edit Data Pelanggan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

	<?php
	$id = $_GET['id'];

	//koneksi database
	include('config.php');

	//query
	$query = "SELECT * FROM booking WHERE id_booking='$id'";
	$result = mysqli_query($conn, $query);

	?>

	<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">

		<h3>Edit booking</h3>
		<form role="form" action="edit.php" method="get">

			<?php
			while ($row = mysqli_fetch_assoc($result)) {

			?>

				<input type="hidden" name="id_bk" value="<?php echo $row['id_booking']; ?>">

				<div class="form-group">
					<label>Nama booking</label>
					<input type="text" name="nama_bk" class="form-control" value="<?php echo $row['nama_booking']; ?>">
				</div>

				<div class="form-group">
					<label>Nomer Hp</label>
					<input type="text" name="terbit_bk" class="form-control" value="<?php echo $row['nomerhp_booking']; ?>">
				</div>

				<div class="form-group">
					<label>Service</label>
					<input type="text" name="service_bk" class="form-control" value="<?php echo $row['service_booking']; ?>">
				</div>

				<div class="form-group">
					<label>Pesan</label>
					<input type="text" name="pesan_bk" class="form-control" value="<?php echo $row['pesan_booking']; ?>">
				</div>

				<button type="submit" class="btn btn-success btn-block">Edit booking</button>

			<?php
			}
			mysqli_close($conn);
			?>
		</form>
	</div>


</body>

</html>