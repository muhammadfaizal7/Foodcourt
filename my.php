<?php
  session_start();
  // var_dump($_SESSION)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>WebAPP Food Court Etam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="mycss.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    /* Custom Styles for Food Court Theme */
    body {
      background-color: #F4F1EB; /* Light brownish background */
      color: #5B3A29; /* Dark brown text */
    }

    .navbar {
      background-color: #6F4F37; /* Brown color */
    }

    .navbar-nav .nav-link {
      color: #F4F1EB; /* Light cream text */
    }

    .navbar-nav .nav-link:hover {
      color: #FFD700; /* Gold hover effect */
    }

    .navbar-nav .dropdown-menu {
      background-color: #6F4F37;
    }

    .navbar-nav .dropdown-item {
      color: #F4F1EB;
    }

    .navbar-nav .dropdown-item:hover {
      background-color: #FFD700; /* Gold hover for dropdown items */
      color: #5B3A29; /* Dark brown text on hover */
    }

    .banner {
      background-color: #8B5E3C; /* Dark brown banner */
      color: #F4F1EB;
      padding: 50px 0;
      text-align: center;
    }

    .banner h1 {
      font-size: 3rem;
      font-weight: bold;
    }

    .banner p {
      font-size: 1.2rem;
    }

    .footer {
      background-color: #6F4F37;
      color: #F4F1EB;
      padding: 20px 0;
      text-align: center;
    }

    .fakeimg {
      width: 100%;
      max-width: 200px;
      height: 200px;
      margin: auto;
    }

    .fakeimg img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .btn-danger {
      background-color: #D2691E; /* Chocolate color for log out button */
      border: none;
    }

    .btn-danger:hover {
      background-color: #A52A2A; /* Darker chocolate color on hover */
    }

    .dropdown-menu {
      border-radius: 0;
    }
  </style>
</head>
<body>

<!-- banner -->
<div class="banner">
  <h1>Food Court ETAM</h1>
  <p>Tempat makan dan minum yang nyaman dengan berbagai pilihan kuliner</p>
</div>

<!-- menu -->
<nav class="navbar navbar-expand-sm navbar-dark">
  <div class="container">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="my.php?p=beranda">Home</a>
      </li>
      <!-- Menu Master data -->
      <?php if($_SESSION['author']=="Pengelola" || $_SESSION['author']=='Admin'){ ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Master Data</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="my.php?p=tenant">Data Tenant</a></li>
          <li><a class="dropdown-item" href="my.php?p=pembeli">Data Pembeli</a></li>
        </ul>
      </li>
      <?php } ?>
      <!-- Menu Tenant -->
      <?php if($_SESSION['author']=="Tenant" || $_SESSION['author']=='Admin'){ ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Tenant</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="my.php?p=aksesmenu">Akses Daftar Menu</a></li>
          <li><a class="dropdown-item" href="my.php?p=menu">Masukkan Pesanan</a></li>
        </ul>
      </li>
      <?php } ?>
      <!-- Menu Pembeli -->
      <?php if($_SESSION['author']=="Pembeli" || $_SESSION['author']=='Admin'){ ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Daftar Menu</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="my.php?p=menu">Akses Menu</a></li>
          <li><a class="dropdown-item" href="my.php?p=konfirmasi_pesanan">Bayar</a></li>
        </ul>
      </li>
      <?php } ?>

      <!-- menu set harga -->
      <?php if($_SESSION['author']=='Admin'){ ?>
      <li class="nav-item">
        <a class="nav-link" href="my.php?p=datamenu">Set Harga</a>
      </li>
      <?php } ?>
      <!-- menu kasir -->
      <?php if($_SESSION['author']=='Admin'){ ?>
      <li class="nav-item">
        <a class="nav-link" href="my.php?p=kasir">Kasir</a>
      </li>
      <?php } ?>
      <!-- menu grafik penjualan -->
      <?php if($_SESSION['author']=='Admin'){ ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Laporan</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="my.php?p=grafkeseluruhan">Laporan Keseluruhan</a></li>
          <li><a class="dropdown-item" href="my.php?p=graftenant">Laporan Per-Tenant</a></li>
        </ul>
      </li>
      <?php } ?>
      <!-- Bagian Admin -->
      <?php if($_SESSION['author']=='Admin'){ ?>
      <li class="nav-item">
        <a class="nav-link active" href="my.php?p=setuser">Manajemen User</a>
      </li>
      <?php } ?>
    </ul>
  </div>
</nav>

<!-- content -->
<div class="container mt-5">
  <div class="row">
    <!-- Side Left -->
    <div class="container mt-3">
    <div class="row">
      <div class="col-sm-2">
        <h2>About Me</h2>
        <div class="fakeimg">
          <img src="assets/img/<?php echo $_SESSION["foto"]; ?>" alt="Avatar" class="rounded" width="200px" height="200px">
        </div>
        <p>Nama : <?php echo $_SESSION["nama"]; ?> </p>
        <p>Username : <?php echo $_SESSION["user"]; ?></p>
        <hr class="d-sm-none">
        <a href="logout.php" class="btn btn-danger">Log Out</a>
      </div>
    <!-- side right -->
    <div class="col-sm-10">
      <?php
        $pages_dir='page5a';
        if(!empty($_GET['p'])){
          $pages=scandir($pages_dir,0);
          unset($pages[0],$pages[1]);
          $p=$_GET['p'];
          if(in_array($p.'.php',$pages)){
            include($pages_dir.'/'.$p.'.php');
          }else{
            echo "Halaman tidak ditemukan";
          }
        }else{
          include($pages_dir.'/beranda.php');
        }
      ?>
    </div>
  </div>
</div>

<!-- footer -->
<div class="footer">
  <p>&copy; 2024 Food Court ETAM. All rights reserved.</p>
</div>

</body>
</html>
