<?php
  session_start();
  if(!isset($_SESSION['username'])) {
  header('location:index.php'); }
  else { $username = $_SESSION['username']; }
  require_once("config/koneksi.php");
  $query = mysql_query("SELECT * FROM user WHERE username = '$username' and password='$password'");
  $hasil = mysql_fetch_array($query);
?>