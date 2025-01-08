<?php include '../connection.php';

// Mengambil Inputan dari FORM
$id = $_POST['id_c'];
$email = $_POST['email'];
$nama = $_POST['nama_c'];
$jk = $_POST['jk'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$member = $_POST['member'];


// Simpan ke Database
// Perintah Edit
$sql = "UPDATE pelanggan SET
email = '$email',
nama_pelanggan = '$nama',
jenis_kelamin = '$jk',
ttl = '$ttl',
alamat = '$alamat',
member = '$member'
where id_pelanggan = '$id'";


mysqli_query($conn, $sql);
header('location:index.php?p=pelanggan');