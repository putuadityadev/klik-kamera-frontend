<?php
include "../connection.php";

$id = $_GET['id'];
$sql = "delete from paket where id_paket='$id'";
mysqli_query($conn, $sql);
header('location:index.php?p=paket');