<?php
require 'function.php';

$id = $_GET['id'];
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('data berhasil diubah');
          document.location.href = 'index.php';
          </script>";
  } else {
    echo "data gagal diubah!";
  }
}

?>


<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>Ubah Data Mahasiswa</title>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card mx-auto mt-5" style="width: 25rem;">
          <h3 class="mt-3 text-center">Ubah Data Mahasiswa</h3>
          <div class="card-body">
            <form action="" method="POST">
              <input type="hidden" name="id" value="<?= $m['id']; ?>">
              <div class="mb-3">
                <label class="form-label">Nama : </label>
                <input type="text" name="nama" class="form-control" autofocus required value="<?= $m['nama']; ?>">
              </div>
              <div class="mb-3">
                <label class="form-label">NRP : </label>
                <input type="text" name="nrp" class="form-control" autofocus required value="<?= $m['nrp']; ?>">
              </div>
              <div class="mb-3">
                <label class="form-label">Email :</label>
                <input type="text" name="email" class="form-control" autofocus required value="<?= $m['email']; ?>">
              </div>
              <div class="mb-3">
                <label class="form-label">Jurusan : </label>
                <input type="text" name="jurusan" class="form-control" autofocus required value="<?= $m['jurusan']; ?>">
              </div>
              <div class="mb-3">
                <label class="form-label">Gambar : </label>
                <input type="text" name="gambar" class="form-control" autofocus required value="<?= $m['gambar']; ?>">
              </div>
              <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
              <button class="btn btn-primary">
                <a href="index.php" style="color: white; text-decoration:none;">kembali</a>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>