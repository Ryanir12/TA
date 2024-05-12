<?php
session_start();
include('../config/connection.php');

// Menerima input dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Validasi input
if (empty($username) || empty($password)) {
  header('location: ../login.php?message=Username atau password tidak boleh kosong.');
  exit();
}

// Membuat query
$query = "SELECT * FROM tb_user WHERE username=?";
$stmt = $db->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Memeriksa apakah ada baris hasil query
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  // Memeriksa kecocokan password
  if (password_verify($password, $row['password'])) {
    // Jika cocok, set session username dan arahkan ke dashboard sesuai level
    $_SESSION['username'] = $username;
    switch ($row['level']) {
      case 'admin':
        header('location: ../pages/dashboard_admin.php');
        break;
      case 'pimpinan':
        header('location: ../pages/dashboard_pimpinan.php');
        break;
      case 'karyawan':
        header('location: ../pages/dashboard_karyawan.php');
        break;
      case 'supplier':
        header('location: ../pages/dashboard_supplier.php');
        break;
      default:
        // Level lainnya akan diarahkan ke dashboard admin sebagai default
        header('location: ../pages/login.php');
        break;
    }
    exit();
  }
}

// Jika tidak cocok atau tidak ada hasil query, arahkan kembali ke halaman login dengan pesan kesalahan
header('location: ../login.php?message=Login gagal! Silakan coba lagi.');
exit();
