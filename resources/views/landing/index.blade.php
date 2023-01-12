@extends('landing.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>PPDB SMK WIKRAMA BOGOR</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="assets/img/logo-wk.png" rel="icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/themes/splide-skyblue.min.css">

</head>

<body>
<main id="main">

<!-- ======= About Section ======= -->
<section id="jurusan" class="about pt-0">
<section id="hero" class="pt-0">
<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center ">
<div class="container d-flex align-items-center justify-content-lg-between">

<h4 class="navbar-brand logo me-auto me-lg-0 d-flex align-items-center">
<img src="{{ asset('assets') }}/img/logo-wk.png" alt="" class="rounded-circle me-3" height="45px" width="45px">
<a href="index.html">PPDB SMK WIKRAMA BOGOR</a>
</h4>
<!-- Uncomment below if you prefer to use an image logo -->
<!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

<nav id="navbar" class="navbar order-last order-lg-0">
<ul>
  <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
  <li><a class="nav-link scrollto" href="#jurusan">Jurusan</a></li>
  <li><a class="nav-link scrollto" href="#tentangkami">Tentang Kami</a></li>
  <li><a class="nav-link scrollto" href="#testimonials">Testimoni</a></li>
  <li><a class="nav-link scrollto" href="#contact">Hubungi Kami</a></li>
  <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
</ul>
<i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->

</div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<div class="hero-container">
<h1>PPDB TP 2023-2024 SMK WIKRAMA BOGOR</h1>
<h2>Ayo! segera daftarkan dirimu ke SMK WIKRAMA dengan cara klik Daftar Sekarang di bawah ini!</h2>
<a href="{{ route('register') }}" class="btn-get-started scrollto">Daftar Sekarang</a>
</div>
</section><!-- End Hero -->


<div class="container">
<div class="row">
  <div class="col-lg-4 col-md-6">
    <div class="icon-box">
      <div class="icon"><i class="bi bi-card-checklist" style="color: #e9bf06;"></i></div>
      <h4 class="title"><a href="">MOTO</a></h4>
      <p class="description">Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
    </div>
  </div>
  <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
    <div class="icon-box">
      <div class="icon"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
      <h4 class="title"><a href="">AFIRMASI</a></h4>
      <p class="description">Padamu Negeri - Kami Berjanji - Lulus Wikrama siap membangun negeri</p>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
    <div class="icon-box">
      <div class="icon"><i class="bi bi-brightness-high" style="color: #d6ff22;"></i></div>
      <h4 class="title"><a href="">ATITUDE</a></h4>
      <p class="description">Aku ada lingkunganku bahagia</p>
    </div>
  </div>
  


</div>
</section><!-- End About Section -->

<!-- ======= Our Values Section ======= -->
<section id="our-values" class="our-values">
<div class="container">
<div class="section-title">
  <h2>Jurusan</h2>
</div>

<div class="splide" role="group" aria-label="Splide Basic HTML Example">
<div class="splide__track">
<ul class="splide__list">
<li class="splide__slide d-flex justify-content-center">
<div class="card" style='background-image: url("assets/img/pplg.jpg"); width: 800px;'>
      <div class="card-body">
        <h5 class="card-title"><a href="">PPLG</a></h5>
        <p style="color: black; font-size: 22px;">Pengembangan Perangkat Lunak dan Gim</p>
        <p class="card-text">Dekstop Programming, Web Programming, Mobile Programming, Bussiness Analyst, Database Administration.</p>
      </div>
    </div>
</li>
<li class="splide__slide d-flex justify-content-center">
<div class="card" style='background-image: url("assets/img/tjkt.JPG"); width: 800px;'>
      <div class="card-body">
        <h5 class="card-title"><a href="">TJKT</a></h5>
        <p style="color: black; font-size: 22px;">Teknik Jaringan Komputer dan Telekomunikasi</p>
        <p class="card-text">Kompetensi keahlian Teknik Komputer dan Jaringan sudah memiliki sertifikasi internasional seperti CNAP (Cisco Networking Academy Program) dan MCNA (Mikro Certified Network Associate).</p>
      </div>
    </div>
</li>
<li class="splide__slide d-flex justify-content-center">
<div class="card" style='background-image: url("assets/img/dkv.JPG"); width: 800px;'>
      <div class="card-body">
        <h5 class="card-title"><a href="">DKV</a></h5>
        <p style="color: black; font-size: 22px;">Desain Komunikasi Visual</p>
        <p class="card-text">Lulusan dapat memiliki kesempatan kerja yang luas dibidang periklanan, production house, radio & televisi, studio foto, percetakan grafis, corporate brand identity, penerbit, majalah/koran, dll.</p>
      </div>
    </div>
</li>
<li class="splide__slide d-flex justify-content-center">
<div class="card" style='background-image: url("assets/img/pmn.jpg"); width: 800px;'>
      <div class="card-body">
        <h5 class="card-title"><a href="">PMN</a></h5>
        <p style="color: black; font-size: 22px;">Pemasaran</p>
        <p class="card-text">Kompetensi Keahlian Bisnis Daring dan Pemasaran memiliki kompetensi yang mirip dengan program Multimedia dan Perkantoran. Lulusan program ini diharuskan mampu membuat foto produk, desain, copy writing, dll.</p>
      </div>
    </div>
</li>
<li class="splide__slide d-flex justify-content-center">
    <div class="card" style='background-image: url("assets/img/mplbb.jpg"); width: 800px;'>
      <div class="card-body">
        <h5 class="card-title"><a href="">MPLB</a></h5>
        <p style="color: black; font-size: 22px;">Manajemen Perkantoran Lembaga Bisnis</p>
        <p class="card-text">Kompetensi Keahlian Otomatisasi dan Tata Kelola Perkantoran/Administrasi Perkantoran memiliki keunggulan dibidang prestasi peserta didik seperti juara II lomba keterampilan siswa bidang lomba sekretaris tingkat provinsi tahun 2016 dan juara I lomba olimpiade sekretaris tingkat nasional tahun 2017.</p>
      </div>
    </div>
</li>
<li class="splide__slide d-flex justify-content-center">
<div class="card" style='background-image: url("assets/img/tbg.jpg"); width: 800px;'>
      <div class="card-body">
        <h5 class="card-title"><a href="">TBG</a></h5>
        <p style="color: black; font-size: 22px;">Tata Boga</p>
        <p class="card-text">Siswa jurusan Tata Boga mampu bekerja diberbagai bidang boga seperti restoran, hotel, rumah sakit, katering sesuai dengan minat dan bakat yang telah dipelajari.</p>
      </div>
    </div>
</li>
<li class="splide__slide d-flex justify-content-center">
    <div class="card" style='background-image: url("assets/img/htl.jpg"); width: 800px;'>
      <div class="card-body">
        <h5 class="card-title"><a href="">HTL</a></h5>
        <p style="color: black; font-size: 22px;">Perhotelan</p>
        <p class="card-text">Siswa jurusan Perhotelan akan mampu bekerja di departemen yang ada di hotel dengan kompetensi yang mereka pelajari.</p>
      </div>
    </div>
</li>
</ul>
</div>
</div>

</div>
</section><!-- End Our Values Section -->

<!-- ======= Tentang Kami Section ======= -->
<section id="tentangkami" class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
  <div class="section-title">
    <h2>Tentang Kami</h2>
  </div>
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
                <img src="assets/img/gedung.png" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=Wag6WcgKO6o" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

              <h4 class="title"><a href="">Watch the video to </a>learn more about wikrama</h4>
              <br>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>

          </div>
        </div>

      </div>
    </section><!-- End Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
<div class="container">

<div class="section-title">
  <h2>Testimoni</h2>
</div>

<div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
  <div class="swiper-wrapper">

    <div class="swiper-slide">
      <div class="testimonial-item">
      <h2 class="title"><a href="">2000</a></h2>
        <p>
          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
          Maju terus wikrama, dengan sekolah di wikrama saya dibekali ilmu yang sangat bermanfaat dan akhlakul karimah bisa langsung bisa bersain ke dunia kerja di era modern ini.
          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
        </p>
        <h3>Akhmad Munito</h3>
        <h4>Administrasi Perkantoran (APK)</h4>
      </div>
    </div><!-- End testimonial item -->

    <div class="swiper-slide">
      <div class="testimonial-item">
      <h2 class="title"><a href="">2016</a></h2>
        <p>
          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
          Menerapkan sistem pembelajaran yang baik, efektif dan berbasis IT yang sangat memudahkan siswa.
          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
        </p>
        <h3>Kamaludin</h3>
        <h4>Rekayasa Perangkat Lunak (RPL)</h4>
      </div>
    </div><!-- End testimonial item -->

    <div class="swiper-slide">
      <div class="testimonial-item">
      <h2 class="title"><a href="">2011</a></h2>
        <p>
          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
          TSMK Wikrama bukan hanya menjadikan siswanya untuk masuk ke dunia kerja, melainkan melebihi dari apa yang dibutuhkan di dunia kerja pada umumnya.
          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
        </p>
        <h3>Luthfi Hakim</h3>
        <h4>Rekayasa Perangkat Lunak (RPL)</h4>
      </div>
    </div><!-- End testimonial item -->

  </div>
  <div class="swiper-pagination"></div>
</div>

</div>
</section><!-- End Testimonials Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
<div class="container">

<div class="section-title">
  <h2>Contact</h2>
</div>

<div class="row mt-3">

  <div class="col-lg-4">
    <div class="info">
      <div class="address">
        <i class="bi bi-geo-alt"></i>
        <h4>Location:</h4>
        <p>Jl. Raya Wangun
          Kelurahan Sindangsari
          Bogor Timur 16720</p>
      </div>

      <div class="email">
        <i class="bi bi-envelope"></i>
        <h4>Email:</h4>
        <p>smkwikrama.sch.id</p>
      </div>

      <div class="phone">
        <i class="bi bi-phone"></i>
        <h4>Call:</h4>
        <p>0251-8242411</p>
      </div>

    </div>

  </div>

  <div class="col-lg-8 mt-5 mt-lg-0">

    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
      <div class="row">
        <div class="form-group mt-3">
          <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" required>
        </div>
        <div class="col-md-6 form-group">
          <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
        </div>
      <div class="col-md-6 form-group mt-3 mt-md-0">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="+62" required>
      </div>
      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
      </div>
    </div>
      <div class="my-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>
      </div>
      <div class="text-center"><button type="submit">Kirim Pesan</button></div>
    </form>

  </div>

</div>

</div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
<div class="footer-top">
  <div class="container">
    <div class="row">

  <div class="col-lg-4 col-md-6 footer-info d-flex justify-content-center">
    <div class="social-links d-flex justify-content-center flex-column align-content-center">
    <img src="{{ asset('assets') }}/img/logo-wk.png" alt="" class="rounded-circle" height="150px" width="150px">
    <div class="d-flex justify-content-center mt-2">
    <a href="#" class="instagram ms-2"><i class="bi bi-instagram"></i></a>
    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 footer-links">
    <h4>Tautan</h4>
    <ul>
      <li><a href="#">Beranda</a></li>
      <li><a href="#">Jurusan</a></li>
      <li><a href="#">Tetang Kami</a></li>
      <li><a href="#">Testimoni</a></li>
      <li><a href="#">Hubungi Kami</a></li>
    </ul>
  </div>

  <div class="col-lg-4 col-md-6 footer-contact">
    <h4>Contact Us</h4>
    <p>
    Jl. Raya Wangun
      Kelurahan <br>Sindangsari
      Bogor Timur 16720 <br>
      <strong>Phone:</strong> 0251-8242411<br>
      <strong>Email:</strong> smkwikrama.sch.id
    </p>

  </div>

</div>
</div>
</div>

</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<script>
document.addEventListener( 'DOMContentLoaded', function() {
var splide = new Splide( '.splide' );
splide.mount();
} );
</script>

</body>

</html>