<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "keanggotaan";

$koneksi = mysqli_connect($host, $user, $pass,$dbname);
if (!$koneksi){
die("gagal koneksi . . .");
}else{
echo 'Koneksi Berhasil';
}

?>