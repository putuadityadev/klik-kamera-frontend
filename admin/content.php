<?php
if (empty($_GET)) {
    include "content/dashboard.php";
} else if ($_GET['p'] == 'dashboard') {
    include "content/dashboard.php";
} else if ($_GET['p'] == 'admin') {
    include "content/admin.php";
} else if ($_GET['p'] == 'pelanggan') {
    include "content/pelanggan.php";
} else if ($_GET['p'] == 'produk') {
    include "content/produk.php";
} else if ($_GET['p'] == 'paket') {
    include "content/paket.php";
} else if ($_GET['p'] == 'kategori') {
    include "content/kategori.php";
} else if ($_GET['p'] == 'checkin') {
    include "content/checkin.php";
} else if ($_GET['p'] == 'billing') {
    include "content/billing.php";
} else if ($_GET['p'] == 'checkout') {
    include "content/checkout.php";
}
    // Tambah
  else if ($_GET['p'] == 'tambah_admin') {
    include "content/tambah_admin.php";
} else if ($_GET['p'] == 'tambah_pelanggan') {
    include "content/tambah_pelanggan.php";
} else if ($_GET['p'] == 'tambah_paket') {
    include "content/tambah_paket.php";
} else if ($_GET['p'] == 'tambah_produk') {
    include "content/tambah_produk.php";
} else if ($_GET['p'] == 'tambah_kategori') {
    include "content/tambah_kategori.php";
} else if ($_GET['p'] == 'tambah_checkin') {
    include "content/tambah_checkin.php";
} else if ($_GET['p'] == 'tambah_billing') {
    include "content/tambah_billing.php";
}
    // Edit
  else if ($_GET['p'] == 'edit_admin') {
    include "content/edit_admin.php";
} else if ($_GET['p'] == 'edit_pelanggan') {
    include "content/edit_pelanggan.php";
} else if ($_GET['p'] == 'edit_paket') {
    include "content/edit_paket.php";
} else if ($_GET['p'] == 'edit_produk') {
    include "content/edit_produk.php";
} else if ($_GET['p'] == 'edit_kategori') {
    include "content/edit_kategori.php";
} else if ($_GET['p'] == 'edit_checkin') {
    include "content/edit_checkin.php";
}