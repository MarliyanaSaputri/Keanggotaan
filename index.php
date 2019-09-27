<?php
	session_start();
	if (isset( $_SESSION['nik'])) {
	$level = $_SESSION['level'];
	$username = $_SESSION['nik'];
	$tahun = date('Y');
include "layout/head.php";
include "layout/menu.php";
include "layout/konten.php";
include "layout/footer.php";
?>

<?php }else{
	echo"<script language='javascript'>alert('Terjadi kesalahan, silakan ulangi !')</script>";
		echo"<div align='center'><h1>Login Gagal</h1></div>";
		echo"<div align='center'><a href='pages-login.html'>Kembali</a></div>";
 	}
?>

