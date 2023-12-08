<?php
include "koneksi.php";

$query = "SELECT * FROM jadwal_ujian";
$result = $koneksi->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujian</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Additional style to add some margin at the top */
        body {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Jadwal Ujian</h2>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Mata Kuliah</th>
                    <th>Waktu Pelaksanaan</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $hitung = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$hitung}</td>
                        <td>{$row['matkul']}</td>
                        <td>{$row['waktu']}</td>
                      </tr>";
                $hitung++;
            }
            ?>
            </tbody>
        </table>
        <a class="btn btn-primary" href="index.php">Back</a>
    </div>

    <!-- Bootstrap JS and Popper.js script links -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

