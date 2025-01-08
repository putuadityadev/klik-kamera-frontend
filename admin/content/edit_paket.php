<?php
    $id = $_GET['id'];

    $query = "select * from paket where id_paket='$id'";
    $sql = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($sql);
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<!-- Judul Form -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Menu Paket</h1>
    </div>
<!-- Batas Judul -->

<!-- Penambahan Data -->
    <form method="POST" action="aksi_edit_paket.php">
    <div class="form-group">
        <label for="id_p">Id Paket</label>
        <input type="text" class="form-control" name="id_p" readonly value="<?= $row ['id_paket']; ?>">
    </div>
    <div class="form-group">
        <label for="nama_p">Nama Paket</label>
        <input type="text" class="form-control" name="nama_p" required value="<?= $row ['nama_paket']; ?>">
    </div>
    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="text" class="form-control" name="harga" required value="<?= $row ['harga']; ?>">
    </div>
    <!-- KETERANGAN -->
    <label for="keterangan">Keterangan</label>
    <div class="form-group">
        <textarea name="keterangan" id="keterangan" rows="4" cols="50" required><?= $row ['keterangan']; ?></textarea>
    </div>
    <button type="submit" class="btn-sm btn-warning" onclick="return confirm('Ubah Data?')">Ubah</button>
<!-- Batas Penambahan Data -->
</form>
</main>