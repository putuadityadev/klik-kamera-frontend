<?php include '../connection.php';

// Mengambil Inputan dari FORM
$id = $_POST['idp'];
$kategori = $_POST['kategori'];
$namaproduk = $_POST['nama_p'];
$harga = $_POST['harga'];
$gambar = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$stok = $_POST['stok'];

// Simpan ke Database
// Perintah Edit
$sql = "UPDATE produk SET
id_kategori = '$kategori',
nama_produk = '$namaproduk',
harga = '$harga',
foto = '$gambar',
stok = '$stok'
where id_produk = '$id'
";
// $sql = "update admin set (id_admin,nama_admin,username,password) values ('','$nama','$user','$pass')";

mysqli_query($conn, $sql);
header('location:index.php?p=produk');