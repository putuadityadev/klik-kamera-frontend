<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klik.Kamera | Bali</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="fontawesome/js/all.js">
    <script src="https://kit.fontawesome.com/f3f44a6860.js" crossorigin="anonymous"></script>
    <style>
        .box{
            padding: 30px;
            background-color: #b4b4b4;
            margin: 10px 0px;
            text-align: center;
        }
        .custom-navbar {
            background-color: #052347 !important; 
        }
        .logo-img {
            width: 45px; /* Ubah ukuran lebar sesuai kebutuhan */
            height: auto; /* Menjaga proporsi gambar */
            margin-right: 0px; /* Spasi antara gambar dan teks */
        }
        .navbar-nav .nav-link {
    color: #fff !important; /* Warna teks putih */
}

/* Ubah warna teks brand menjadi putih */
.navbar-brand {
    color: #fff !important;
}
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info custom-navbar">
    <div class="container"> <!-- Tambahkan container untuk membatasi lebar -->
    <a class="navbar-brand" href="#">
        <img src="asset/invert-logo.png" alt="Logo" class="logo-img">
        Klik.Kamera
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=home">Beranda<span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=produkkami">Produk Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=paket">Paket Bundling</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=syarat">Persyaratan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=informasi">Informasi</a>
          </li>
      </ul>
        </nav>
    </header>

    <main role="main">
    <!--  CONTENT -->
    <?php include 'content.php' ?>
</main>

    <FOOTER>
    <footer class="container" style="backgorund color=grey">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017-2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
    <script type="text/javascript" src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>
</html>