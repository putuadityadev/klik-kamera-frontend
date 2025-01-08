<?php include '../connection.php';

// Mengambil Inputan dari FORM

$email = $_POST['email'];
$nama = $_POST['nama_a'];
$username = $_POST['username'];
$jk = $_POST['jk'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$pass = $_POST['password'];
// Simpan ke Database
// Perintah Insert
$sql = "insert into admin (id_admin,email,nama_admin,username,jenis_kelamin,ttl,alamat,password) values ('','$email','$nama','$username','$jk','$ttl','$alamat','$pass')";

mysqli_query($conn, $sql);
header('location:index.php?p=admin');