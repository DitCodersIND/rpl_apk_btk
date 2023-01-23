<?php
require("koneksi.php");

$usr = $_POST["username"];
$pass = $_POST["pass"];

$sql = "SELECT * FROM siswa WHERE usr = '$usr'";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) > 0) {
  if (password_verify($pass, $data["pass"])) {
    $token = bin2hex(random_bytes(32));
    $sql_u = "UPDATE siswa SET token = '$token' WHERE usr = '$usr'";
    $sql_q = mysqli_query($db, $sql_u);
    if (mysqli_affected_rows($db) > 0) {
      setcookie("token",$token, time() + (86400 * 7), '/');
      if ($_COOKIE["token"] = $token) {
        header("location: index.php?msg=berhasil");
      } else {
        header("location: login.php?msg=coba_lagi");
      }
    } else {
      header("location: login.php?msg=something_wrong:v");
    }
  } else {
    header("location: login.php?msg=pass_salah");
  }
} else {
  header("location: login.php?msg=pass_atau_username_salah");
}
?>