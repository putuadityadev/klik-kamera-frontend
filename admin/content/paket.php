<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<!-- Judul Page -->
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h3">Daftar Paket Bundling</h1>
  </div>
<!-- Batas Judul Page -->

<!-- Isi Page -->
  <!-- Kepala Page -->
    <div class="row">
    <!-- Tombol Tambah J.Kasur -->
      <div class="col-6">
        <a class="btn btn-success" href="index.php?p=tambah_paket" role="button"><i class="fa-solid fa-plus"></i> Tambah Paket</a>
      </div>
    <!-- Batas Tombol -->

    <!-- Tombol Search -->
      <div class="col-6">
        <form action="index.php?p=paket" method="GET">
          <div class="input-group">
            <input type="hidden" class="form-control" name="p" value="bed">
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

  <!-- Tabel J.Kasur -->
    <div class="table-responsive">
      <table class="table table-bordered table-hover">

    <!-- Kepala Tabel -->
      <thead class="" style="background-color : #e3d18a; color : black">
        <tr class="">
          <th scope="col">Id Paket</th>
          <th scope="col">Nama Paket</th>
          <th scope="col">Harga</th>
          <th scope="col">Keterangan</th>
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
              $query = "select * from paket where id_paket like '$cari' or nama_paket like '$cari'";
            } else {
              $cari = '';
              $query = "select * from paket";
            }
            $sql = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($sql)) : 
          ?>
        <!-- ### -->

        <!-- Isi Badan Tabel -->
          <tr>
            <th scope="row"><?= $row['id_paket'] ?></th>
            <td><?= $row['nama_paket'] ?></td>
            <td><?= $row['harga'] ?></td>
            <td><?= $row['keterangan'] ?></td>
            <td><a class="btn-sm btn-warning" href="index.php?p=edit_paket&id=<?= $row ['id_paket']; ?>" role="button"><i class="fa-solid fa-pen-to-square"></i> Ubah</a> <a class="btn-sm btn-danger" href="aksi_hapus_paket.php?id=<?= $row ['id_paket']; ?>" onclick="return confirm('Delete this Data?')"
            role="button"><i class="fa-solid fa-trash"></i> Hapus</a></td>
          </tr>
          <?php endwhile ?>
        <!-- Batas Isi -->
        </tbody>
    <!-- Batas Badan Tabel -->
      </table>
    </div>
  <!-- Batas Tabel J.Kasur -->

<!-- Batas Isi Page -->
</main>