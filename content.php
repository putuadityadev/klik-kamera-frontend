<?php
if (empty($_GET)) {
    include "content/home.php";
} else if ($_GET['p'] == 'home') {
    include "content/home.php";
} else if ($_GET['p'] == 'produkkami') {
    include "content/produkkami.php";
}  else if ($_GET['p'] == 'paket') {
    include "content/paket.php";
}  else if ($_GET['p'] == 'syarat') {
    include "content/syarat.php";
}  else if ($_GET['p'] == 'informasi') {
    include "content/informasi.php";
} ?>