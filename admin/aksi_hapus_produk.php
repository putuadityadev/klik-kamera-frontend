<?php
include "../connection.php";

$id = $_GET['id'];
$sql = "delete from produk where id_produk='$id'";
mysqli_query($conn, $sql);
header('location:index.php?p=produk');