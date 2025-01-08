<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<!-- Judul Page -->
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h3">Kategori</h1>
  </div>
<!-- Batas Judul Page -->

<!-- Isi Page -->
  <!-- Kepala Page -->
    <div class="row">
    <!-- Tombol Tambah Reservasi -->
      <div class="col-6">
        <a class="btn btn-success" href="index.php?p=tambah_kategori" role="button"><i class="fa-solid fa-plus"></i> Tambah Kategori</a>
      </div>
    <!-- Batas Tombol -->

    <!-- Tombol Search -->
      <div class="col-6">
        <form action="index.php?p=kategori" method="GET">
          <div class="input-group">
            <input type="hidden" class="form-control" name="p" value="kategori">
            <input type="search" class="form-control" name="cari">
            <div class="input-group-prepend">
              <button type="submit" class="btn" style="background-color : #bd9354; color : white">
              Cari <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    <!-- Batas Tombol -->
    </div>
  <!-- Batas Kepala Page -->
  <br>

  <!-- Tabel Reservasi -->
    <div class="table-responsive">
      <table class="table table-bordered table-hover">

      <!-- Kepala Tabel -->
        <thead class="" style="background-color : #e3d18a; color : black">
          <tr class="">
            <th scope="col">Id kategori</th>
            <th scope="col">Nama kategori</th>
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
              $query = "select * from kategori where id_kategori like '$cari' or nama_kategori like '$cari'";
            } else {
              $cari = '';
              $query = "select * from kategori";
            }
    
            $sql = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($sql)) : 
          ?>
        <!-- ### -->

        <!-- Isi Badan Tabel -->
          <tr>
            <th scope="row"><?= $row['id_kategori'] ?></th>
            <td><?= $row['nama_kategori'] ?></td>
            <td><a class="btn-sm btn-warning" href="index.php?p=edit_kategori&id=<?= $row ['id_kategori']; ?>" role="button"><i class="fa-solid fa-pen-to-square"></i> Ubah</a> <a class="btn-sm btn-danger" href="aksi_hapus_kategori.php?id=<?= $row ['id_kategori']; ?>" onclick="return confirm('Hapus Data?')"role="button"><i class="fa-solid fa-trash"></i> Hapus</a></td>
          </tr>
          <?php endwhile ?>
        <!-- Batas Isi -->
        </tbody>
      <!-- Batas Badan Tabel -->
      </table>
    </div>
  <!-- Batas Tabel Reservasi -->

<!-- Batas Isi Page -->
</main>