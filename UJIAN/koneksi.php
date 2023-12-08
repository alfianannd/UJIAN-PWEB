<?php
$host = "localhost"; //Menyimpan nama host database
$username = "root"; //Menyimpan nama pengguna database
$password = ""; //Menyimpan kata sandi untuk pengguna database.
$database = "project"; //Menyimpan nama database yang akan digunakan

$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}
?>
