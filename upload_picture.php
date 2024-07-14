<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

include 'koneksi.php';

if (isset($_POST['upload_picture'])) {
    $username = $_SESSION['username'];
    $targetDirectory = "uploads/";
    $uploadOk = 1;
    $timestamp = time();
    $imageFileType = strtolower(pathinfo($_FILES['profile_picture']['name'], PATHINFO_EXTENSION));
    $newFileName = $username . "_" . $timestamp . "." . $imageFileType;
    $targetFile = $targetDirectory . $newFileName;

    // PERIKSA APAKAH FILE GAMBAR VALID
    // $check = getimagesize($_FILES['profile_picture']['tmp_name']);
    // if ($check === false) {
    //     echo "File bukan gambar.";
    //     $uploadOk = 0;
    // }

    // PERIKSA APAKAH FILE SUDAH ADA
    if (file_exists($targetFile)) {
        echo "Maaf, file sudah ada.";
        $uploadOk = 0;
    }

    // BATASI UKURAN FILE
    if ($_FILES['profile_picture']['size'] > 1000000) {
        echo "Maaf, ukuran file terlalu besar.";
        $uploadOk = 0;
    }

    // IZINKAN FORMAT TERTENTU
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Maaf, hanya format JPG, JPEG, dan PNG yang diizinkan.";
        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $targetFile)) {
            $namaFileDB = $newFileName;
            $tipeFile = $imageFileType;
            $ukuranFile = $_FILES['profile_picture']['size'];
            $sql = "UPDATE user SET profile_picture='$namaFileDB' WHERE username='$username'";
            if ($conn->query($sql) === TRUE) {
                echo "File berhasil diupload dan informasi disimpan ke database.";
                header("Location: account.php");
                exit();
            } else {
                echo "Maaf, terjadi kesalahan saat menyimpan informasi ke database: " . $conn->error;
            }
            $conn->close();
        } else {
            echo "Maaf, terjadi kesalahan saat mengupload file.";
        }
    }
}
