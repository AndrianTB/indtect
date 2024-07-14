<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "indtect";

$servername = "indtect_indtect-db";
$username = "mysql";
$password = "haloPro2022#";
$dbname = "indtect";

// ------ KONEKSI TO SERVER
// $conn = mysqli_connect("indtect_indtect-db", "mysql", "haloPro2022#", "indtect");

// ------ KONEKSI TO LOCALHOST
$conn = new mysqli($servername, $username, $password, $dbname);

// CHECK KONEKSI
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

function registrasi($data)
{
    global $conn;

    $nama = mysqli_real_escape_string($conn, $data["nama"]);
    $username = strtolower(stripslashes($data["username"]));
    $tanggalLahir = mysqli_real_escape_string($conn, $data["tanggalLahir"]);
    $jenisKelamin = mysqli_real_escape_string($conn, $data["jenisKelamin"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    // $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // CEK USERNAME
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert ('username sudah terdaftar');
        </script>";
        return false;
    }

    // ENKRIPSI PASSWORD
    $password = password_hash($password, PASSWORD_DEFAULT);

    // MASUKAN USER KE DATABASE
    mysqli_query($conn, "INSERT INTO user (nama, tanggal_lahir, username, jenis_kelamin, password) VALUES ('$nama', '$tanggalLahir', '$username', '$jenisKelamin', '$password')");
    return mysqli_affected_rows($conn);
}
