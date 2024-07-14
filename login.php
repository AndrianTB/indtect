<?php
session_start();

// CEK SESSION
if (isset($_SESSION["login"])) {
    header("Location: drawing1.php");
    exit;
}

include 'koneksi.php';

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // CEK USERNAME
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // SET SESSION
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;

            header("Location: drawing1.php");
            exit;
        }
    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- My Style -->
    <link rel="stylesheet" href="css/login.css">
    <!-- Logo Title Bar -->
    <link rel="icon" href="img/indtect-icon.png" type="image/x-icon">
    <title>Idenstify</title>
</head>

<body>
    <!-- NAVBAR START -->
    <nav class="navbar">
        <div class="navbar-icon">
            <a href="index.php" class="navbar-logo"><img src="img/indtect-logo.png" alt=""></a>
        </div>
        <div class="navbar-nav">
            <a href="index.php">Beranda</a>
            <a href="#" class="active">Masuk</a>
            <a href="#" class="btn-konsultasi"><img src="assets/phone-icon.svg" alt="">Konsultasi</a>
        </div>
        <div class="navbar-extra">
            <a href="#" class="btn-konsultasi" id="btn-login-side"><img src="assets/phone-icon.svg"
                    alt="">Konsultasi</a>
            <a href="#" class="user-profile"><img src="assets/user-profile.svg" alt=""></a>
            <a id="hamburger-menu"><img src="assets/menu.png" alt=""></a>
        </div>
    </nav>

    <!-- NAVBAR END -->

    <!-- TABEL LIST BIO DATA START -->
    <div class="container">
        <form action="" method="POST" class="container-tabel">
            <div class="header">
                <span>Masuk akun anda!</span>
            </div>
            <div class="main">
                <div class="container-name">
                    <label for="username">Nama Akun</label>
                    <input type="text" name="username" id="username" placeholder="Masukan Nama Akun Anda" required>
                </div>
                <div class="container-age">
                    <label for="password">Kata Sandi</label>
                    <input type="password" name="password" id="password" placeholder="Masukan Kata Sandi Anda" required>
                </div>
            </div>
            <div class="container-footer">
                <button type="submit" name="login" class="btn-start">Masuk</button>
                <span class="first">
                    Belum punya akun?
                    <a href="register.php">
                        <span class="last">Daftar</span>
                    </a>
                </span>
            </div>
        </form>
    </div>

    <!-- TABEL LIST BIO DATA END -->

    <!-- Javascript -->

    <!-- My Javascript -->
    <script src="js/script.js"></script>
</body>

</html>