<?php

$id = $_GET['id'];

//include(config.php);
include('config.php');

//query hapus
$query = "DELETE FROM booking WHERE id_booking = '$id' ";

if (mysqli_query($conn, $query)) {
	# redirect ke index.php
	header("location:index.php");
} else {
	echo "ERROR, data gagal dihapus" . mysqli_error($conn);
}

mysqli_close($conn);
