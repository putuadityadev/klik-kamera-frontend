<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<!-- Judul Page -->
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h3">Dashboard</h1>
  </div>
<!-- Batas Judul Page -->

<!-- Isi Page -->
  <div class="row">
    <div class="col-lg-4">
      <div class="card text-white bg-dark mb-3" >
      <div class="card-header">Costumer <i class="fa-solid fa-users"></i></div>
      <?php
        $query = "select * from pelanggan";
        $sql = mysqli_query($conn,$query);
        $a = mysqli_num_rows($sql);
      ?>
      <div class="card-body">
      <h5 class="card-title"><?= $a ?></h5>
      <p class="card-text">Orang</p>
    </div>
  </div>

  </div>
    <div class="col-lg-4">
      <div class="card text-white bg-dark mb-3" >
      <div class="card-header">Produk <i class="fa-solid fa-camera"></i></div>
      <?php
        $query = "select * from produk";
        $sql = mysqli_query($conn,$query);
        $a = mysqli_num_rows($sql);
      ?>
      <div class="card-body">
      <h5 class="card-title"><?= $a ?></h5>
      <p class="card-text">Produk</p>
    </div>
  </div>

  </div>
    <div class="col-lg-4">
      <div class="card text-white bg-dark mb-3" >
      <div class="card-header">Paket <i class="fa-brands fa-dropbox"></i></div>
      <?php
        $query = "select * from paket";
        $sql = mysqli_query($conn,$query);
        $a = mysqli_num_rows($sql);
      ?>
      <div class="card-body">
      <h5 class="card-title"><?= $a ?></h5>
      <p class="card-text">Paket</p>
    </div>
  </div>

  </div>
    <div class="col-lg-4">
      <div class="card text-white bg-dark mb-3" >
      <div class="card-header">Kategori <i class="fa-solid fa-list"></i></div>
      <?php
        $query = "select * from Kategori";
        $sql = mysqli_query($conn,$query);
        $a = mysqli_num_rows($sql);
      ?>
      <div class="card-body">
      <h5 class="card-title"><?= $a ?></h5>
      <p class="card-text">Kategori</p>
    </div>
  </div>

  </div>
    <div class="col-lg-4">
      <div class="card text-white bg-dark mb-3" >
      <div class="card-header">Check Out <i class="fa-solid fa-cart-shopping"></i></div>
      <?php
        $query = "select * from checkout";
        $sql = mysqli_query($conn,$query);
        $a = mysqli_num_rows($sql);
      ?>
      <div class="card-body">
      <h5 class="card-title"><?= $a ?></h5>
      <p class="card-text">Pesanan</p>
    </div>
  </div>

  </div>
    <div class="col-lg-4">
      <div class="card text-white bg-dark mb-3" >
      <div class="card-header">Admin <i class="fa-solid fa-user-tie"></i></div>
      <?php
        $query = "select * from admin"; 
        $sql = mysqli_query($conn,$query);
        $a = mysqli_num_rows($sql);
      ?>
      <div class="card-body">
      <h5 class="card-title"><?= $a ?></h5>
      <p class="card-text">Admin</p>
    </div>
  </div>
<!-- Batas Isi Page -->
</main>