<?php include 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?> - PPOB Lengkap</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="hero">
        <nav>
            <div class="logo">
                <img src="assets/images/logo.png" alt="BayarKu">
                <span>BayarKu</span>
            </div>
            <ul class="nav-links">
                <li><a href="#features">Fitur</a></li>
                <li><a href="#products">Produk</a></li>
                <li><a href="#testimonials">Testimoni</a></li>
                <li><a href="login.php" class="btn-login">Masuk</a></li>
                <li><a href="register.php" class="btn-register">Daftar</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
        <div class="hero-content">
            <h1>Bayar Semua Tagihan dalam Satu Aplikasi</h1>
            <p>Pulsa, Paket Data, Listrik, PDAM, TV Kabel, dan banyak lagi dengan cepat dan mudah</p>
            <div class="hero-buttons">
                <a href="register.php" class="btn-primary">Mulai Sekarang</a>
                <a href="#how-it-works" class="btn-secondary">Pelajari Lebih Lanjut</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="assets/images/hero-illustration.png" alt="BayarKu App">
        </div>
    </header>

    <section id="features" class="features">
        <h2>Fitur Unggulan BayarKu</h2>
        <div class="feature-grid">
            <div class="feature-card">
                <i class="fas fa-bolt"></i>
                <h3>Cepat & Mudah</h3>
                <p>Proses pembayaran hanya dalam hitungan detik</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-shield-alt"></i>
                <h3>Aman & Terpercaya</h3>
                <p>Transaksi Anda dilindungi dengan sistem keamanan terbaik</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-percentage"></i>
                <h3>Komisi Referral</h3>
                <p>Dapatkan komisi dari setiap transaksi teman yang Anda ajak</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-mobile-alt"></i>
                <h3>Mobile Friendly</h3>
                <p>Akses dari perangkat apapun, kapanpun dan dimanapun</p>
            </div>
        </div>
    </section>

    <section id="products" class="products">
        <h2>Produk yang Tersedia</h2>
        <div class="product-categories">
            <button class="category-btn active" data-category="all">Semua</button>
            <button class="category-btn" data-category="pulsa">Pulsa</button>
            <button class="category-btn" data-category="data">Paket Data</button>
            <button class="category-btn" data-category="pln">Listrik</button>
            <button class="category-btn" data-category="pdam">PDAM</button>
            <button class="category-btn" data-category="game">Voucher Game</button>
            <button class="category-btn" data-category="emoney">E-Money</button>
        </div>
        <div class="product-grid">
            <!-- Products will be loaded via AJAX -->
        </div>
    </section>

    <section id="how-it-works" class="how-it-works">
        <h2>Cara Menggunakan BayarKu</h2>
        <div class="steps">
            <div class="step">
                <div class="step-number">1</div>
                <h3>Daftar Akun</h3>
                <p>Buat akun BayarKu secara gratis dalam 1 menit</p>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <h3>Top Up Saldo</h3>
                <p>Isi saldo melalui transfer bank, QRIS, atau e-wallet</p>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <h3>Pilih Produk</h3>
                <p>Pilih produk yang ingin dibeli atau tagihan yang akan dibayar</p>
            </div>
            <div class="step">
                <div class="step-number">4</div>
                <h3>Selesai!</h3>
                <p>Produk akan dikirim atau tagihan langsung terbayar</p>
            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials">
        <h2>Apa Kata Pengguna?</h2>
        <div class="testimonial-slider">
            <div class="testimonial-card">
                <div class="user-info">
                    <img src="assets/images/user1.jpg" alt="User">
                    <div>
                        <h4>Andi Wijaya</h4>
                        <p>Pengguna sejak 2022</p>
                    </div>
                </div>
                <p class="testimonial-text">"Sangat praktis! Sekarang semua tagihan bisa dibayar dalam satu aplikasi. Tidak perlu antri lagi."</p>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <!-- More testimonials -->
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <div class="logo">
                    <img src="assets/images/logo.png" alt="BayarKu">
                    <span>BayarKu</span>
                </div>
                <p>Solusi pembayaran dan pembelian pulsa serta tagihan terlengkap di Indonesia.</p>
                <div class="socials">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-section links">
                <h3>Tautan Cepat</h3>
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#features">Fitur</a></li>
                    <li><a href="#products">Produk</a></li>
                    <li><a href="#testimonials">Testimoni</a></li>
                    <li><a href="login.php">Masuk</a></li>
                    <li><a href="register.php">Daftar</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h3>Hubungi Kami</h3>
                <p><i class="fas fa-envelope"></i> support@bayarku.com</p>
                <p><i class="fas fa-phone"></i> +62 812 3456 7890</p>
                <p><i class="fas fa-map-marker-alt"></i> Jakarta, Indonesia</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> BayarKu. All Rights Reserved.</p>
            <div class="footer-menu">
                <a href="#">Kebijakan Privasi</a>
                <a href="#">Syarat & Ketentuan</a>
                <a href="#">FAQ</a>
            </div>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>