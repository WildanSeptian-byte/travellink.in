<!DOCTYPE html>
<lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Travel Website</title>
        <link rel="stylesheet" href="../assets/css/styles.css">
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
                        <li class="nav-item"><a class="nav-link" href="../index.php" class="active">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="../main/pemesanan.php">Pemesanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="../main/destinasi.php">Destination</a></li>
                        <li class="nav-item"><a class="nav-link" href="../main/about.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="main/daftar.php">Daftar</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Home Section -->
        <section class="home">
            <h1><span style="color: darkorange;">Travel</span> the world <br> and make <span style="color: darkorange;">STORY</span></h1>
        </section>

        <?php
        include '../lib/koneksi.php';

        $id_pemesanan = htmlentities($_GET['id_pemesanan']);

        $sql = "SELECT * FROM pemesanan where id_pemesanan = '$id_pemesanan' and is_deleted=0";

        $query = mysqli_query($db, $sql);

        if (mysqli_num_rows($query) == 0) {
            echo 'tidak ada';
            exit;
        } else {
            $detail = mysqli_fetch_row($query);
        ?>

            <main class="flex-shrink-0">
                <div class="container">
                    <form method="post" action="lib/proses.php">
                        <div class="card mt-2">
                            <div class="card-header bg-dark text-white">
                                Detail Pemesanan Paket Wisata #<?= $detail[0] ?>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="nama_pemesanan" class="form-label">Nama Lengkap</label>
                                    <div id="nama_pemesan"><?= $detail[1] ?></div>
                                </div>
                                <div class="mb-3">
                                    <label for="hp_pemesan" class="form-label">Nomor Handphone</label>
                                    <div id="hp_pemesan"><?= $detail[2] ?></div>
                                </div>
                                <div class="mb-3">
                                    <label for="waktu_wisata" class="form-label">Waktu Mulai Perjalanan</label>
                                    <div id="waktu_wisata"><?= $detail[3] ?></div>
                                </div>
                                <div class="mb-3">
                                    <label for="hari_wisata" class="form-label">Hari Wisata</label>
                                    <div id="hari_wisata"><?= $detail[4] ?></div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="paket_inap" value="1" id="paket_inap" <?= ($detail[5] == 1) ? 'checked' : '' ?> disabled>
                                        <label class="form-check-label" for="paket_inap">
                                            Penginapan (Rp. 1.000.000)
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="paket_transport" value="1" id="paket_transport" <?= ($detail[6] == 1) ? 'checked' : '' ?> disabled>
                                        <label class="form-check-label" for="paket_transport">
                                            Transportasi (Rp. 1.200.000)
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="paket_makan" value="1" id="paket_makan" <?= ($detail[7] == 1) ? 'checked' : '' ?> disabled>
                                        <label class="form-check-label" for="paket_makan">
                                            Service/ Makan (Rp. 500.000)
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
                                    <div id="jumlah_peserta"><?= $detail[8] ?></div>
                                </div>
                                <div class="mb-3">
                                    <label for="total" class="form-label">Total Tagihan</label>
                                    <div id="total">Rp. <?= number_format($detail[9], 0, ',', '.') ?></div>
                                </div>
                                <div class="mb-3">
                                    <label for="created_at" class="form-label">Waktu Pemesanan</label>
                                    <div id="created_at"><?= $detail[10] ?></div>
                                </div>
                            </div>
                            <div class="card-footer d-print-none">
                                <a href="index.php?aksi=pesan" class="btn btn-primary">Buat Pesanan Baru</a>
                                <a href="#" onclick="window.print()" class="btn btn-success">Cetak</a>
                            </div>
                        </div>
                    <?php } ?>



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