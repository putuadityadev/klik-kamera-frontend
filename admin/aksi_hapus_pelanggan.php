<?php
include "../connection.php";

$id = $_GET['id'];
$sql = "delete from pelanggan where id_pelanggan='$id'";
mysqli_query($conn, $sql);
header('location:index.php?p=pelanggan');