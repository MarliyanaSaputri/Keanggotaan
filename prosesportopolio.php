<?php
require ("koneksi.php");

$nik = $_POST['nik'];
$nama = $_POST['bidang_keahlian'];
$ttl  =$_POST['riwayat_pelatihan'];
$alamat = $_POST['sertifikat_dimiliki'];



$query = "INSERT INTO portopolio (nik,bidang_keahlian,riwayat_pelatihan,sertifikat_dimiliki) VALUES ('$nik','$nama','$ttl','$alamat')";
// $query2 = "INSERT INTO login (nik,password) VALUES ('$nik','$password')";

$result = mysqli_query($koneksi,$query);
// $result = mysqli_query($koneksi,$query2);

if($result){
			header("location:dataportofolio.php");
		}else{
			echo  "maaf anda kurang beruntung";
		}


?>