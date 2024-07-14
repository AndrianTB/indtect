<?php
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
  <link rel="stylesheet" href="css/index.css" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
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
      <a href="#href-home" class="active">Beranda</a>
      <!-- <a href="#href-tips">Tips</a> -->
      <a href="#href-about">Tentang Demensia</a>
      <a href="#href-footer">Tentang Kami</a>
      <a href="#" class="btn-konsultasi"><img src="assets/phone-icon.svg" alt="">Konsultasi</a>
    </div>
    <div class="navbar-extra">
      <a href="#" class="btn-konsultasi" id="btn-login-side"><img src="assets/phone-icon.svg" alt="">Konsultasi</a>
      <a href="account.php" class="user-profile"><img src="assets/user-profile.svg" alt=""></a>
      <a id="hamburger-menu"><img src="assets/menu.png" alt=""></a>
    </div>
  </nav>

  <!-- NAVBAR END -->

  <!-- HOME PAGE START -->
  <div id="href-home"></div>
  <div class="home" id="home">
    <div class="container-left">
      <div class="headline">
        <h1>DETEKSI MANDIRI<br>DEMENSIA</h1>
      </div>
      <div class="description">
        <div class="container-p1">
          <p class="p1">Tahukah anda? <br>Hampir 90% penderita demensia di negara berkembang termasuk di Indonesia,
            tidak
            terdeteksi atau terlambat terdeteksi sehingga mengalami penurunan kemampuan kognitif seperti mudah lupa,
            berhalusinasi hingga tidak dapat melakukan aktivitas keseharian secara mandiri.
          </p>
        </div>
        <div class="container-p2">
          <p class="p1"> Penurunan kemampuan kognitif tersebut dapat ditekan bahkan dapat dikembalikan ke
            kondisi normal
            sesuai dengan
            usia ketika demensia dideteksi dini dan mendapatkan terapi yang tepat
          </p>
        </div>
        <div class="container-p3">
          <p class="p2">Skrining potensi demensia Anda dan keluarga sedini mungkin, demi kualitas hidup yang lebih baik!
          </p>
        </div>
      </div>
      <a href="#" class="btn-start" id="btn-start">Mulai Skrining</a>
    </div>
    <div class="container-right">
      <img class="image-1" src="img/indtect-icon.png" alt="logo-indtect">
      <p>inDtect</p>
    </div>
  </div>

  <!-- HOME PAGE END -->

  <!-- TIPS PAGE START -->
  <!-- <div id="href-tips"></div>
  <div class="tips" id="tips">
    <div class="container-left">
      <img class="image-1" src="img/quick-tips.png" alt="tips-image">
    </div>
    <div class="container-right">
      <div class="headline">
        <h1>TIPS<br> MENCEGAH DEMENSIA</h1>
      </div>
      <div class="description">
        <p>Beragam penelitian menunjukkan bahwa hampir 76 persen dari kasus penurunan kognitif otak dipengaruhi oleh
          gaya hidup yang buruk dan faktor lingkungan sekitar. Sebaiknya Anda mulai mengubah gaya hidup dengan cara:</p>
        <ul class="description-list">
          <li>Rajin Berolahraga</li>
          <li>Makan-makanan sehat dengan pola diet yang baik</li>
          <li>Tidak merokok</li>
          <li>Menghindari atau mengobati sindrom metabolik (Contoh: darah tinggi, diabetes, dll)</li>
          <li>Menjaga berat badan</li>
          <li>Tidur yang cukup</li>
          <li>Melatih otak (Contoh: membaca, bermain catur, dll)</li>
        </ul>
      </div>
    </div>
  </div> -->

  <!-- TIPS PAGE END -->

  <!-- ABOUT DEMENSIA PAGE START -->
  <div id="href-about"></div>
  <div class="about-demensia" id="aboutDemensia">
    <div class="container-left ">
      <img src="img/otak1.png" class="image-1" alt="brain-image">
    </div>
    <div class="container-right swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide slide-1">
          <div class="content-container">
            <div class="headline">
              <h1>APA ITU <br> DEMENSIA?</h1>
            </div>
            <div class="description">
              <p>Demensia adalah kondisi penurunan fungsi kognitif otak (seperti berpikir, mengingat, membuat keputusan,
                mengendalikan emosi, serta kemampuan komunikasi) yang terjadi secara progresif hingga mengganggu
                kemampuan
                bersosialisasi dan kehidupan sehari-hari (WHO, 2022).</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide slide-2">
          <div class="content-container">
            <div class="headline">
              <h1>CIRI-CIRI AWAL <br> DEMENSIA</h1>
            </div>
            <div class="description">
              <ul class="description-list">
                <li>Gangguan Daya Ingat <br>Gejala paling menonjol dari Demensia adalah sering lupa/pikun. Berbeda
                  dengan lupa pada umumnya, ODD (Orang Dengan Demensia) kesulitan mengingat suatu hal yang baru saja
                  terjadi, sehingga cenderung mengulang cerita atau bertanya hal yang sama berkali-kali.</li>
                <li>Sulit Fokus <br>ODD biasanya menunjukkan gejala sulit untuk fokus sehingga mengganggu aktivitas
                  sehari-hari. Akibat kesulitan fokus ini, ODD juga sulit untuk melakukan perhitungan yang sederhana dan
                  membutuhkan waktu lebih lama dari biasanya untuk menyelesaikan suatu pekerjaan.</li>
                <li>Sulit Fokus <br>ODD biasanya menunjukkan gejala sulit untuk fokus sehingga mengganggu aktivitas
                  sehari-hari. Akibat kesulitan fokus ini, ODD juga sulit untuk melakukan perhitungan yang sederhana dan
                  membutuhkan waktu lebih lama dari biasanya untuk menyelesaikan suatu pekerjaan.</li>
                <li>Sulit Fokus <br>ODD biasanya menunjukkan gejala sulit untuk fokus sehingga mengganggu aktivitas
                  sehari-hari. Akibat kesulitan fokus ini, ODD juga sulit untuk melakukan perhitungan yang sederhana dan
                  membutuhkan waktu lebih lama dari biasanya untuk menyelesaikan suatu pekerjaan.</li>
                <li>Sulit Fokus <br>ODD biasanya menunjukkan gejala sulit untuk fokus sehingga mengganggu aktivitas
                  sehari-hari. Akibat kesulitan fokus ini, ODD juga sulit untuk melakukan perhitungan yang sederhana dan
                  membutuhkan waktu lebih lama dari biasanya untuk menyelesaikan suatu pekerjaan.</li>
                <li>Sulit Fokus <br>ODD biasanya menunjukkan gejala sulit untuk fokus sehingga mengganggu aktivitas
                  sehari-hari. Akibat kesulitan fokus ini, ODD juga sulit untuk melakukan perhitungan yang sederhana dan
                  membutuhkan waktu lebih lama dari biasanya untuk menyelesaikan suatu pekerjaan.</li>
                <li>Sulit Fokus <br>ODD biasanya menunjukkan gejala sulit untuk fokus sehingga mengganggu aktivitas
                  sehari-hari. Akibat kesulitan fokus ini, ODD juga sulit untuk melakukan perhitungan yang sederhana dan
                  membutuhkan waktu lebih lama dari biasanya untuk menyelesaikan suatu pekerjaan.</li>
                <li>Sulit Fokus <br>ODD biasanya menunjukkan gejala sulit untuk fokus sehingga mengganggu aktivitas
                  sehari-hari. Akibat kesulitan fokus ini, ODD juga sulit untuk melakukan perhitungan yang sederhana dan
                  membutuhkan waktu lebih lama dari biasanya untuk menyelesaikan suatu pekerjaan.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="swiper-slide slide-3">
          <div class="content-container">
            <div class="headline">
              <h1>MENGURANGI RISIKO <br> DEMENSIA</h1>
            </div>
            <div class="description">
              <ul class="description-list">
                <p>Upaya yang bisa dilakukan:</p>
                <li>Menjaga Kesehatan Jantung <br>Merokok, tekanan darah tinggi, kolesterol tinggi, diabetes & obesitas
                  semuanya merusak pembuluh darah & meningkatkan risiko terkena stroke/ serangan jantung, yang dapat
                  berkontribusi mengembangkan demensia di kemudian hari.</li>
                <li>Bergerak dan Berolahraga <br>Aktivitas fisik & olahraga adalah cara pencegahan yang sangat efektif
                  karena membantu mengontrol tekanan darah & berat badan, serta mengurangi risiko diabetes tipe II &
                  beberapa bentuk kanker.</li>
                <li>Mengkonsumsi Sayur dan Buah <br>Makanan adalah bahan bakar untuk otak & tubuh. Kita dapat membantu
                  keduanya berfungsi dengan baik dengan makan makanan yang sehat & seimbang.</li>
                <li>Menstimulasi otak, fisik - mental - spiritual <br>Dengan menantang otak dengan aktivitas baru,
                  kalian dapat membantu membangun neuron otak baru & memperkuat koneksi di antara mereka.</li>
                <li>Bersosialisasi <br>Kegiatan sosial juga bermanfaat bagi kesehatan otak karena mereka menstimulasi
                  otak kita, membantu mengurangi risiko demensia dan depresi.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="swiper-slide slide-4">
          <div class="content-container">
            <div class="headline">
              <h1>PENGOBATAN <br> DEMENSIA</h1>
            </div>
            <div class="description">
              <ul class="description-list">
                <li>Menjalani Terapi Khusus <br>Beberapa terapi yang dapat dilakukan adalah:
                  <ul class="description-list2">
                    <li>Terapi stimulasi kognitif</li>
                    <li>Terapi okupasi</li>
                    <li>Terapi mengingat</li>
                    <li>Rehabilitasi kognitif</li>
                  </ul>
                </li>
                <li>Mendapatkan Dukungan Penuh dari Keluarga <br>Bentuk dukungan yang diberikan antara lain:
                  <ul class="description-list2">
                    <li>Berkomunikasi dengan penderita menggunakan kalimat yang mudah dimengerti</li>
                    <li>Melakukan aktivitas menyenangkan bersama penderita</li>
                    <li>Membuat agenda sebagai alat bantu mengingat aktivitas yang harus dilakukan penderita</li>
                    <li>Membuat perencanaan pengobatan selanjutnya bersama penderita</li>
                  </ul>
                </li>
                <li>Memberikan Obat-obatan <br>Pemberian obat-obatan sesuai dengan anjuran dari Dokter.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="swiper-slide slide-3">
          <div class="content-container">
            <div class="headline">
              <h1>TIPS MENCEGAH <br> DEMENSIA</h1>
            </div>
            <div class="description">
              <ul class="description-list">
                <p>Beragam penelitian menunjukkan bahwa hampir 76 persen dari kasus penurunan kognitif otak dipengaruhi
                  oleh
                  gaya hidup yang buruk dan faktor lingkungan sekitar. Sebaiknya Anda mulai mengubah gaya hidup dengan
                  cara:</p>
                <li>Rajin Berolahraga</li>
                <li>Makan-makanan sehat dengan pola diet yang baik</li>
                <li>Tidak merokok</li>
                <li>Menghindari atau mengobati sindrom metabolik (Contoh: darah tinggi, diabetes, dll)</li>
                <li>Menjaga berat badan</li>
                <li>Tidur yang cukup</li>
                <li>Melatih otak (Contoh: membaca, bermain catur, dll)</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>

  <!-- ABOUT DEMENSIA PAGE END -->

  <!-- FOOTER PAGE START -->
   <div id="href-footer"></div>
  <div class="footer" id="footer">
    <div class="container-left">
      <img src="img/indtect-logo.png" alt="">
    </div>
    <div class="container-right">
      <div class="social-media">
        <div class="title">
          <p>Ikuti Kami</p>
        </div>
        <div class="icon">
          <a href=""><img src="assets/linkedin.png" alt=""></a>
          <a href=""><img src="assets/instagram.png" alt=""></a>
          <a href=""><img src="assets/facebook.png" alt=""></a>
          <a href=""><img src="assets/youtube.png" alt=""></a>
          <a href=""><img src="assets/twitter.png" alt=""></a>
        </div>
      </div>
      <div class="kontak">
        <div class="title">
          <p>Kontak</p>
        </div>
        <div class="description">
          <ul>
            <li><a href="">Alamat : 4-5 Main road, Jakarta</a></li>
            <li><a href="">Email : indtect@gmail.com</a></li>
            <li><a href="">No. Telp : 0884533433265</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER PAGE END -->

  <!-- OPTION BUTTON SKRINING START -->
  <div class="dialog-overlay" id="dialog-overlay">
    <div class="dialog-box">
      <!-- <button class="dialog-close" id="dialog-close">&times;</button> -->
      <p>Apakah Anda dapat melakukan skrining dengan menggambar langsung pada website?</p>
      <div class="dialog-buttons">
        <button class="btn-yes" id="btn-yes">Bisa</button>
        <button class="btn-no" id="btn-no">Tidak</button>
        <button class="btn-cancel" id="btn-cancel">Cancel</button>
      </div>
    </div>
  </div>

  <!-- OPTION BUTTON SKRINING END -->

  <!-- MY JS -->
  <script src="js/script.js"></script>

  <!-- Swiper JS -->
  <script src="js/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".swiper-container", {
      slidesPerView: 1,
      spaceBetween: 500,
      centeredSlides: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: true,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>

</html>