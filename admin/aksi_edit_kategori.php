<?php include '../connection.php';

// Mengambil Inputan dari FORM

$idk = $_POST['idk'];
$nama_kategori = $_POST['nama_kategori'];

// Simpan ke Database
// Perintah Update
$sql = "UPDATE kategori SET
id_kategori = '$idk',
nama_kategori = '$nama_kategori'
where id_kategori = '$idk'
";

mysqli_query($conn, $sql);
header('location:index.php?p=kategori');