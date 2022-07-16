<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" type="image/jpg" href="img/stiker.jpg">
    <title>KueAnda</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="css/templatemo-style.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/punyacoba.css">
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body> 

	<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="img/stiker.jpg">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="img/simple-house-logo.png" alt="Logo" class="tm-site-logo" /> 
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">KueAnda</h1>
								<h6 class="tm-site-description">Kualitas Yang Terjamin</h6>	
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="home-user.php" class="tm-nav-link active">Home</a></li>
								<li class="tm-nav-li"><a href="about-user.php" class="tm-nav-link">About</a></li>
								<li class="tm-nav-li"><a href="contact-user.php" class="tm-nav-link">Contact</a></li>
								<li class="tm-nav-li"><a href="login.php" class="tm-nav-link">Logout</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Welcome to KueAnda</h2>
				<p class="col-12 text-center">Kue-kue kami dijamin enak dan tanpa menggunakan pemngawet ataupun pemanis buatan.
				</p>
			</header>
			
		
			<!-- Gallery -->
			<div class="section">
				<div class="kontener">
					<h3>Daftar Menu Kami</h3>
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
							<p id="harga">Rp.<?php echo $hasil['harga']; ?></p>
						</div>
						<?php } ?>
						

					</div>
				</div>
			</div>
			<br>
			<div class="tm-section tm-container-inner">
				<div class="row">
					<div class="col-md-6">
						<figure class="tm-description-figure">
							<img src="img/stiker.jpg" alt="Image" class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-6">
						<div class="tm-description-box"> 
							<h4 class="tm-gallery-title">TERIMAKASIH BANYAK!</h4>
							<p class="tm-mb-45">Terimasih banyak atas kepercayaan anda,jika ada kritik dan saran kami siap menerimanya.Semoga hari anda bahagia dan sampai jumpa
							:)</p>
							<a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</main>

		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2020 Simple House 
            
            | Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
		</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>
</body>
</html>