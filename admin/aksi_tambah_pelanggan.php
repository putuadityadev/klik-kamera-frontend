<?php include '../connection.php';

// Mengambil Inputan dari FORM

$email = $_POST['email'];
$nama = $_POST['nama_c'];
$jk = $_POST['jk'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$member = $_POST['member'];
$pass = $_POST['password'];
// $date = $_POST['date'];

// Simpan ke Database
// Perintah Insert
$sql = "insert into pelanggan (id_pelanggan,email,nama_pelanggan,jenis_kelamin,ttl,alamat,member,password) values ('','$email','$nama','$jk','$ttl','$alamat','$member','$pass')";

mysqli_query($conn, $sql);
header('location:index.php?p=pelanggan');