<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
crossorigin="anonymous">
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
  crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar bg-body-tertiary">
<div class="container-fluid">
<a class="navbar-brand text-primary fw-semibold" href="/">X RPL</a>
</div>
</nav>

<section id="jb">
<div class="bg-primary text-center text-light p-3 jumbotron jumbotron-fluid">
<h1 class="display-4 fw-bold">Login</h1>
<h1 class="lead fw-semibold">Login untuk melanjutkan</h1>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,32L60,48C120,64,240,96,360,122.7C480,149,600,171,720,160C840,149,960,107,1080,101.3C1200,96,1320,128,1380,144L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
</section>
<div class="container">
<?php
if (isset($_GET["msg"])) {
?>
<div class='alert alert-danger' role='alert'>
Daftar gagal karena <?php echo $_GET['msg']; ?>
</div>
<?php
} else {
echo "";
}
?>
</div>
<section>
<div class="container justify-content-center align-items-center">
<div class="card border-0 shadow">
<div class="card-body">
<form action="login_p.php" method="post">
<div class="form-group mb-2">
<label>Username</label>
<input name="username" type="text" class="form-control">
</div>
<div class="form-group">
<label>Password</label>
<input name="pass" type="password" class="form-control">
</div>
<div class="d-flex mt-2 justify-content-center">
<button type="submit" class="btn btn-primary">Login</button>
</div>
</form>
</div>
</div>
</div>
<p class="mt-2 mb-2 text-center">
Belum punya akun? <a href="/daftar.php">klik disini.</a>
</p>
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
  </script>
  <script type="text/javascript" charset="utf-8">
    function c() {
      alert("Under_dev");
    }
  </script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script type="text/javascript"> < /body></html >