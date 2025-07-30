<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AfifGadget.com</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url('images/logo-afifgadget.jpg') ?>">Afif Gadget ID</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('about') ?>">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('post') ?>">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="p-5 mb-4 bg-light rounded-3">
		<div class="container py-5">
			<img src="<?= base_url('images/logo-afifgadget.jpg') ?>" alt="Afif Gadget ID Logo" width="120">
        <h1 class="display-5 fw-bold">Selamat Datang di Afif Gadget ID</h1>
		<p class="lead">"Toko HP Terlengkap dan Terpercaya!"</p>
		
        <!-- <p class="col-md-8 fs-4">di laman portal berita</p> -->
        <!-- <button class="btn btn-primary btn-sm" type="button">Read more</button> -->
      </div>
    </div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">📱 Jual HP Original & Bergaransi</h5>
					<p>Kami menyediakan berbagai merek handphone terbaru dengan garansi resmi dan kualitas terjamin. Belanja aman dan nyaman hanya di Afif Gadget ID.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">💳 Bisa Cicilan & Bayar di Tempat</h5>
					<p>Dapatkan kemudahan pembayaran melalui cicilan tanpa kartu kredit dan layanan COD (Bayar di Tempat) untuk area tertentu.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">🛍️ Promo & Diskon Tiap Minggu!</h5>
					<p>Jangan lewatkan penawaran spesial dan potongan harga menarik setiap minggunya. Kunjungi toko kami atau lihat di marketplace.</p>
				</div>
			</div>
			
		</div>
	</div>

	<div class="container my-4">
	<h4 class="mb-3">🔥 Produk Terlaris</h4>
	<div class="row">
		<!-- Produk 1 -->
		<div class="col-md-3 mb-4">
		<div class="card h-100">
			<img src="<?= base_url('images/iphone15.jpg') ?>" class="card-img-top" alt="iPhone 15">
			<div class="card-body">
			<h5 class="card-title">iPhone 15 Pro</h5>
			<p class="card-text">Harga mulai Rp 17.499.000 – Garansi Resmi</p>
			<a href="https://www.gsmarena.com/apple_iphone_15_pro-12557.php" target="_blank" class="btn btn-primary btn-sm">Lihat Detail</a>
			</div>
		</div>
		</div>

		<!-- Produk 2 -->
		<div class="col-md-3 mb-4">
		<div class="card h-100">
			<img src="<?= base_url('images/rog7.jpg') ?>" class="card-img-top" alt="ROG Phone 7">
			<div class="card-body">
			<h5 class="card-title">ASUS ROG Phone 7</h5>
			<p class="card-text">Rp 13.999.000 – Performa Gaming Maksimal</p>
			<a href="https://www.gsmarena.com/asus_rog_phone_7-12223.php" target="_blank" class="btn btn-primary btn-sm">Lihat Detail</a>
			</div>
		</div>
		</div>

		<!-- Produk 3 -->
		<div class="col-md-3 mb-4">
		<div class="card h-100">
			<img src="<?= base_url('images/galaxys24.jpg') ?>" class="card-img-top" alt="Galaxy S24">
			<div class="card-body">
			<h5 class="card-title">Samsung Galaxy S24</h5>
			<p class="card-text">Rp 14.499.000 – Fitur AI Tercanggih</p>
			<a href="https://www.gsmarena.com/samsung_galaxy_s24-12773.php" target="_blank" class="btn btn-primary btn-sm">Lihat Detail</a>
			</div>
		</div>
		</div>

		<!-- Produk 4 -->
		<div class="col-md-3 mb-4">
		<div class="card h-100">
			<img src="<?= base_url('images/redminote13.jpg') ?> "class="card-img-top" alt="Redmi Note 13 Pro">
			<div class="card-body">
			<h5 class="card-title">Redmi Note 13 Pro</h5>
			<p class="card-text">Rp 3.299.000 – Kamera 200MP, Harga Terjangkau</p>
			<a href="https://www.gsmarena.com/xiaomi_redmi_note_13-12776.php" target="_blank" class="btn btn-primary btn-sm">Lihat Detail</a>
			</div>
		</div>
		</div>
	</div>
	</div>


	<div class="container my-4 text-center">
	<div class="alert alert-warning" role="alert">
		🎉 Promo Akhir Bulan! Dapatkan diskon hingga <strong>Rp 500.000</strong> untuk pembelian HP Android & iPhone! 
		<a href="https://id.shp.ee/uithod1" class="alert-link" target="_blank" rel="noopener noreferrer">Lihat detail promo</a>.
	</div>
	</div>



	<div class="container py-4">
		<footer class="pt-3 mt-4 text-muted border-top">
			<div class="container">
				&copy; <?= Date('Y') ?>
			</div>
		</footer>
	</div>

	<!-- Jquery dan Bootsrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>