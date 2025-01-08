<?php
include "../connection.php";

$id_b = $_GET['id_billing'];
$id_ci = $_GET['id_checkin'];
$harga = $_GET['harga'];

// Delete Billing
$sql = "delete from billing where id_billing='$id_b'";
mysqli_query($conn, $sql);

// Delete Checkin
$sql1 = "delete from checkin where id_checkin='$id_ci'";
mysqli_query($conn, $sql1);

// Simpan ke Tabel Checkout
$sql2 = "insert into checkout values ('','$id_ci','$harga', now())";
mysqli_query($conn, $sql2);
header('location:index.php?p=checkout');