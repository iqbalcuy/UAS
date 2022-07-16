<?php 
	session_start();
	include'koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$login = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
	$cek = mysqli_num_rows($login);

	if ($cek > 0) {
		$data = mysqli_fetch_assoc($login);
		if ($data['level']=="admin") {
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "admin";
			header("location:login/home-admin.php");
		}else if($data['level']=="user"){
			$_SESSION['username'] = $username;
			$_SESSION['nama'] = $nama;
			$_SESSION['level'] = "user";
			header("location:home-user.php");
		}}else{
			header("location:gagal_login.php");
		}
	

 ?>