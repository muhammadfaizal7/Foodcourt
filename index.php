<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="mycss.css">
  <script src="myjs.js"></script>
  <meta charset="utf-8">

  <title>Restaurantly Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- CSS -->
<style>
  /* Modal Background */
  .modal {
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
    display: flex;
    justify-content: center;
    align-items: center;
  }

  /* Modal Content */
  .modal-content {
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    width: 400px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    animation: fadeIn 0.3s;
  }

  /* Header */
  .modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #ccc;
    padding-bottom: 10px;
  }

  .modal-header h4 {
    margin: 0;
  }

  .close {
    font-size: 24px;
    cursor: pointer;
  }

  /* Avatar */
  .avatar-container {
    text-align: center;
    margin-bottom: 20px;
  }

  .avatar {
    width: 100px;
    height: 100px;
    border-radius: 50%;
  }

  /* Form Elements */
  .form-group {
    margin-bottom: 15px;
  }

  .form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .btn {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .btn-success {
    background-color: #28a745;
    color: #fff;
  }

  .btn-danger {
    background-color: #dc3545;
    color: #fff;
  }

  /* Footer */
  .modal-footer {
    text-align: center;
    margin-top: 20px;
  }

  .modal-footer p {
    margin: 5px 0;
  }

  /* Animation */
  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }
</style>
</head>
<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
    <h1 class="logo me-auto me-lg-0">
      <a href="index.html">Food Court Etam </a>
    </h1>
    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
        <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
        <li><a class="nav-link scrollto" href="#chefs">Tenant</a></li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    <a
      href="#"
      class="book-a-table-btn scrollto d-none d-lg-flex"
      id="loginBtn"
    >Login</a>
<!-- Modal -->
<div id="loginModal" class="modal" style="display: none;">
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" id="closeModalBtn">&times;</span>
      <h4>Login</h4>
    </div>
    <div class="modal-body">
      <div class="avatar-container">
        <img src="assets/img/img_avatar2.png" alt="Avatar" class="avatar" />
      </div>
      <form role="form" method="post" action="ceklogin.php">
        <div class="form-group">
          <label for="author"><b>Authorized</b></label>
          <select class="form-control" name="author" id="author">
            <option>Admin</option>
            <option>Tenant</option>
            <option>Pembeli</option>
          </select>
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input
            type="text"
            class="form-control"
            id="username"
            name="user"
            placeholder="Enter email"
          />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input
            type="password"
            class="form-control"
            id="password"
            name="pass"
            placeholder="Enter password"
          />
        </div>
        <div class="form-group">
          <input type="checkbox" id="remember" />
          <label for="remember">Remember me</label>
        </div>
        <button type="submit" class="btn btn-success">Login</button>
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" id="closeModalFooterBtn">Cancel</button>
      <p>Not a member? <a href="#">Sign Up</a></p>
      <p>Forgot <a href="#">Password?</a></p>
    </div>
  </div>
</div>
</div>
</header>

