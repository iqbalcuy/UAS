<?php 
	require 'koneksi.php';

	if (isset($_POST['submit'])) {
		
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$komen = $_POST['komen'];

		$query = "INSERT INTO komentar (nama,email,komen) values ('$nama','$email','$komen')";
		$sql = mysqli_query($koneksi,$query);

		if ($sql) {
			echo "<h1>Berhasil menginput komentar</h1>
			<br>Silakan kembali ke <a href='home-user.php'>home</a>";
		}else{
			header("location:home-user.php");
		}
	}

 ?>