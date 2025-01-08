<!-- Mendapatkan Data dari Database -->
    <?php
        $id = $_GET['id'];

        $query = "select * from admin where id_admin='$id'";
        $sql = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($sql);
    ?>
<!-- ### -->

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<!-- Judul Form -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3">Ubah Data Admin</h1>
    </div>
<!-- Batas Judul -->

<!-- Pengubahan Data -->
    <form method="POST" action="aksi_edit_admin.php">
        <div class="form-group">
            <label for="id_a">ID Admin</label>
            <input type="text" class="form-control" name="id_a" readonly value="<?= $row ['id_admin']; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" required value="<?= $row ['email']; ?>">
        </div>
        <div class="form-group">
            <label for="nama_a">Nama Admin</label>
            <input type="text" class="form-control" name="nama_a" required value="<?= $row ['nama_admin']; ?>">
        </div>
        <div class="form-group">
            <label for="username">Nama Pengguna</label>
            <input type="text" class="form-control" name="username" required  value="<?= $row ['username']; ?>">
        </div>
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
        <textarea class="form-control" name="alamat" id="alamat" rows="5" required value="<?= $row ['alamat']; ?>"><?= $row ['alamat']; ?></textarea>
    </div>
    <div class="form-group">
        <label for="password">Sandi</label>
        <input type="password" class="form-control" name="password" value="<?= $row ['password']; ?>" required minlength="6" placeholder="Masukkan Sandi Minimal 6 Karakter">
    </div>
        <button type="submit" class="btn-sm btn-warning" onclick="return confirm('Ubah Data?')">Ubah</button>
    </form>
<!-- Batas Pengubahan Data -->

</main>