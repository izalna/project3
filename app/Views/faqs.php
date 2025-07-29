
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
						<a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= base_url('faqs') ?>">FAQ</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="p-5 mb-4 bg-light rounded-3">
	<div class="container py-5 text-center">
		<h1 class="display-5 fw-bold">FAQ - Pertanyaan Umum</h1>
		<p class="lead">Berikut adalah beberapa pertanyaan yang sering ditanyakan oleh pelanggan kami.</p>
	</div>
	</div>

	<div class="container my-4">
	<div class="accordion" id="faqAccordion">

		<!-- FAQ 1 -->
		<div class="accordion-item">
		<h2 class="accordion-header" id="faq1">
			<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
			Apakah semua HP yang dijual bergaransi resmi?
			</button>
		</h2>
		<div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
			<div class="accordion-body">
			Ya, semua HP yang kami jual adalah produk original dengan garansi resmi dari distributor atau pabrik resmi.
			</div>
		</div>
		</div>

		<!-- FAQ 2 -->
		<div class="accordion-item">
		<h2 class="accordion-header" id="faq2">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
			Apakah bisa bayar di tempat (COD)?
			</button>
		</h2>
		<div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
			<div class="accordion-body">
			Ya, kami menyediakan layanan COD untuk wilayah tertentu. Silakan hubungi admin WhatsApp untuk memastikan area kamu ter-cover.
			</div>
		</div>
		</div>

		<!-- FAQ 3 -->
		<div class="accordion-item">
		<h2 class="accordion-header" id="faq3">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
			Apakah tersedia cicilan tanpa kartu kredit?
			</button>
		</h2>
		<div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
			<div class="accordion-body">
			Tersedia! Kami bekerja sama dengan penyedia cicilan seperti Akulaku dan SPayLater. Syarat mudah dan proses cepat.
			</div>
		</div>
		</div>

		<!-- FAQ 4 -->
		<div class="accordion-item">
		<h2 class="accordion-header" id="faq4">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
			Apakah bisa tukar tambah HP lama?
			</button>
		</h2>
		<div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
			<div class="accordion-body">
			Bisa! Kami menerima tukar tambah HP lama dengan penilaian langsung dari tim kami. Bawa unitnya ke toko atau hubungi admin untuk cek harga.
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