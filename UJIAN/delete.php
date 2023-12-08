<?php
include "koneksi.php";

$id = $_GET["id"];
$query = "DELETE FROM jadwal_ujian WHERE id='$id'"; //menghapus baris dari tabel "jadwal_ujian" berdasarkan ID yang diterima.
$result = $koneksi->query($query);

header("Location: read.php"); //untuk mengarahkan pengguna kembali ke halaman "read.php" setelah proses penghapusan selesai.
exit();
?>
