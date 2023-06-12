<?php
//include('dbconnected.php');
include('config.php');

$id = $_GET['id_bk'];
$nama = $_GET['nama_bk'];
$nomerhp = $_GET['terbit_bk'];
$service = $_GET['service_bk'];
$waktu = $_GET['waktu_bk'];
$tanggal = $_GET['tanggal_bk'];
$pesan = $_GET['pesan_bk'];
$harga = $_GET['harga_bk'];

//query update
$query = "UPDATE booking SET nama_booking='$nama' , nomerhp_booking='$nomerhp' , service_booking='$service' , waktu_booking='$waktu' , tanggal_booking='$tanggal' ,pesan_booking='$pesan', harga_booking='$harga' WHERE id_booking='$id' ";

if (mysqli_query($conn, $query)) {
	# credirect ke page index
	header("location:index.php");
} else {
	echo "ERROR, data gagal diupdate" . mysqli_error($conn);
}

mysqli_close($conn);
