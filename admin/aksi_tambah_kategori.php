<?php include '../connection.php';

// Mengambil Inputan dari FORM

$idk = $_POST['id_k'];
$nama = $_POST['nama_kategori'];

// $date = $_POST['date'];

// Simpan ke Database
// Perintah Insert
$sql = "insert into kategori (id_kategori,nama_kategori) values ('','$nama')";

mysqli_query($conn, $sql);
header('location:index.php?p=kategori');