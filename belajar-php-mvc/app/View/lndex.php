<?php 

namespace RafliInsan\BelajarPhpMvc\View;

class lndex
{    function lndex(): void
    {
        echo "";
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Axioo Care</title>

    <!-- Css -->
    <link rel="stylesheet" href="assest/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg warna1 navbar1" style="height: 67px;">
        <div class="container-fluid">
          <a class="navbar-brand text-white judul-navbar ms-3" href="#">AxiooCare</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-white" href="#">|</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Contact</a>
              </li>
            </ul>
            <div class="navbar-text">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item me-4">
                    <a class="nav-link text-white" href="login">Masuk</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

    <!-- Navbar End -->

    <!-- Home Start -->

    <div class="container margin-home" style="width: 1280px;">
      <div class="row">
        <div class="col">
          <h1 class="judul-navbar">Our Mission : Saving Lives</h1>
          <svg xmlns="http://www.w3.org/2000/svg" width="512" height="4" viewBox="0 0 408 2" fill="none">
            <path d="M0.500092 1.00003L407.5 1.00003" stroke="#2A97B4" stroke-width="1px"/>
          </svg>
          <p class="paragraf-home">Our Primary mission is to save lives and improve the health and well-being of our community. Every day , we strive to make a positive impact by providing top-quality medical services and contributing to the health of the community we serve.</p>
          <button class="warna2 btn-home" type="button">Telusuri</button>
        </div>
        
        <div class="col">
          <img src="assest/img/dokterBuladig.webp" style="height: 457px; margin-left: 132px;" alt="">
        </div>
      </div>
      <div class="row card-home">
        <div class="col card-home-1 warna1">
          <h5 class="judul-card-home">Date</h5>
          <p class="paragraf-card-home">Selasa, 17 Agustus</p>
        </div>
        <div class="col card-home-1 warna1">
          <h5 class="judul-card-home">Location</h5>
          <p class="paragraf-card-home">Bandung, Jawa Barat</p>
        </div>
        <div class="col card-home-1 warna1">
          <h5 class="judul-card-home">Services</h5>
          <p class="paragraf-card-home">Konsultasi kejiwaan</p>
        </div>
        <div class="col card-home-1 warna1">
          <h5 class="judul-card-home">Pharmachy</h5>
          <p class="paragraf-card-home">AxiooCare Hospital</p>
        </div>
        <div class="col button-card-home text-center warna2">
          <h5><a class="nav-link" href="#">Telusuri Sekarang</a></h5>
        </div>
      </div>
    </div>

    <!-- Home End -->


  <!-- About Start -->

  <div class="container page2">
    <h4 class="subtitle">About</h4>
    <svg xmlns="http://www.w3.org/2000/svg" width="75" height="4" viewBox="408 2" fill="none">
      <path d="M0.500092 1.00003L407.5 1.00003" stroke="#2A97B4" stroke-width="1px"/>
    </svg>
  </div>
  <div class="row card-about text-center mt-5">
    <div class="col">
      <div class="card-about-isi">
        <img class="mt-3" src="assest/img/dokterKartun.jpg" width="111" height="123">
        <h5 class="mt-4 title-card-about">Dokter Terpercaya</h4>
        <p class="paragraf-about">Memiliki dokter-dokter pilihan</p>
      </div>
    </div>
    <div class="col ms-2">
      <div class="card-about-isi">
        <img class="mt-3" src="assest/img/peralatan.png" width="111" height="123">
        <h5 class="mt-4 title-card-about">Fasilitas Terbaik</h4>
        <p class="paragraf-about">Memiliki peralatan-peralatan berlisensi</p>
      </div>
    </div>
    <div class="col ms-2">
      <div class="card-about-isi">
        <img class="mt-3" src="assest/img/ambulan.jpg" width="111" height="123">
        <h5 class="mt-4 title-card-about">Mobil Ambulan</h4>
        <p class="paragraf-about">Siap siaga kapanpun dan dimanapun</p>
      </div>
    </div>
    <div class="col ms-2">
      <div class="card-about-isi">
        <img class="mt-3" src="assest/img/bintang.png" width="111" height="123">
        <h5 class="mt-4 title-card-about">Bintang 5</h4>
        <p class="paragraf-about">Menjadi rumah sakit pilihan</p>
      </div>
    </div>
  </div>

  <!-- About End -->

  <!-- Services Start -->

  <div class="container page2">
    <h4 class="subtitle">Services</h4>
    <svg xmlns="http://www.w3.org/2000/svg" width="105" height="4" viewBox="408 2" fill="none">
      <path d="M0.500092 1.00003L407.5 1.00003" stroke="#2A97B4" stroke-width="1px"/>
    </svg>
    <div class="row text-center mt-5">
      <div class="col">
        <img src="assest/img/bedah.jpg" width="100%" height="239" alt="">
        <h5 class="mt-3 title-card-about">Bedah Umum</h4>
      </div>
      <div class="col">
        <img src="assest/img/Anestesiologi.webp" width="100%" height="239" alt="">
        <h5 class="mt-3 title-card-about">Anestesiologi</h4>
      </div>
      <div class="col">
        <img src="assest/img/anak.webp" width="100%" height="239" alt="">
        <h5 class="mt-3 title-card-about">Kondisi Anak</h4>
      </div>
    </div>
  </div>

  <!-- Services End -->

  <!-- Footer Start -->

  <div class="page2">
    <div class="row footer-bg">
      <div class="col m-5 text-white">
        <h4 class="subtitle">Axioo Care</h4>
        <p class="mt-4">axioocare@gmail.com</p>
        <p>0878-0265-1554</p>
        <p>Jl. Bojong Mekar, Nomor 102a, Kecamatan Cibeunying Kaler Kelurahan Cigadung</p>
      </div>
      <div class="col m-5 text-white">
        <h4 class="subtitle">Explore</h4>
        <p class="mt-4">Home</p>
        <p>About</p>
        <p>Services</p>
        <p>Contact</p>
      </div>
      <div class="col m-5 text-white">
        <h4 class="subtitle">Supported By</h4>
        <img class="mt-4" src="assest/img/axioo.png" alt="">
      </div>
  </div>

  <!-- Footer End -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>