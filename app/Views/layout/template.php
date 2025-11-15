<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio Samsul Huda</title>
    
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="/assets/js/bootstrap.bundle.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init(); // Inisialisasi AOS
    </script>

    <link href="/assets/css/style.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="/">Samsul Huda</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
           <li class="nav-item">
            <a class="nav-link" href="<?= site_url('/'); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('about'); ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('portfolio'); ?>">Portfolio</a>
          </li>
         </ul>
        </div>
      </div>
    </nav>
    <?= $this->renderSection('content'); ?>
    <footer class="bg-dark text-white text-center p-4">
        <div class="container">
            <p class="mb-0">© 2025 Copyright | Dibuat dengan oleh Samsul Huda</p>
        </div>
    </footer>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>