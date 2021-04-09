<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'function.php';
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('data berhasil ditambahkan');
          document.location.href = 'index.php';
          </script>";
  } else {
    echo "data gagal ditambah!";
  }
}

?>


<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card mx-auto mt-5" style="width: 25rem;">
          <h3 class="mt-3 text-center">Tambah Data Mahasiswa</h3>
          <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
                <label class="form-label">Nama : </label>
                <input type="text" name="nama" class="form-control" autofocus required>
              </div>
              <div class="mb-3">
                <label class="form-label">NRP : </label>
                <input type="text" name="nrp" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Email :</label>
                <input type="text" name="email" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Jurusan : </label>
                <input type="text" name="jurusan" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label"></label>
                <img src="img/nophoto.jpg" style="display:block;" width="120" class="img-preview">
                <div class="col-8 mx-auto" style="float:right; margin-top: -40px;">
                  <input type="file" name="gambar" class="coba form-control" onchange="previewImage()">
                </div>
              </div>
              <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
              <button class="btn btn-primary">
                <a href="index.php" style="color: white; text-decoration:none;">Batal</a>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>