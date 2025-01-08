<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<!-- Judul Page -->
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h3">Daftar Produk</h1>
  </div>
<!-- Batas Judul Page -->

<!-- Isi Page -->
  <!-- Kepala Page -->
    <div class="row">
    <!-- Tombol Tambah Kamar -->
      <div class="col-6">
        <a class="btn btn-success" href="index.php?p=tambah_produk" role="button"><i class="fa-solid fa-plus"></i> Tambah Produk</a>
      </div>
    <!-- Batas Tombol -->

    <!-- Tombol Search -->
      <div class="col-6">
        <form action="index.php?p=produk" method="GET">
          <div class="input-group">
            <input type="hidden" class="form-control" name="p" value="produk">
            <input type="search" class="form-control" name="cari">
            <div class="input-group-prepend">
              <button type="submit" class="btn" style="background-color : #bd9354; color : white">Cari <i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
          </div>
        </form>
      </div>
    <!-- Batas Tombol -->
    </div>
  <!-- Batas Kepala Page -->
  <br>
  
  <!-- Tabel Kamar -->
    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        
      <!-- Kepala Tabel -->
        <thead class="" style="background-color : #e3d18a; color : black">
          <tr class="">
            <th scope="col">Id Produk</th>
            <th scope="col">Kategori</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Foto</th>
            <th scope="col">Stok</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
      <!-- Batas Kepala -->

      <!-- Badan Tabel -->
        <tbody>
        <!-- Codingan untuk meneruskan aksi dari Tombol Search -->
          <?php
            if (isset($_GET['cari'])) {
              $cari = '%' . $_GET['cari'] . '%';
              $query = "SELECT p.*, k.nama_kategori FROM produk p
              JOIN kategori k ON p.id_kategori = k.id_kategori
              WHERE p.id_produk LIKE '$cari' 
                 OR p.nama_produk LIKE '$cari' 
                 OR p.harga LIKE '$cari'";
              } else 
              {
              $query = "SELECT p.*, k.nama_kategori 
              FROM produk p
              JOIN kategori k ON p.id_kategori = k.id_kategori";}

$sql = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($sql)) :
    // Debugging untuk path gambar
    $gambarPath = "image/" . $row['foto'];
    if (!file_exists($gambarPath)) {
        $gambarPath = "image/default.jpg"; // Path default jika file tidak ditemukan
    } 
          ?>
        <!-- ### -->

        <!-- Isi Badan Tabel -->
          <tr>
            <th scope="row"><?= $row['id_produk'] ?></th>
            <td><?= $row['nama_kategori'] ?></td>
            <td><?= $row['nama_produk'] ?></td>
            <td><?= $row['harga'] ?></td>
            <td><img src="image/<?= $row['foto'] ?>" alt="Gambar Produk" width="140" height="100"></td>
            <td><?= $row['stok'] ?></td>
            <td><a class="btn-sm btn-warning" href="index.php?p=edit_produk&id=<?= $row ['id_produk']; ?>" role="button"><i class="fa-solid fa-pen-to-square"></i> Ubah</a> <a class="btn-sm btn-danger" href="aksi_hapus_produk.php?id=<?= $row ['id_produk']; ?>" onclick="return confirm('Hapus Data Ini?')" role="button"><i class="fa-solid fa-trash"></i> Hapus</a></td>
          </tr>
          <?php endwhile ?>
        <!-- Batas Isi -->
        </tbody>
      <!-- Batas Badan Tabel -->
      </table>
    </div>
  <!-- Batas Tabel Kamar -->
    
<!-- Batas Isi Page -->
</main>