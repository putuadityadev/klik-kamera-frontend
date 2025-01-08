<!-- Mendapatkan Data dari Database -->
    <?php
        $id = $_GET['id'];

        $query = "select * from produk where id_produk='$id'";
        $sql = mysqli_query($conn, $query);
        $a = mysqli_fetch_array($sql);
    ?>
<!-- ### -->

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<!-- Judul Form -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ubah Data Produk</h1>
    </div>
<!-- Batas Judul -->

<!-- Penambahan Data -->
<form method="POST" action="aksi_edit_produk.php" enctype="multipart/form-data">
<div class="form-group">
        <label for="idp">Id Produk</label>
        <input type="text" class="form-control" name="idp" readonly value="<?= $a ['id_produk']; ?>">
    </div>
    <div class="form-group">
    <label for="kategori">Pilih Kategori</label><br>
    <select class="form-control" name="kategori" id="kategori">
        <option value="#">Pilih Jenis Kategori</option>
        <?php
        $query = "SELECT id_kategori, nama_kategori FROM kategori";
        $sql = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_array($sql)) :
            // Bandingkan id_kategori dari tabel kategori dengan id_kategori produk
            $selected = ($row['id_kategori'] == $a['id_kategori']) ? 'selected' : '';
        ?>
        <option value="<?= $row['id_kategori']; ?>" <?= $selected; ?>>
            <?= $row['nama_kategori']; ?>
        </option>
        <?php endwhile; ?>
    </select>
</div>
    <div class="form-group">
        <label for="nama_p">Nama Produk</label>
        <input type="text" class="form-control" name="nama_p" required value="<?= $a ['nama_produk']; ?>">
    </div>
    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="number" class="form-control" name="harga" required value="<?= $a ['harga']; ?>">
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
            value="<?= $row['foto'];?>"
        >
    </div>
    <div class="form-group">
        <label for="stok">Stok</label>
        <input type="text" class="form-control" name="stok" required value="<?= $a ['stok']; ?>">
    </div>
    <button type="submit" class="btn-sm btn-warning" onclick="return confirm('Ubah Data?')">Ubah</button>
<!-- Batas Penambahan Data -->
</form>
</main>