<?php
    include 'koneksi.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/punyacoba.css">
</head>
<body>

			<div class="section">
				<div class="container">
					<h3>kategori</h3>
					<div class="box">
						<!-- galery -->
						<?php
						include 'koneksi.php';
						$produk = mysqli_query($koneksi, "SELECT * FROM produk");
						while($hasil = mysqli_fetch_array($produk)){
							?>

						<div class="col-5">
							<img src="img/gallery/<?php echo $hasil['foto']; ?>" alt="gambar akuh">
							<p><?php echo $hasil['nama']; ?></p>
							<p><?php echo $hasil['keterangan']; ?></p>
							<p>Rp.<?php echo $hasil['harga']; ?></p>
						</div>
						<?php } ?>
						

					</div>
				</div>
			</div>
</body>
</html>