<?php include '../connection.php';

// Mengambil Inputan dari FORM
$id = $_POST['id_p'];
$nama_p = $_POST['nama_p'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];

// Simpan ke Database
// Perintah Edit
$sql = "UPDATE paket SET
nama_paket = '$nama_p',
harga = '$harga',
keterangan = '$keterangan'
where id_paket = '$id'
";
// $sql = "update admin set (id_admin,nama_admin,username,password) values ('','$nama','$user','$pass')";

mysqli_query($conn, $sql);
header('location:index.php?p=paket');