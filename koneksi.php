<?php   
$server = "localhost";
$host = "root";
$password = "";
$database = "p_sekolah";

$koneksi = mysqli_connect($server, $host, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
