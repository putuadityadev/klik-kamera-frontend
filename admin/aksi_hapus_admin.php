<?php
include "../connection.php";

$id = $_GET['id'];
$sql = "delete from admin where id_admin='$id'";
mysqli_query($conn, $sql);
header('location:index.php?p=admin');