<?php
include("koneksi.php");

$username = $_POST["username"];
$pass = $_POST["pass"];
$no_hp = $_POST["no_hp"];
$no_urut = $_POST["no_urut"];
$nama = $_POST["nama"];
$hashed = password_hash($pass, PASSWORD_DEFAULT);

$sql = mysqli_query($db, "SELECT no_urut FROM siswa");
$data = mysqli_fetch_assoc($sql);
if ($data["no_urut"] == $no_urut) {
  header("location: daftar.php?msg=no_urut_sama");
} else {
  $rand = rand();
  $ekstensi = array('png', 'jpg', 'jpeg', 'gif');
  $filename = $_FILES['foto']['name'];
  $ukuran = $_FILES['foto']['size'];
  $ext = pathinfo($filename, PATHINFO_EXTENSION);

  if (!in_array($ext, $ekstensi)) {
    header("location: daftar.php?msg=ekstensi_file_tidak_valid");
  } else {
    if ($ukuran < 1044070) {
      $xx = $rand.'_'.$filename;
      move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
      $token = bin2hex(random_bytes(32));
      if ($token != "") {
        setcookie("token", $token, time() + (86400 * 7), '/');
        if (isset($_COOKIE["token"]) == $token) {
          mysqli_query($db, "INSERT INTO siswa
    (no_urut,nama,usr,pass,no_hp,token,foto)
    VALUES('$no_urut','$nama','$username','$hashed','$no_hp','$token','$xx')");
          header("location:index.php?msg=berhasil");
        } else {
          header("location: daftar.php?msg=error");
        }
      } else {
        header("location: daftar.php?msg=something_wrong_coba_lagi");
      }
    } else {
      header("location: daftar.php?msg=error_file_size");
    }
  }
}

?>