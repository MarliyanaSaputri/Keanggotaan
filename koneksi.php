<?php

//deklarasi variable
// $databaseHost = 'localhost';
// $databaseName = 'u7698500_marliyana';
// $databaseUsername = 'u7698500_marliyana';
// $databasePassword = '@jwp2019';

$databaseHost = 'localhost';
$databaseName = 'keanggotaan';
$databaseUsername = 'root';
$databasePassword = '';

//fungsi koneksi
$koneksi = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

//$koneksi = mysqli_connect("localhost","root","");


if(!$koneksi) {		// cek koneksi
	die("gagal terhubung dengan database:" . mysqli_connect_error());
}
/*else {
	echo "sukses";
}*/
?>