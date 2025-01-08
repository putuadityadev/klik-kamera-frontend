<?php include '../connection.php';

// Mengambil Inputan dari FORM

$kategori = $_POST['kategori'];
$namaproduk = $_POST['nama_p'];
$harga = $_POST['harga'];
$gambar = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$stok = $_POST['stok'];

// Set Path folder tempat penyimpanan fotonya
$path = "image/" . $gambar;

if (move_uploaded_file($tmp, $path)) {
    echo "Gambar berhasil diupload.";
} else {
    echo "Gagal mengupload gambar.";
} // Cek apakah gambar berhasil diupload atau tidak

// Simpan ke Database
// Perintah Insert
$sql = "insert into produk (id_produk,id_kategori,nama_produk,harga,foto,stok) values ('','$kategori','$namaproduk','$harga','$gambar','$stok')";

mysqli_query($conn, $sql);
header('location:index.php?p=produk');