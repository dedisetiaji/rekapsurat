<?php
session_start();
include "conn.php";
$username = $_POST['username'];
$password = $_POST['password'];
$action = $_POST['action'];

if ($action == "login") {
  $q = "SELECT username FROM admin WHERE username='$username' AND password='$password'";
  $r = $mysqli->query($q);
  $cek = $r->num_rows;
  if ($cek >= 1) {
    $_SESSION['username'] = $username;
    header('Location: index.php');
  }
  else
  {
    header("location:index.php?pesan=gagal");
  }
}
