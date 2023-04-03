<?php
require_once "connection/config.php";
$pesan = mysqli_query ($con, "SELECT * FROM pesan where id='$_GET[id]'" ) or die (mysqli_error($con));
$lihat = mysqli_fetch_array($pesan);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pesan dari pengunjung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mt-5" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title"><?=$lihat['nama']?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?=$lihat['email']?></h6>
            <p class="card-text"><?=$lihat['pesan']?></p>
            <a href="https://milki.panggahtani.net/pesan.php" class="card-link">Kembali</a>
          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>