<!-- Mendapatkan Data dari Database -->
    <?php
        $idr = $_GET['id'];

        $query = "select * from kategori where id_kategori='$idr'";
        $sql = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($sql);
    ?>
<!-- ### -->

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<!-- Judul Form -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ubah Data Kategori</h1>
    </div>
<!-- Batas Judul Form -->

<!-- Penambahan Data -->
    <form method="POST" action="aksi_edit_kategori.php">
    <div class="form-group">
        <label for="idk">Id Kategori</label>
        <input type="text" class="form-control" name="idk" readonly value="<?= $row ['id_kategori']; ?>">
    </div>
    <div class="form-group">
        <label for="nama_kategori">Nama Kategori</label>
        <input type="text" class="form-control" name="nama_kategori" value="<?= $row ['nama_kategori']; ?>">
    </div>
    <button type="submit" class="btn-sm btn-warning" onclick="return confirm('Ubah Data?')">Ubah</button>
<!-- Batas Penambahan Data -->
</form>
</main>