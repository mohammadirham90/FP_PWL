<?php 
$db_host = "localhost";
$db_user = "moh_irham";
$db_pas = "1122334455";
$db_nama = "db_perpus";

$conn = mysqli_connect($db_host,$db_user,$db_pas,$db_nama);

if(!$conn){
    die ("koneksi anda gagal");
}else{
    echo "<script>alert (koneksi berhasil);<script>";
}

?>