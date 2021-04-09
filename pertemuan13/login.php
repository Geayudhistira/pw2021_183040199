<?php
session_start();
if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}
require 'function.php';
if (isset($_POST['login'])) {
  $login = login($_POST);
}


?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="style/main.css">
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <title>Login</title>
  <style>
    .card-body {
      margin-top: 250px !important;
    }

    a {
      text-decoration: none;
      border-color: 1px !important;
      width: 100px !important;
      border-radius: 10px;
      height: 30px;
      text-align: center;
    }

    a:hover {
      color: blue !important;
      background-color: #fff;
    }

    button {
      border-radius: 10px !important;
    }
  </style>
</head>

<body>
  <main>
    <section class="header">
      <div class="fluid">
        <div class="row">
          <div class="col">
            <img src="img/10.jpg" width="100%" height="665px" alt="">
          </div>
        </div>
      </div>
    </section>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card" style="width: 25rem; height:41.5rem;">
            <h1 class="text-center" style=" padding:130px; position:absolute; color:white; ">LOGIN</h1>
            <div div class="card-body">
              <form action="" method="POST">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Username</label>
                  <input type="text" class="form-control" name="username" placeholder="username" autofocus autocomplete="off" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <?php if (isset($login['error'])) : ?>
                  <p style="color: red; font-style:italic; font-size:small;" class="mb-0"><?= $login['pesan']; ?></p>
                <?php endif; ?>
                <div class="row  justify-content-center">
                  <button type="submit" name="login" class="btn btn-primary btn-sm mb-2 mt-3" style="width: 100px;">Login</button>
                  <h6 class="text-center">or</h6>
                  <a class="border text-center" style="color: white;" href="registrasi.php">Registrasi</a>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>