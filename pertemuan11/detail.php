<?php

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

  <title>Detail Mahasiswa</title>
  <style>
    .card {
      box-shadow: 3px 20px 20px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card mx-auto mt-5" style="width: 18rem;">
          <img src="img/<?= $m['gambar']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $m['nrp']; ?></h5>
            <p class="card-text">Nama : <?= $m['nama']; ?></p>
            <p class="card-text">Email : <?= $m['email']; ?></p>
            <p class="card-text">Jurusan : <?= $m['jurusan']; ?></p>
            <a href="ubah.php?id=<?= $m['id']; ?>">Ubah</a>
            <a href="hapus.php?id=<?= $m['id']; ?>" style="color: crimson;" onclick="return confirm('apakah anda yakin?');">Hapus></a>


            <a href="index.php" class="btn btn-primary">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>