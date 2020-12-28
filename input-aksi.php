<?php 
include 'koneksi.php';
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"INSERT INTO user VALUES('$npm','$nama','$alamat')");

header("location:index.php?pesan=input");
?>