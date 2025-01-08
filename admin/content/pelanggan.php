<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<!-- Judul Page -->
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h3">Pelanggan</h1>
  </div>
<!-- Batas Judul Page -->

<!-- Isi Page -->
  <!-- Kepala Page -->
    <div class="row">
    <!-- Tombol Tambah Pelanggan -->
      <div class="col-6">
        <a class="btn btn-success" href="index.php?p=tambah_pelanggan" role="button"><i class="fa-solid fa-plus"></i> Tambah Pelanggan</a>
      </div>
    <!-- Batas Tombol -->

    <!-- Tombol Search -->
      <div class="col-6">
        <form action="index.php?p=costumer" method="GET">
          <div class="input-group">
            <input type="hidden" class="form-control" name="p" value="pelanggan">
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

  <!-- Tabel Pelanggan -->
    <div class="table-responsive">
      <table class="table table-bordered table-hover">

    <!-- Kepala Tabel -->
      <thead class="" style="background-color : #e3d18a; color : black">
        <tr class="">
          <th scope="col">ID Pelanggan</th>
          <th scope="col">Email</th>
          <th scope="col">Nama Pelanggan</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Alamat</th>
          <th scope="col">Member</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
    <!-- Batas Kepala Tabel -->

    <!-- Badan Tabel -->
      <tbody>
      <!-- Codingan untuk meneruskan aksi dari Tombol Search -->
        <?php
          if (isset($_GET['cari'])) {
            $cari = '%' . $_GET['cari'] . '%';
            $query = "select * from pelanggan where id_pelanggan like '$cari' or nama_pelanggan like '$cari'";
          } else {
            $cari = '';
            $query = "select * from pelanggan";
          }

          $sql = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_array($sql)) : 
        ?>
      <!-- ### -->
      <!-- Isi Badan Tabel -->
        <tr>
          <th scope="row"><?= $row['id_pelanggan'] ?></th>
          <td><?= $row['email'] ?></td>
          <td><?= $row['nama_pelanggan'] ?></td>
          <td><?= $row['jenis_kelamin'] ?></td>
          <td><?= $row['ttl'] ?></td>
          <td><?= $row['alamat'] ?></td>
          <td><?= $row['member'] ?></td>
          <td><a class="btn-sm btn-warning btn-sm" href="index.php?p=edit_pelanggan&id=<?= $row ['id_pelanggan']; ?>" role="button"><i class="fa-solid fa-pen-to-square"></i> Ubah</a> <a class="btn-sm btn-danger btn-sm" href="aksi_hapus_pelanggan.php?id=<?= $row ['id_pelanggan']; ?>" onclick="return confirm('Delete this Data?')"
          role="button"><i class="fa-solid fa-trash"></i> Hapus</a></td>
        </tr>
        <?php endwhile ?>
      <!-- Batas Isi -->   
      </tbody>
    <!-- Batas Badan Tabel -->
      </table>
    </div>
  <!-- Batas Tabel Pelanggan -->
  
<!-- Batas Isi Page -->
</main>