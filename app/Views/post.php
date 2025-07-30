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
						<a class="nav-link active" aria-current="page" href="<?= base_url('post') ?>">Blog</a>
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
        <h1 class="display-5 fw-bold">📱 Selamat Datang di Halaman Blog Kami!</h1>
		<p class="lead">Temukan berbagai informasi menarik, tips bermanfaat, hingga update terkini seputar dunia gadget, khususnya smartphone! Berikut beberapa konten utama yang bisa kamu nikmati di blog ini:</p>
        <!-- <p class="col-md-8 fs-4">di laman portal berita</p> -->

      </div>
    </div>



	<div class="container">
			<form action="<?= base_url('post/search') ?>" method="get" class="mb-4">
		<div class="input-group">
			<input type="text" name="q" class="form-control" placeholder="Cari artikel..." value="<?= esc($query ?? '') ?>">
			<button class="btn btn-outline-secondary" type="submit">🔍 Cari</button>
		</div>
		</form>
  <div class="row">
    <?php $no = 1; foreach ($posts as $post) : ?>
      <div class="col-md-6 mb-4">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <h6 class="text-muted">#<?= $no ?></h6>
            <h5 class="card-title">
              <a href="/post/<?= $post['slug'] ?>" class="text-decoration-none text-dark">
                <?= $post['title'] ?>
              </a>
            </h5>
			<small class="text-muted">📅 <?= date('d M Y', strtotime($post['created_at'])) ?> <small class="text-muted mb-1">📈 <?= $post['views'] ?? 0 ?> views</small></small> 
            <p class="card-text"><?= substr(strip_tags($post['content']), 0, 120) ?>...</p>
            <a href="/post/<?= $post['slug'] ?>"  class="btn btn-outline-primary btn-sm">Baca Selengkapnya</a>
			<div class="mt-2">
			<a href="https://www.facebook.com/sharer/sharer.php?u=<?= current_url() ?>" target="_blank" class="btn btn-sm btn-outline-primary">Bagikan ke Facebook</a>
			</div>
			
          </div>
        </div>
      </div>
    <?php $no++; endforeach ?>
  </div>

  <!-- Tombol Read More (bisa diarahkan ke pagination atau halaman blog lainnya) -->
  <div class="text-center my-4">
    <a href="<?= base_url('post') ?>" class="btn btn-primary">Lihat Semua Artikel</a>
  </div>
</div>


	
	<div class="container py-4">
		<footer class="pt-3 mt-4 text-muted border-top">
			<div class="container">
				&copy; <?= Date(format: 'Y') ?>
			</div>
		</footer>
	</div>
	<!-- Jquery dan Bootsrap JS -->
	<script src="<?= base_url(relativePath: 'js/jquery.min.js') ?>"></script>
	<script src="<?= base_url(relativePath: 'js/bootstrap.min.js') ?>"></script>

</body>

</html>