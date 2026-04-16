<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$tanggal = date('Y-m-d H:i:s');

mysqli_query($conn, "INSERT INTO buku_tamu (nama,email,pesan,tanggal)
VALUES ('$nama','$email','$pesan','$tanggal')");

header("Location: buku_tamu.php");
?>