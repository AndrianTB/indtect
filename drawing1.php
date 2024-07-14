<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <!-- My Style -->
    <link rel="stylesheet" href="css/drawing1.css" />
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
            <a href="#" class="active">Pengerjaan Skrining Demensia</a>
            <a href="#" class="btn-konsultasi"><img src="assets/phone-icon.svg" alt="">Konsultasi</a>
        </div>
        <div class="navbar-extra">
            <a href="#" class="btn-konsultasi" id="btn-login-side"><img src="assets/phone-icon.svg"
                    alt="">Konsultasi</a>
            <a href="account.php" class="user-profile"><img src="assets/user-profile.svg" alt=""></a>
            <a id="hamburger-menu"><img src="assets/menu.png" alt=""></a>
        </div>
    </nav>

    <!-- NAVBAR END -->

    <!-- MAIN START -->
    <div class="main">
        <div class="container-left">
            <div class="left">
                <div class="header">
                    <h3>Petunjuk Pengerjaan</h3>
                </div>
                <div class="list">
                    <ul>
                        <li>Gambarkan sebuah jam analog (seperti jam dinding) yang menunjukkan waktu pukul 11 lewat 10
                            menit (pkl. 11.10) pada lingkaran yang telah tersedia</li>
                        <li>Anda tidak perlu lagi membuat lingkaran jam, cukup gunakan lingkaran yang telah tersedia
                        </li>
                        <li>Tuliskan seluruh angka pada jam dengan lengkap</li>
                        <li>Gambarkan panah/jarum jam sesuai dengan penunjukkan waktu yang diminta</li>
                    </ul>
                </div>
                <!-- <div class="divider-line"></div> -->
                <!-- <div class="option2">
                    <div class="header">
                        <h3>Option 2</h3>
                    </div>
                    <div class="list">
                        <ul>
                            <li>Jika anda kesulitan dalam menggambar secara langsung, Anda dapat menggambar secara
                                manual dengan menggunakan template berikut.</li>
                            <li>Tekan "Pilih File" untuk memilih file gambar yang sudah anda buat.</li>
                            <li>Klik "Upload" setelah berhasil memilih file.</li>
                        </ul>
                    </div>
                </div>
                <div class="footer">
                    <button type="submit" name="btn-start" class="btn-file">Pilih File</button>
                    <button type="submit" name="btn-start" class="btn-upload">Upload</button>
                </div> -->
            </div>
        </div>
        <div class="container-right">
            <div class="right">
                <div class="nav">
                    <button class="clear">Hapus</button>
                    <button class="save">Simpan</button>
                    <input type="color" id="favcolor" value="#EEE2DE">
                    <input type="range" name="ageInputName" id="ageInputId" value="2" min="1" max="10"
                        oninput="ageOutputId.value = ageInputId.value">
                    <output id="ageOutputId">2</output>
                    <!-- <div class="emoji">🎨</div> -->
                </div>
                <div id="canvas-container">
                    <canvas id="canvas"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- MAIN END -->
    <!-- MY JAVASCRIPT -->
    <script src="js/script.js"></script>
    <script src="js/drawing.js"></script>
</body>

</html>