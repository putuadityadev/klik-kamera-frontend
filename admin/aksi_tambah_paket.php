<?php include '../connection.php';

// Mengambil Inputan dari FORM

$nama_p = $_POST['nama_p'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];

// Simpan ke Database
// Perintah Insert
$sql = "insert into paket (id_paket,nama_paket,harga,keterangan) values ('','$nama_p', '$harga', '$keterangan')";

mysqli_query($conn, $sql);
header('location:index.php?p=paket');