<?php 
include 'koneksi.php';
if(isset($_POST['submit_delete'])){
			$npm = $_POST['npm'];
			$sql = "DELETE FROM mhs
					WHERE npm='$npm'";
			if(!$conn->query($sql))
								die('Hapus MHS Gagal');
			else
								header("Location: mhs.php");
}
?>