<!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Selamat Datang di <span>Food Court Etam</span></h1>
          <h2>Pesan Mudah, Makan Puas di Food Court Favoritmu!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Macam-macam Menu</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Selamat datang di Foof Court Etam – solusi terbaik untuk memesan makanan dari food court di Tenggarong!</h3>
            <p class="fst-italic">
            Di Food Court Etam, kami percaya bahwa pengalaman bersantap seharusnya mudah, cepat, dan menyenangkan. Dengan platform ini, Anda dapat:
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>Temukan berbagai hidangan favorit dari makanan lokal hingga internasional yang tersedia di food court kami.</li>
              <li><i class="bi bi-check-circle"></i> Tidak perlu antri lagi! Cukup pilih menu favorit Anda, lakukan pemesanan, dan nikmati makanan Anda dalam waktu singkat.</li>
              <li><i class="bi bi-check-circle"></i> Kami menyediakan berbagai metode pembayaran yang aman dan nyaman, sehingga Anda bisa menikmati makanan tanpa rasa khawatir</li>
              <li><i class="bi bi-check-circle"></i>Tim kami selalu siap memastikan pengalaman bersantap Anda berjalan lancar</li>
            </ul>
            <p>
            Dengan keberagaman tenant kuliner yang kami hadirkan, [Nama Food Court Anda] menjadi destinasi pilihan untuk keluarga, teman, atau siapa saja yang ingin menikmati makanan enak dengan praktis di Tenggarong. Jelajahi, pesan, dan nikmati pengalaman kuliner terbaik bersama kami!
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kenapa Kami</h2>
          <p>Kenapa Harus memilih Food Court ini </p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Variasi</h4>
              <p>menyediakan berbagai jenis makanan dan minuman dari tenant terbaik di Tenggarong</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Kemudahan</h4>
              <p>Anda tidak perlu repot antri. Pilih menu favorit Anda, pesan dengan beberapa klik, dan makanan siap diantar atau diambil sesuai kenyamanan Anda.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4> Terjangkau</h4>
              <p>Kami menawarkan kuliner berkualitas dengan harga yang ramah di kantong, sehingga Anda dapat menikmati makanan lezat tanpa khawatir menguras dompet.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Cek Menu Pilihan Kamu disini</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Semua Menu</li>
              <li data-filter=".filter-makanan">Makanan</li>
              <li data-filter=".filter-minuman">Minuman</li>
              <li data-filter=".filter-cemilan">Cemilan</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-makanan">
            <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Lobster Seafood</a><span>Rp50.000</span>
            </div>
            <div class="menu-ingredients">
            Lobster adalah hidangan mewah yang terbuat dari daging lobster laut yang memiliki tekstur lembut dan rasa manis alami. 
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-cemilan">
            <img src="assets/img/menu/tahupentol.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Tahu isi Pentol</a><span>Rp17.000</span>
            </div>
            <div class="menu-ingredients">
            camilan khas yang terdiri dari tahu yang diisi dengan pentol (bola daging atau ayam) yang dibalut tepung dan digoreng hingga garing. 
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-makanan">
            <img src="assets/img/menu/nasi.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Nasi Goreng</a><span>Rp25.000</span>
            </div>
            <div class="menu-ingredients">
            hidangan khas Indonesia yang terbuat dari nasi yang digoreng dengan bumbu rempah, kecap manis, dan berbagai bahan tambahan seperti telur, ayam, udang, atau sayuran.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-minuman">
            <img src="assets/img/menu/escincau.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Es Cincau</a><span>Rp10.000</span>
            </div>
            <div class="menu-ingredients">
            minuman tradisional yang terbuat dari ekstrak daun cincau yang dipotong kecil-kecil dan dicampur dengan air es serta gula.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-cemilan">
            <img src="assets/img/menu/pisang.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Pisang Crispy</a><span>Rp15.000</span>
            </div>
            <div class="menu-ingredients">
            makanan yang terbuat dari pisang matang yang digoreng dengan balutan tepung renyah, memberikan tekstur garing di luar dan lembut di dalam.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-makanan">
            <img src="assets/img/menu/mie.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Mie Goreng</a><span>Rp20.000</span>
            </div>
            <div class="menu-ingredients">
            Mie Goreng adalah hidangan populer Indonesia yang terbuat dari mie yang digoreng bersama dengan bumbu khas, seperti kecap manis, bawang, dan cabai, serta berbagai bahan tambahan seperti ayam, telur, sayuran, atau seafood
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-minuman">
            <img src="assets/img/menu/esteh.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Es Teh</a><span>Rp7.000</span>
            </div>
            <div class="menu-ingredients">
            Es Teh adalah minuman penyegar yang terbuat dari teh hitam atau teh hijau yang diseduh dan kemudian didinginkan dengan es batu.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-minuman">
            <img src="assets/img/menu/esjeruk.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Es Jeruk</a><span>Rp8.000</span>
            </div>
            <div class="menu-ingredients">
            minuman segar yang terbuat dari perasan jeruk segar yang dicampur dengan air es dan sedikit gula, memberikan rasa manis dan asam yang menyegarkan. 
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-cemilan">
            <img src="assets/img/menu/kentang.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Kentang Goreng</a><span>Rp13.000</span>
            </div>
            <div class="menu-ingredients">
            camilan sederhana yang terbuat dari potongan kentang yang digoreng hingga garing dan renyah.
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimoni</h2>
          <p>Apa saja yang mereka katakan tentang Food Court ini</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Masakan disini enak-enak terutama pada makanan khas tenggarongnya.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saipul Ridho</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Ini pengalaman terbaik saya, karena pemesanan yang mudah dan makanan yang di hidangkan juga enak-enak.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Mikitu</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Saya akan sering-sering kesini sih, rekomendasi banget tempatnya.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Marvis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Untuk teman-teman yang lain jika pergi ke tenggarong wajib cobain ke tempat ini sih, rekomendasi banget.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Maat ridho ucup</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enak banget
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Vickit</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Beberapa foto tentang Food Court</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>tenant</h2>
          <p>Berbagai macam tenant ada disini</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/chefs/tenant1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Tenant 1</h4>
                  <span>Menjual Minuman Segar</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/chefs/tenant2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Tenant 2</h4>
                  <span>Menjual Makanan-makanan yang enak</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="assets/img/chefs/tenant3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Tenant 3</h4>
                  <span>Menjual Snack Ringan </span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <p>Hubungi Kami</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7067503495173!2d116.98965047269739!3d-0.42848516100490736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67ad1833c5f5d%3A0x5b5df4bc39f4240e!2sTenggarong%2C%20Timbau%2C%20Kec.%20Tenggarong%2C%20Kabupaten%20Kutai%20Kartanegara%2C%20Kalimantan%20Timur%2075513!5e0!3m2!1sid!2sid!4v1732504496650!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Timbau, Tenggarong no 72526</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Buka </h4>
                <p>
                  Selasa-Minggu:<br>
                  08.00 - 22.00 WITA
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>mhdfaizal7780</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Ponsell:</h4>
                <p>+62895704427842</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
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

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Food Court Etam</h3>
              <p>
                Tenggarong <br>
                203612, Timbau<br><br>
                <strong>Ponsell:</strong> +62 895704427842<br>
                <strong>Email:</strong> mhdfaizal7780@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Gunakan Link ini</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Servis Lainnya</h4></h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Pesan Lainnya</h4>
            <p>Semoga makin lancar usahanya ya!</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Restaurantly</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">Muhammad Faizal @2024</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- JavaScript -->
<script>
  // Show modal on login button click
  document.getElementById('loginBtn').addEventListener('click', function (e) {
    e.preventDefault();
    document.getElementById('loginModal').style.display = 'flex';
  });

  // Close modal on close button click
  document.getElementById('closeModalBtn').addEventListener('click', function () {
    document.getElementById('loginModal').style.display = 'none';
  });

  // Close modal on cancel button in footer
  document
    .getElementById('closeModalFooterBtn')
    .addEventListener('click', function () {
      document.getElementById('loginModal').style.display = 'none';
    });
</script>

</body>
</html>
