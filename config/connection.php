<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "db_waber";

// Membuat koneksi ke database
$db = new mysqli($host, $username, $password, $db_name);

// Memeriksa koneksi
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
