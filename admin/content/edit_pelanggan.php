<!-- Mendapatkan Data dari Database -->
    <?php
        $id = $_GET['id'];

        $query = "select * from pelanggan where id_pelanggan='$id'";
        $sql = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($sql);
    ?>
<!-- ### -->

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<!-- Judul Form -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Pelanggan</h1>
    </div>
<!-- Batas Judul -->

<!-- Penambahan Data -->
    <form method="POST" action="aksi_edit_pelanggan.php">
    <div class="form-group">
        <label for="id_c">ID Pelanggan</label>
        <input type="text" class="form-control" name="id_c" readonly value="<?= $row ['id_pelanggan']; ?>">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" required value="<?= $row ['email']; ?>">
    </div>
    <div class="form-group">
        <label for="nama_c">Nama Pelanggan</label>
        <input type="text" class="form-control" name="nama_c" required value="<?= $row ['nama_pelanggan']; ?>">
    </div>
    <label for="jk">Jenis Kelamin</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki-laki">
        <label class="form-check-label" for="jk">
        Laki - laki
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="jk" id="jk" value="Perempuan">
        Perempuan
        </label>
    </div>
    <br>
    <div class="form-group">
        <label for="ttl">Tanggal Lahir</label>
        <input type="date" class="form-control" name="ttl" required value="<?= $row ['ttl']; ?>">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat" rows="5" required value="<?= $row ['alamat']; ?>"></textarea>
    </div>
    <label for="member">Member</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="member" id="member" value="Yes">
        <label class="form-check-label" for="member">
        Yes
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="member" id="member" value="No">
        No
        </label>
    </div>
    <br>
    <button type="submit" class="btn-sm btn-warning" onclick="return confirm('Ubah Data?')">Ubah</button>
<!-- Batas Penambahan Data -->
</form>
</main>