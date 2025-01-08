<!-- CARROUSELL -->
 <div class="row">
    <div class="col-12">
<div class="container" >
<div id="carouselExampleIndicators" class="carousel slide" style="padding: 80px">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" ></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div style="padding: 4px">
  <div class="carousel-inner " >
    <div class="carousel-item active" >
      <img src="asset/paket11.jpg" class="d-block w-100" alt="..." style="height : auto">
    </div>
    <div class="carousel-item">
      <img src="asset/paket22.jpg" class="d-block w-100" alt="..." style="height : auto">
    </div>
    <div class="carousel-item">
      <img src="asset/paket11.jpg" class="d-block w-100" alt="..." style="height : auto">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
</div>
</div>
</div>
</div>
<!-- BATAS CARROUSEL -->
    <!-- SEARCH -->
 <div class="row">
    <div class="col-12">
      <div class="container">
    <div class="input-group mb-5">
  <input type="text" class="form-control" placeholder="Sony, Lensa, Fujifilm" aria-label="Sony, Lensa, Fujifilm" aria-describedby="button-addon2" style="color: #052347;">
  <button class="btn btn-outline-secondary" type="button" id="button-addon2" style="color: #052347;">Cari <i class="fa-solid fa-magnifying-glass" style="color: #052347;"></i></button>
</div>
      </div>
    </div>
 </div>
    <!-- BATAS SEARCH -->
      <!-- TAMPILAN PRODUK -->
       <?php 
        $query = "SELECT p.*, k.nama_kategori 
        FROM produk p
        JOIN kategori k ON p.id_kategori = k.id_kategori";
       $sql = mysqli_query($conn, $query);
       $row = mysqli_fetch_assoc($sql)
       ?>
 <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-star"></i><?= $row['nama_kategori'] ?></h5>
                        <p class="card-text">Some quick example text to build on the card title.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-check-circle"></i> Feature Two</h5>
                        <p class="card-text">Some quick example text to build on the card title.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-rocket"></i> Feature Three</h5>
                        <p class="card-text">Some quick example text to build on the card title.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <hr>
