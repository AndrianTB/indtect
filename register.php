<?php
require 'koneksi.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script> 
            alert('user baru berhasil ditambahkan');
            window.location.href = 'login.php';
        </script>";
        exit;
    } else {
        echo mysqli_error($conn);
    }
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
    <link rel="stylesheet" href="css/register.css">
    <!-- Logo Title Bar -->
    <link rel="icon" href="img/indtect-icon.png" type="image/x-icon">
    <title>inDtect</title>
</head>

<body>
    <!-- NAVBAR START -->
    <nav class="navbar">
        <div class="navbar-icon">
            <a href="index.php" class="navbar-logo"><img src="img/indtect-logo.png" alt=""></a>
        </div>
        <div class="navbar-nav">
            <a href="index.php">Beranda</a>
            <a href="#" class="active">Daftar</a>
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
                <span>Daftar & Lengkapi Data Diri Anda!</span>
            </div>
            <div class="main">
                <div class="container-name">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" placeholder="Masukan Nama Anda" required>
                </div>
                <div class="container-name">
                    <label for="username">Nama Akun</label>
                    <input type="text" name="username" id="username" placeholder="Masukan Nama Akun Anda" required>
                </div>
                <div class="container-age">
                    <label for="tanggalLahir">Tanggal Lahir</label>
                    <input type="date" name="tanggalLahir" id="tanggalLahir" placeholder="Masukan Tanggal Lahir Anda"
                        required>
                </div>
                <div class="container-name">
                    <label for="password">Kata Sandi</label>
                    <input type="password" name="password" id="password" placeholder="Masukan Kata Sandi Anda" required>
                </div>
                <div class="container-gender">
                    <label class="header-jenisKelamin" for="">Jenis Kelamin</label>
                    <div class="gender-options">
                        <label class="gender-label">
                            <input type="radio" name="jenisKelamin" value="laki-laki" required>
                            <div class="gender-box">Laki-laki</div>
                        </label>
                        <label class="gender-label">
                            <input type="radio" name="jenisKelamin" value="perempuan" required>
                            <div class="gender-box">Perempuan</div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="container-footer">
                <button type="submit" name="register" class="btn-start">Daftar</button>
                <span class="first">
                    Sudah punya akun?
                    <a href="login.php">
                        <span class="last">Masuk</span>
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