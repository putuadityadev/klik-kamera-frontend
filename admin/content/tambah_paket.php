<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<!-- Judul Form -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3">Tambah Menu Paket</h1>
    </div>
<!-- Batas Judul -->

<!-- Penambahan Data -->
    <form method="POST" action="aksi_tambah_paket.php">
    <div class="form-group">
        <label for="nama_p">Nama Paket</label>
        <input type="text" class="form-control" name="nama_p" required placeholder="Tuliskan Nama Paketan">
    </div>
    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="text" class="form-control" name="harga" required placeholder="Tuliskan Harga Paket">
    </div>
    <!-- KETERANGAN -->
    <label for="keterangan">Keterangan</label>
    <div class="form-group">
        <textarea name="keterangan" id="keterangan" rows="4" cols="50" required placeholder="Tuliskan Keterangan Paket"></textarea>
    </div>
    <button type="submit" class="btn-sm btn-success">Kirim</button>
<!-- Batas Penambahan Data -->
</form>
</main>