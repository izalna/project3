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
			<a class="navbar-brand" href="<?= base_url() ?>">Afif Gadget ID</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url() ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= base_url('about') ?>">About</a>
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
      <div class="container py-3 text-center">
		<img src="<?= base_url('images/logo-afifgadget.jpg') ?>" alt="Afif Gadget ID Logo" width="120">
        <h1 class="display-5 fw-bold mt-3">Tentang Afif Gadget ID</h1>
        <p class="lead">Toko HP terpercaya sejak 2020 — Garansi Resmi, Harga Terbaik!</p>
		
      </div>
    </div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Siapa Kami</h5>
					<p>Afif Gadget ID adalah toko handphone yang berdiri sejak 2020 dan telah dipercaya oleh ribuan pelanggan di seluruh Indonesia. Kami menjual berbagai jenis HP original dengan garansi resmi, baik secara online maupun offline.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Apa yang Kami Tawarkan</h5>
					<p>Kami menyediakan layanan penjualan HP baru & second berkualitas, cicilan tanpa kartu kredit, tukar tambah, dan pengiriman cepat. Semua produk dijamin original dan bergaransi.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Kenapa Afif Gadget ID?</h5>
					<p>Harga bersaing, pelayanan cepat, pilihan produk lengkap, serta promo menarik setiap minggu adalah alasan banyak orang mempercayai kami. Kepuasan pelanggan adalah prioritas utama kami.</p>
				</div>
			</div>
			<!-- Visi Misi -->
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Visi & Misi</h5>
					<ul>
					<li><strong>Visi:</strong> Menjadi toko gadget nomor satu yang terpercaya dan terjangkau untuk semua kalangan.</li>
					<li><strong>Misi:</strong> Menyediakan produk berkualitas, pelayanan cepat, serta menghadirkan pengalaman belanja yang mudah dan aman.</li>
					</ul>
				</div>
			</div>
			<!-- Kontak -->
			<div class="col-md-12 my-2 card text-center">
				<div class="card-body">
					<h5 class="h5">Hubungi Kami</h5>
					<p>Ingin tanya stok atau promo terbaru?</p>
					<a href="https://wa.me/6281553625141" target="_blank" class="btn btn-success">Hubungi via WhatsApp</a>
				</div>
			</div>

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