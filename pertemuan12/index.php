<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Daftra Mahasiswa</title>
  <style>
    h3 {
      margin-top: 50px;
    }

    img {
      max-height: 100%;
      width: 150px;
    }

    a {
      color: white !important;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <nav class="navbar  navbar-expand-lg sticky-top  navbar-black bg-dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.php">STUDENTS</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
                <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
              </svg>Logout</a>
          </li>
        </ul>
      </div>
    </div>
    </div>
  </nav>
  <main>
    <div class="container">
      <div class="row">
        <div class="col">
          <h3>Daftra Mahasiswa</h3>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <a href="tambah.php">Tambah Data Mahasiswa</a>
          </button>
          <br><br>
          <div class="col-4 mb-3">
            <form class="d-flex" method="POST">
              <input class="form-control me-2" type="text" name="keyword" placeholder="masukkan keyword pencarian.." autocomplete="off" autofocus>
              <button class="btn btn-outline-success" type="submit" name="cari">Search</button>
            </form>
          </div>

          <table class="table table-bordered table-hover">
            <thead class="table-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">Aksi</th>
              </tr>
              <?php if (empty($mahasiswa)) : ?>
                <tr>
                  <td colspan="4" style="background-color: white;">
                    <p class="text-center mt-5 mb-5" style="color: tomato;">Data mahasiswa tidak ditemukan</p>
                  </td>
                </tr>
              <?php endif; ?>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($mahasiswa as $mhs) : ?>
                <tr class="text-center">
                  <th scope="row"><?= $i++; ?></th>
                  <td><img src="img/<?= $mhs["gambar"]; ?>"></td>
                  <td style="font-weight:bold;"><?= $mhs["nama"]; ?></td>
                  <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <a href="detail.php?id=<?= $mhs["id"]; ?>">detail</a>
                    </button>
                  </td>
                <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>


  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>