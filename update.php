<?php 

include 'koneksi.php';
$id = $_POST['id'];
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"UPDATE user SET npm ='$npm' , nama='$nama', alamat='$alamat' WHERE id='$id'");

header("location:index.php?pesan=update");

?>