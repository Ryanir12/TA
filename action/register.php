    <?php
    // Sertakan file koneksi ke database
    require_once("../config/connection.php");

    // Pastikan koneksi ke database telah dilakukan sebelumnya
    // Lakukan sanitasi data yang diterima dari form
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm_password']);
    $level = htmlspecialchars($_POST['level']);

    // Validasi password
    if ($password !== $confirm_password) {
        header("Location: ../pages/register.php?error=Password%20confirmation%20failed");
        exit();
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Lakukan query untuk memasukkan data ke dalam tabel tb_user
    $sql = "INSERT INTO tb_user (nama, email, username, password, level) VALUES (?, ?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("sssss", $nama, $email, $username, $hashed_password, $level);

    // Eksekusi statement
    if ($stmt->execute()) {
        // Jika berhasil, redirect ke halaman sukses atau halaman utama
        header("Location: ../pages/login.php");
        exit();
    } else {
        // Jika gagal, redirect ke halaman registrasi dengan pesan error
        header("Location: ../pages/register.php?error=Failed%20to%20register%20user");
        exit();
    }
