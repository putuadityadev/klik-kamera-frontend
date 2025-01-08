<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h3">Check-Out</h1>
  </div>

  <div class="row">
    <div class="col-6">
      <!-- <a class="btn btn-success" href="index.php?p=tambah_billing" role="button">Tambah Pembayaran</a> -->
    </div>
    <div class="col-6">
      <form action="index.php?p=checkout" method="GET">
        <div class="input-group">
          <input type="hidden" class="form-control" name="p" value="checkout">
          <input type="search" class="form-control" name="cari">
          <div class="input-group-prepend">
            <button type="submit" class="btn" style="background-color : #bd9354; color : white">
            Cari !
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <br>

  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead class="" style="background-color : #e3d18a; color : black">
        <tr class="">
          <th scope="col">ID Check Out</th>
          <th scope="col">ID Check In</th>
          <th scope="col">Harga</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (isset($_GET['cari'])) {
          $cari = '%' . $_GET['cari'] . '%';
          $query = "select * from checkout where id_checkout like '$cari' or harga like '$cari' or id_checkin like '$cari'";
        } else {
          $cari = '';
          $query = "select * from checkout";
        }
            $sql = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($sql)) : 
        ?>
        <tr>
          <th scope="row"><?= $row['id_checkout'] ?></th>
          <td><?= $row['id_checkin'] ?></td>
          <td><?= $row['harga'] ?></td>
          <td><?= $row['date'] ?></td>
          <td><a class="btn-sm btn-success" href="index.php?p=edit_billing&id=<?= $row ['id_billing']; ?>" role="button">Delete</a></td>
        </tr>
        <?php endwhile ?>
      </tbody>
    </table>
  </div>
</main>