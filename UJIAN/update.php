<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $matkul = $_POST["matkul"];
    $waktu = $_POST["waktu"];
   

    $query = "UPDATE jadwal_ujian SET matkul='$matkul', waktu='$waktu' WHERE id='$id'";
    //untuk memperbarui record dalam tabel "jadwal_ujian" berdasarkan ID yang diambil dari parameter GET.
    $result = $koneksi->query($query);

    header("Location: read.php");
    exit();
}


$id = $_GET["id"];
$query = "SELECT * FROM jadwal_ujian WHERE id='$id' ";
$result = $koneksi->query($query);
if ($result !== false && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    return $row;
} else {
    echo "Tidak ada data ditemukan atau terdapat kesalahan dalam query.";
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
    <style>
        /* Additional style to add some margin at the top */
        body {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Update Jadwal Ujian</h2>
        <form action="update.php" method="post">

            <!-- Hidden input for id -->
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <!-- untuk menyimpan nilai ID yang akan digunakan dalam proses update. -->
            <div class="form-group">
                <label for="matkul">Mata Kuliah:</label>
                <input type="text" class="form-control" name="matkul" value="<?php echo $row['matkul']; ?>" required>
            </div>

            <div class="form-group">
                <label for="waktu">Waktu Pelaksanaan:</label>
                <input type="text" class="form-control" name="waktu" value="<?php echo $row['waktu']; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js script links -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

