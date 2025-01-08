<?php include '../connection.php';

// Mengambil Inputan dari FORM
$id = $_POST['id_a'];
$email = $_POST['email'];
$nama = $_POST['nama_a'];
$username = $_POST['username'];
$jk = $_POST['jk'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$password = $_POST['password'];

// Simpan ke Database
// Perintah Edit
$sql = "UPDATE admin SET
email = '$email',
nama_admin = '$nama',
jenis_kelamin = '$jk',
ttl = '$ttl',
alamat = '$alamat',
password = '$password'
where id_admin = '$id'";

mysqli_query($conn, $sql);
header('location:index.php?p=admin');