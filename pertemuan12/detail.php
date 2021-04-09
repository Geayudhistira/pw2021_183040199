<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'function.php';
$id = $_GET['id'];
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <title>Detail Mahasiswa</title>
  <style>
    .card {
      box-shadow: 3px 20px 20px;
    }

    .fa-times-circle {
      text-decoration: none !important;
      right: 0;
      position: absolute;
      margin: 10px 10px;
      font-size: 25px;
      color: black;
    }

    .fa-times-circle:hover {
      color: coral;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card mx-auto mt-5" style="width: 18rem;">
          <div class="sub-detail">
            <a href="index.php" class="far fa-times-circle"></a>
            <img src="img/<?= $m['gambar']; ?>" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title"><?= $m['nrp']; ?></h5>
            <p class="card-text">Nama : <?= $m['nama']; ?></p>
            <p class="card-text">Email : <?= $m['email']; ?></p>
            <p class="card-text">Jurusan : <?= $m['jurusan']; ?></p>
            <a href="ubah.php?id=<?= $m['id']; ?>" class="btn btn-primary">Ubah</a> <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm ('Apakah Anda Yakin ?'); " class="btn btn-danger">Hapus</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>