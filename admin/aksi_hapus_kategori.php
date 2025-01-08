<?php
include "../connection.php";

$id = $_GET['id'];
$sql = "delete from kategori where id_kategori='$id'";
mysqli_query($conn, $sql);
header('location:index.php?p=kategori');