<?php
include 'koneksi.php';
$kode =$_GET['nik'];

$data = mysqli_query ($koneksi,"DELETE  FROM pengguna WHERE nik='$kode'") or die("error hapus data".mysql_error());
	
	header ("location:datadaftar.php");
?>