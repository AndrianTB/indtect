<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Redirect ke halaman login jika belum login
    header("Location: login.php");
    exit();
}

// Ambil username dari sesi
$username = $_SESSION['username'];

include 'koneksi.php';

$durasiPause = $_POST['durasiPause'];
$durasiMenggambar = $_POST['durasiMenggambar'];

$username = $_SESSION['username'];

mysqli_query($conn, "ALTER TABLE data AUTO_INCREMENT=1");

$sql = "INSERT INTO data (username, durasi_pause, durasi_menggambar) VALUES ('$username', '$durasiPause', '$durasiMenggambar')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dimasukkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
