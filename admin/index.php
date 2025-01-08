<?php
  session_start();
  if ($_SESSION['username'] == false) {
    header("location:login.php");
  }
  include "../connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
<!-- Sensitive! -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akses Admin</title>
    <link rel="stylesheet" href="asset/main.css?v=1.0">
    <link rel="stylesheet" href="asset/bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/font-awesome/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/f3f44a6860.js" crossorigin="anonymous"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link rel="stylesheet" href="asset/bootstrap-4.6.0-dist/css/dashboard.css?v=1.0">
</head>
<!-- Sensitive! -->

<body>

<nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color : #052347">

<!-- "Home Button" -->
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#"><b>Klik</b><i>Kamera</i> Admin</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<!-- Batas "Home Button" -->

<!-- "Log-out Button" -->
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Keluar <i class="fa-solid fa-right-from-bracket"></i></a>
    </li>
  </ul>
<!-- Batas "Log-out Button" -->

</nav>


<div class="container-fluid">
  <div class="row">

<!-- SideBar -->
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block text-white sidebar collapse" style="background-color : #052347">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">

          <li class="nav-item">
            <a class="nav-link active text-white" href="index.php?p=dashboard">
            <i class="fa-solid fa-house"></i>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="index.php?p=admin">
            <i class="fa-solid fa-user-tie"></i>
               Admin
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="index.php?p=pelanggan">
            <i class="fa-solid fa-users"></i>
              Pelanggan
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="index.php?p=kategori">
            <i class="fa-solid fa-list"></i>
              Kategori
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="index.php?p=produk">
              <i class="fa-solid fa-camera"></i>
              Produk
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="index.php?p=paket">
            <i class="fa-brands fa-dropbox"></i>
              Paket
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="index.php?p=checkout">
            <i class="fa-solid fa-cart-shopping"></i>
              checkout
            </a>
          </li>
        </ul>
      </div>
    </nav>
<!-- Batas SideBar -->

<!-- Konten -->
    <?php include "content.php" ?>
<!-- Batas Konten -->

  </div>
</div>

  <script src="asset/bootstrap-4.6.0-dist/js/jquery-3.5.1.min"></script>
  <script src="asset/bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
  <script src="asset/bootstrap-4.6.0-dist/js/dashboard.js"></script>
  
</body>
</html>