<?php
session_start();
require("koneksi.php");
if (isset($_COOKIE["token"])){
  $kuki = $_COOKIE['token'];
  $sql = "SELECT token,nama,usr,pass FROM siswa WHERE token = '$kuki'";
  $query = mysqli_query($db, $sql);
  $data = mysqli_fetch_assoc($query);
  if ($kuki == $data["token"]) {
    $_SESSION["token"] = $_COOKIE["token"];
    $_SESSION["nama"] = $data["nama"];
    $_SESSION["usr"] = $data["usr"];
    $_SESSION["pass"] = $data["pass"];
  } else {
    setcookie("token", "", time() - 3600);
    header("location: login.php");
  }
} else {
  header("location: login.php");
}
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>X RPL</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand fw-semibold text-primary" href="/">X RPL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title text-primary fw-semibold" id="offcanvasNavbarLabel">X RPL</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="lists.php">List Siswa</a>
            </li>
            <hr />
            <li class="nav-item">
              <a class="nav-link" aria-current="page" onclick="c()">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <section id="jb">
    <div class="bg-primary text-center text-light p-3 jumbotron jumbotron-fluid">
      <h1 id="anim1" class="display-4 fw-bold"></h1>
      <p id="anim2" class="lead fw-semibold"></p>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,32L60,48C120,64,240,96,360,122.7C480,149,600,171,720,160C840,149,960,107,1080,101.3C1200,96,1320,128,1380,144L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
  </section>
  <section id="main">
    <div class="container-fluid text-center" data-aos="fade-up">
      <div class=" container shadow p-3 mb-5 bg-body rounded m-9">
        <h1 class="card-title">Tentang</h1>
        <hr>
        <p class="card-text">
          Selamat datang di halaman website
          aplikasi milik siswa X RPL SMK BATIK PERBAIK PURWOREJO.Website ini
          berisi beberapa informasi dan profil siswa kelas X RPL
        </p>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,32L60,48C120,64,240,96,360,122.7C480,149,600,171,720,160C840,149,960,107,1080,101.3C1200,96,1320,128,1380,144L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
  </section>
  <footer id="foo">
    <div style="background-color: #273036;" class="text-center container-fluid text-light pb-5">
      <div class="container">
        <p class="card-text">
          Copyright 2023
        </p>
        <p class="card-text">
          Licensed under MIT
        </p>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script type="text/javascript">
    var typed = new Typed('#anim1', {
      strings: ["Selamat Datang <?php
if (isset($_SESSION["nama"])) {
  echo $_SESSION["nama"];
} else {
  header("location: login.php");
}
?>!"],
      typeSpeed: 50,
      showCursor: false
    });
    var typed2 = new Typed('#anim2',
      {
        strings: ["Di Aplikasi Kelas X RPL"],
        typeSpeed: 50,
        startDelay: 1000,
        showCursor: false
      });
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script type="text/javascript" charset="utf-8">
    function c() {
      alert("Under_dev");
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>