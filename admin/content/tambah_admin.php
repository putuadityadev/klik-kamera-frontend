<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<!-- Judul Form -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3">Tambahkan Admin</h1>
    </div>
<!-- Batas Judul -->

<!-- Penambahan Data -->
    <form method="POST" action="aksi_tambah_admin.php" class="was-validated">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control is-invalid" name="email" placeholder="Masukkan Email, Contoh : nama@email.com" required>
    </div>
    <div class="form-group">
        <label for="nama_a">Nama Admin</label>
        <input type="text" class="form-control is-invalid" name="nama_a" required placeholder="Masukkan Nama">
    </div>
    <div class="form-group">
        <label for="nama_a">username</label>
        <input type="text" class="form-control is-invalid" name="username" required placeholder="Masukkan Username">
    </div>
    <label for="jk">Jenis Kelamin</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki-laki">
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
        <input type="date" class="form-control" name="ttl" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control is-invalid" name="alamat" id="alamat" rows="3" required placeholder="Masukkan Detail Alamat"></textarea>
    </div>
    <div class="form-group">
        <label for="password">Sandi</label>
        <input type="password" class="form-control is-invalid" name="password" required minlength="6" placeholder="Masukkan Sandi Minimal 6 Karakter">
    </div>
    <button type="submit" class="btn-sm btn-success">Kirim</button>
<!-- Batas Penambahan Data -->
</form>
</main>