<?php
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
  <script src="asset/bootstrap-4.6.0-dist/js/jquery-3.5.1.min"></script>
  <script src="asset/bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
  <script src="asset/bootstrap-4.6.0-dist/js/dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
<!-- Sensitive! -->
</head>

<body>

<div class="row justify-content-center">
    <div class="col-xl-5">
      <!-- #ALPHA Card -->
        <div class="card mt-5 bg-dark text-white shadow">

        <!-- Judul -->
        <div class="card-header">
          Login Admin
        </div>

        <!-- Metode Login Back End -->
        <div class="card-body bg-light text-dark">
          <form action="cek_login.php" method="POST">
            <div class="form-group">
                <label for="user">Username</label>
                <input type="text" class="form-control" id="user" name="user" required placeholder="Masukkan Username">
            </div>
            <div class="form-group">
                <label for="pass">Sandi</label>
                <input type="password" class="form-control" id="pass" name="pass" required placeholder="Masukkan Kata Sandi">
            </div>
            <button type="submit" class="btn-sm btn-success">Masuk</button>
          </form>
        </div>
      <!-- #OMEGA Card -->
    </div>
</div>




</div>
</body>
</html>