<!DOCTYPE html>
<lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>
    <!-- Header -->
    <header>
      <div class="nav-container">
        <div class="logo">
          <h1><span style="color: darkorange;">Travellink.in</span></h1>
        </div>
        <nav>
          <ul>
            <li class="nav-item"><a class="nav-link" href="index.php" class="active">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="main/pemesanan.php">Pemesanan</a></li>
            <li class="nav-item"><a class="nav-link" href="main/destinasi.php">Destination</a></li>
            <li class="nav-item"><a class="nav-link" href="main/about.php">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="daftar.php">Daftar</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- Home Section -->
    <section class="home">
      <h1><span style="color: darkorange;">Travel</span> the world <br> and make <span style="color: darkorange;">STORY</span></h1>
    </section>


    <?php
    include 'lib/koneksi.php';

    $sql = "SELECT * FROM pemesanan where is_deleted = 0 order by created_at desc";

    $query = mysqli_query($db, $sql);

    if (mysqli_num_rows($query) == 0) {
      echo 'tidak ada';
      exit;
    } else {
      $detail = mysqli_fetch_row($query);
    ?>
      <h1 class="py-4 text-center">Daftar Pemesanan</h1>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Pemesan</th>
            <th scope="col">Nomor HP</th>
            <th scope="col">Tanggal Berangkat</th>
            <th scope="col">Total Tagihan</th>
            <th scope="col">Detail</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $co = 1;
          while ($detail = mysqli_fetch_assoc($query)) {
          ?>
            <tr>
              <th scope="row"><?= $co ?></th>
              <td><?= $detail['nama_pemesanan'] ?></td>
              <td><?= $detail['hp_pemesan'] ?></td>
              <td><?= $detail['waktu_wisata'] ?></td>
              <td><?= $detail['total_tagihan'] ?></td>
              <td><a href="main/detail.php?id_pemesanan=<?= $detail['id_pemesanan'] ?>">Detail</a>
                <a href="main/hapus.php?id_pemesanan=<?= $detail['id_pemesanan'] ?>">Edit</a>
                <a href="main/hapus.php?id_pemesanan=<?= $detail['id_pemesanan'] ?>">Hapus</a>
              </td>
            </tr>
          <?php
            $co++;
          }
          ?>
        </tbody>
      </table>
    <?php
    }
    ?>


    <!-- Footer Section -->
    <footer class="footer">
      <div class="footer-container">
        <!-- Logo and Description -->
        <div class="footer-logo">
          <h2 class="logo-text">Travellink.in</h2>
          <p class="footer-description">
            We believe brand interaction is key in communication. Real innovations and a positive.
          </p>
          <div class="footer-socials">
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
          </div>
        </div>

        <!-- Navigation Links -->
        <div class="footer-links">
          <div class="footer-column">
            <h4>About us</h4>
            <ul>
              <li><a href="#">Features</a></li>
              <li><a href="#">FAQ's</a></li>
              <li><a href="#">News</a></li>
              <li><a href="#">Pricing</a></li>
            </ul>
          </div>
          <div class="footer-column">
            <h4>Company</h4>
            <ul>
              <li><a href="#">Core values</a></li>
              <li><a href="#">Partner w/ us</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="footer-column">
            <h4>Support</h4>
            <ul>
              <li><a href="#">Support center</a></li>
              <li><a href="#">Feedback</a></li>
              <li><a href="#">Accessibility</a></li>
            </ul>
          </div>
        </div>

        <!-- Get in Touch Form -->
        <div class="footer-contact">
          <h4>Get in touch</h4>
          <form>
            <input type="email" placeholder="Your email here..." class="footer-input" />
            <button type="submit" class="footer-button">Get Access</button>
          </form>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <p>Travellink© 2024 All Right Reserved</p>
        <div class="footer-bottom-links">
          <a href="#">Terms of Service</a>
          <span>|</span>
          <a href="#">Privacy Policy</a>
        </div>
      </div>
    </footer>