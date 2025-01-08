<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3">Tambah Produk</h1>
    </div>
<!-- Penambahan Data -->
    <form method="POST" action="aksi_tambah_produk.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="kategori">Pilih Kategori</label><br>
        <select class="form-control" name="kategori" id="kategori">
            <option value="#">Pilih Jenis Kategori</option>
            <?php
                $query = "SELECT id_kategori, nama_kategori FROM kategori";
                $sql = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($sql)) : 
            ?>
            <option value="<?= $row['id_kategori'] ?>"> <?= $row['nama_kategori'] ?> </option>
            <?php endwhile ?>
        </select>
    </div>
    <div class="form-group">
        <label for="nama_p">Nama Produk</label>
        <input type="text" class="form-control" name="nama_p" required placeholder="Masukkan Nama Produk">
    </div>
    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="number" class="form-control" name="harga" required placeholder="Masukkan Harga">
    </div>
    <div class="form-group">
        <label for="foto">Upload Foto Produk</label>
        <input 
            type="file" 
            class="form-control-file" 
            name="foto" 
            id="foto" 
            accept=".jpg,.jpeg,.png,.raw" 
            required
        >
    </div>
    <div class="form-group">
        <label for="stok">Stok</label>
        <input type="text" class="form-control" name="stok" required placeholder="Masukkan Jumlah Stok">
    </div>
    <button type="submit" class="btn-sm btn-success">Kirim</button>
<!-- Batas Penambahan Data -->
</form>
</main>