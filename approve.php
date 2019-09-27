<?php
require ("koneksi.php");

$nik = $_GET['nik'];
$id = 2;


$query = "INSERT INTO mapping_pengguna (nik,id_posisi) VALUES ('$nik','$id')";
$query2 = "Update portopolio set id_posisi='$id' where nik=$nik";
$result = mysqli_query($koneksi,$query);

$result = mysqli_query($koneksi,$query2);
if($result){
			header("location:dataportofolio.php");
		}else{
			echo  "maaf anda kurang beruntung";
		}


?>