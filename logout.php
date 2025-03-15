<?php
include("koneksi.php");
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
session_start();
session_destroy();
header("Location: login.php")
?>
