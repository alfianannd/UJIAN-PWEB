<?php
include "koneksi.php"; //koneksi ke database MySQL

$query = "SELECT * FROM jadwal_ujian"; //mengambil semua data dari tabel "jadwal_ujian".
$result = $koneksi->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
      
        body {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Jadwal Ujian</h2>
        <a class="btn btn-primary mb-3" href="create.php">Tambah Jadwal</a>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr> 
                    <th>ID</th>
                    <th>Mata Kuliah</th>
                    <th>Waktu Pelaksanaan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $hitung = 1; //Menginisialisasi variabel $hitung untuk menyimpan nomor urut.
            while ($row = $result->fetch_assoc()) { //untuk mengambil setiap baris hasil query sebagai array asosiatif menggunakan fetch_assoc.
                echo "<tr> 
                        <td>{$hitung}</td>
                        <td>{$row['matkul']}</td>
                        <td>{$row['waktu']}</td>
                        <td>
                            <a class='btn btn-warning btn-sm' href='update.php?id={$row['id']}'> Edit</a>
                            <a class='btn btn-danger btn-sm' href='delete.php?id={$row['id']}'>Delete</a>
                        </td>
                      </tr>";
                $hitung++;
            }
            ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and Popper.js script links -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
