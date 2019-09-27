<?php
require ("koneksi.php");

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$ttl  =$_POST['ttl'];
$alamat = $_POST['alamat'];
$provinsi = $_POST['provinsi'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO pengguna (nik,nama,ttl,alamat,provinsi,email,password) VALUES ('$nik','$nama','$ttl','$alamat','$provinsi','$email','$password')";
$query2 = "INSERT INTO login (nik,password) VALUES ('$nik','$password')";

$result = mysqli_query($koneksi,$query);
$result = mysqli_query($koneksi,$query2);

if($result){
			header("location:login.php");
		}else{
			echo  "maaf anda kurang beruntung";
		}


?>