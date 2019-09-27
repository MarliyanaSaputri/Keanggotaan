<?php
include 'koneksi.php';	
	$user  = $_POST['nik'];
 	$password = $_POST['password'];
echo $user . $password;
 	//$sql = "SELECT * FROM login WHERE username='$user' AND password='$password'";
	//$result = $dbh->query($sql);

	$sql = mysqli_query($koneksi,"SELECT * FROM login WHERE nik='$user' AND password='$password'");
						

						//$lepel= "1";
						//foreach ($dbh->query($sql) as $data) : 
		while($data=mysqli_fetch_array($sql)){
	
	$username = $data['nik'] ;
	$password = $data['password'] ;
	// $level = $data['level'];
}
//echo $result;
 	$query = mysqli_query($sql,$koneksi);
 	//$row = $result->num_rows;//mysql_num_rows($query,$dbh ) or die("Query failed with error: ".mysql_error());

 	if (!empty($username)){
	//if ($result->num_rows==1) {
	$sql = mysqli_query($koneksi,"SELECT * FROM login WHERE nik='$user' AND password='$password'");

	session_start(); // memulai fungsi session
	$_SESSION['nik'] = $username;
	$_SESSION['level'] = $level;
  	echo"<div align='center'><h1>Login Berhasil</h1>dengan lepel $level  </div>";
		header("location:home.php?$username"); 
		
 	}else{
  		echo"<script language='javascript'>alert('Terjadi kesalahan, silakan ulangi !')</script>";
		echo"<div align='center'><h1>Login Gagal</h1></div>";
		echo"<div align='center'><a href='login.php'>Kembali</a></div>";
 	}
	
?>