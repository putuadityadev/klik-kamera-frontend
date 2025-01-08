<?php 
session_start();
include '../connection.php';

// Ambil input Form
$user = $_POST['user'];
$pass = $_POST['pass'];

// Query
$sql = "SELECT * FROM admin WHERE username = '$user' AND password = '$pass' ";

$data = mysqli_query($conn,$sql);
$a = mysqli_num_rows($data);

if ($a > 0) {
    $_SESSION['username'] = $user;
    $_SESSION['nama_admin'] = $a['username'];
    header("location:index.php");
} else {
    header("location:login.php");
}