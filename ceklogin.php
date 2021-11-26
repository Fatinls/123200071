<?php
	session_start();
	include "database.php";

	$username = $_POST['username'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$password = $_POST['password'];


	$query = mysqli_query($connect, "SELECT * FROM petugas WHERE username = '$username' && nama_lengkap = '$nama_lengkap' && password = '$password'") or die (mysqli_error($connect));

	$cek = mysqli_num_rows($query);

	if($cek > 0){
		$_SESSION['username'] = $username;
		$_SESSION['nama_lengkap'] = $nama_lengkap;
		$_SESSION['password'] = $password;
		header("location:beranda.php");
	}else{
		header("location:login.php?pesan=gagal");
	}
?>