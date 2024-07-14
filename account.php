<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit();
}
include 'koneksi.php';
$username = $_SESSION['username'];

$query = "SELECT * FROM user WHERE username = '$username'";
$result = mysqli_query($conn, $query);

if ($result) {
    $userData = mysqli_fetch_assoc($result);
} else {
    die("Error: " . mysqli_error($conn));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit"])) {
        $nama = $_POST["nama"];
        $tanggalLahir = $_POST["usia"];
        $noHandphone = $_POST["noHandphone"];
        $username = $_POST["username"];
        $jenisKelamin = $_POST["jenisKelamin"];

        $update_query = "UPDATE user SET nama='$nama', tanggal_lahir='$tanggalLahir', no_handphone='$noHandphone', username='$username', jenis_kelamin='$jenisKelamin' WHERE username='$username'";
        $result = mysqli_query($conn, $update_query);
        if ($result) {
            header("Location: account.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
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
    <link rel="stylesheet" href="css/account.css" />
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
            <a href="#" class="active">Akun</a>
            <a href="logout.php" class="btn-konsultasi"><img src="assets/phone-icon.svg" alt="">Keluar</a>
        </div>
        <div class="navbar-extra">
            <a href="logout.php" class="btn-konsultasi" id="btn-login-side"><img src=""
                    alt="">Keluar</a>
            <a href="#" class="user-profile"><img src="assets/user-profile.svg" alt=""></a>
            <a id="hamburger-menu"><img src="assets/menu.png" alt=""></a>
        </div>
    </nav>

    <!-- NAVBAR END -->

    <!-- MAIN START -->
    <div class="main">
        <div class="container-left">
            <form action="" method="POST" class="form">
                <div class="header">
                    <h1>Pengaturan Akun</h1>
                </div>
                <div class="basic-info">
                    <p>Info Dasar</p>
                </div>
                <div class="inputbox">
                    <label class="label" for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" placeholder="Masukan Nama Anda"
                        value="<?php echo $userData['nama']; ?>">
                </div>
                <div class="inputbox">
                    <label class="label" for="usia">Tanggal Lahir</label>
                    <input type="date" name="usia" id="usia" placeholder="Masukan Tanggal Lahir Anda"
                        value="<?php echo $userData['tanggal_lahir']; ?>">
                </div>
                <div class="inputbox">
                    <label class="label" for="noHandphone">No. Handphone</label>
                    <input type="tel" name="noHandphone" id="noHandphone" placeholder="Masukan Nomor Hp Anda"
                        value="<?php echo $userData['no_handphone']; ?>">
                </div>
                <div class="inputbox">
                    <label class="label-gender">Jenis Kelamin</label>
                    <div class="gender-options">
                        <?php
                        $jenisKelamin = $userData['jenis_kelamin'];

                        $lakiLakiChecked = ($jenisKelamin == 'laki-laki') ? 'checked' : '';
                        $perempuanChecked = ($jenisKelamin == 'perempuan') ? 'checked' : '';
                        ?>
                        <label class="gender-label" <?php echo ($jenisKelamin=='laki-laki' ) ? 'active' : '' ; ?>">
                            <input type="radio" name="jenisKelamin" value="laki-laki" <?php echo $lakiLakiChecked; ?>>
                            <div class="gender-box">Laki-laki</div>
                        </label>
                        <label class="gender-label" <?php echo ($jenisKelamin=='perempuan' ) ? 'active' : '' ; ?>">
                            <input type="radio" name="jenisKelamin" value="perempuan" <?php echo $perempuanChecked; ?>>
                            <div class="gender-box">Perempuan</div>
                        </label>
                    </div>
                </div>
                <div class="account-info">
                    <p>Info Akun</p>
                </div>
                <div class="inputbox">
                    <label class="label" for="username">Nama Akun</label>
                    <input type="text" name="username" id="username" placeholder="Masukan Nama Akun Anda"
                        value="<?php echo $userData['username']; ?>">
                </div>
                <div class="footer">
                    <button type="submit" name="submit"><img src="" alt="">Simpan</button>
                </div>
            </form>
        </div>
        <div class="container-right">
            <div class="profile-image">
                <img src="uploads/andrian_1716423562.jpeg" alt="">
                <!-- <img src="uploads/<?php echo htmlspecialchars($userData['profile_picture']); ?>" alt="Profile Picture"> -->
            </div>
            <div class="profile-btn">
                <form action="upload_picture.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="profile_picture" id="profile_picture" style="display:none;"
                        onchange="this.form.submit()">
                    <button class="btn-ubah" type="button" onclick="document.getElementById('profile_picture').click();">Ubah</button>
                </form>
                <form action="delete_picture.php" method="post"">
                    <button class="btn-hapus" type=" submit">Hapus</button>
                </form>


                <!-- <form action="upload_picture.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="profile_picture">
                    <button type="submit" name="upload_picture" id="change-profile-btn">Change</button>
                </form>
                <form action="delete_picture.php" method="post">
                    <button type="submit" name="delete_picture" id="remove-profile-btn">Delete</button>
                </form> -->
            </div>
        </div>
    </div>

    <!-- MAIN END -->

    <!-- MY JAVASCRIPT -->
    <script src="js/script.js"></script>
</body>

</html>