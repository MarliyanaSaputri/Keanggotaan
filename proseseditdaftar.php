<?php
if(isset($_POST['submit'])) {
require ("koneksi.php");

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$ttl  =$_POST['ttl'];
$alamat = $_POST['alamat'];
$provinsi = $_POST['provinsi'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "UPDATE pengguna set nik='$nik',nama='$nama',ttl='$ttl',alamat='$alamat',provinsi='$provinsi',email='$email',password='$password' where nik='$nik'";


$result = mysqli_query($koneksi,$query);
// $result = mysqli_query($koneksi,$query2);

if($result){
			header("location:datadaftar.php");
		}else{
			echo  "maaf anda kurang beruntung";
		}

}
?>