<?php 
$koneksi = mysqli_connect ("localhost","root","","mhs");

if(mysqli_connect_error()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}
function query($query) {
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while ($data = mysqli_fetch_assoc($result) ){
        $rows[] = $data;
    }
    return $rows;
}
?>