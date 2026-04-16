<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM buku_tamu WHERE id='$id'");

header("Location: buku_tamu.php");
?>