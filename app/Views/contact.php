
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
						<a class="nav-link" href="<?= base_url('about') ?>">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('post') ?>">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= base_url('contact') ?>">Contact</a>
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
        <h1 class="display-5 fw-bold">Hubungi Kami</h1>
		<p class="lead">Ada pertanyaan seputar produk? Kami siap membantu Anda.</p>
        
      </div>
    </div>

	<div class="container">
  <div class="row">

		<!-- Info Kontak -->
		<div class="col-md-6 mb-4">
		<div class="card h-100">
			<div class="card-body">
			<h5 class="card-title">🎯 Kontak Toko</h5>
			<p><strong>Nama Toko:</strong> Afif Gadget ID</p>
			<p><strong>Alamat:</strong> Jl. Rukun Keluarga No.1, Cengkareng barat, Cengkareng, Jakarta Barat, DKI Jakarta, 11730</p>
			<p><strong>Telepon:</strong> 0815-5362-5141</p>
			<p><strong>Email:</strong> afifgadgetid@gmail.com</p>
			<p><strong>Jam Operasional:</strong> 09.00 – 20.00 (Setiap Hari)</p>
			<div class="mt-3">
				<a href="https://wa.me/6281553625141" target="_blank" class="btn btn-success btn-sm mb-1">Chat WhatsApp</a>
				<a href="https://www.instagram.com/imgadget.officialstore?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="btn btn-outline-danger btn-sm mb-1">Instagram</a>
				<a href="https://id.shp.ee/uithod1" target="_blank" class="btn btn-warning btn-sm mb-1">Shopee</a>
			</div>
			</div>
		</div>
		</div>

		<!-- Formulir Kontak -->
		<div class="col-md-6 mb-4">
		<div class="card h-100">
			<div class="card-body">
			<?php if(session()->getFlashdata('success')): ?>
			<div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
			<?php elseif(session()->getFlashdata('errors')): ?>
			<div class="alert alert-danger">
				<?php foreach(session()->getFlashdata('errors') as $error): ?>
				<div><?= $error ?></div>
				<?php endforeach ?>
			</div>
			<?php endif; ?>

			<h5 class="card-title">📂 Formulir Pesan Cepat</h5>
			<form action="<?= base_url('contact/send') ?>" method="post">
				<div class="mb-3">
				<label for="nama" class="form-label">Nama</label>
				<input type="text" class="form-control" id="nama" name="nama" required>
				</div>
				<div class="mb-3">
				<label for="email" class="form-label">Email</label>
				<input type="email" class="form-control" id="email" name="email" required>
				</div>
				<div class="mb-3">
				<label for="pesan" class="form-label">Pesan</label>
				<textarea class="form-control" id="pesan" name="pesan" rows="4" required></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Kirim</button>
			</form>
			</div>

			<!-- lokasi -->
			<div class="container my-4">
			<h5 class="text-center">🗺️ Lokasi Toko Kami</h5>
			<div class="ratio ratio-16x9">
				<iframe 
				src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d4484.960178220523!2d106.71949471452503!3d-6.1442272691192334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sid!2sid!4v1753803112991!5m2!1sid!2sid" 
				width="100%" 
				height="450" 
				style="border:0;" 
				allowfullscreen="" 
				loading="lazy" 
				referrerpolicy="no-referrer-when-downgrade">
				</iframe>
			</div>
			</div>


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