<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matkul = $_POST["matkul"];
    $waktu = $_POST["waktu"];

    $query = "INSERT INTO jadwal_ujian (matkul, waktu) VALUES ('$matkul', '$waktu')"; //•	Membuat query SQL untuk menambahkan record baru ke dalam tabel
    $result = $koneksi->query($query);

    header("Location: read.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujian</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Tambahkan Jadwal!</h2>
        <form action="create.php" method="post">

            <div class="form-group">
                <label for="matkul">Mata Kuliah:</label>
                <input type="text" class="form-control" name="matkul" required>
            </div>

            <div class="form-group">
                <label for="waktu">Waktu pelaksanaan:</label>
                <input type="text" class="form-control" name="waktu" required>
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js script links -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
