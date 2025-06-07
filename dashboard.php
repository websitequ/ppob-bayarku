<?php 
include 'includes/config.php';
include 'includes/auth.php'; // Check if user is logged in
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - <?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <div class="user-info">
                    <img src="assets/images/user-avatar.jpg" alt="User Avatar">
                    <div>
                        <h4><?php echo $_SESSION['user_name']; ?></h4>
                        <p>ID: <?php echo $_SESSION['user_id']; ?></p>
                    </div>
                </div>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li class="active"><a href="dashboard.php"><i class="fas fa-home"></i> Dashboard</a></li>
                    <li><a href="topup.php"><i class="fas fa-wallet"></i> Top Up Saldo</a></li>
                    <li><a href="transactions.php"><i class="fas fa-history"></i> Riwayat Transaksi</a></li>
                    <li><a href="#"><i class="fas fa-gift"></i> Bonus & Promo</a></li>
                    <li><a href="#"><i class="fas fa-users"></i> Referral</a></li>
                    <li><a href="#"><i class="fas fa-cog"></i> Pengaturan</a></li>
                    <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Keluar</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header class="main-header">
                <h2>Dashboard</h2>
                <div class="header-actions">
                    <div class="search-box">
                        <input type="text" placeholder="Cari produk...">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                    <button class="notification-btn">
                        <i class="fas fa-bell"></i>
                        <span class="badge">3</span>
                    </button>
                </div>
            </header>

            <!-- Balance Card -->
            <div class="balance-card">
                <div class="balance-info">
                    <h3>Saldo Anda</h3>
                    <h1>Rp <?php echo number_format($_SESSION['user_balance'], 0, ',', '.'); ?></h1>
                    <div class="balance-actions">
                        <a href="topup.php" class="btn-primary">Top Up</a>
                        <a href="#" class="btn-secondary">Tarik Saldo</a>
                    </div>
                </div>
                <div class="balance-stats">
                    <div class="stat-card">
                        <i class="fas fa-arrow-up"></i>
                        <div>
                            <p>Pemasukan</p>
                            <h4>Rp 1.250.000</h4>
                        </div>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-arrow-down"></i>
                        <div>
                            <p>Pengeluaran</p>
                            <h4>Rp 750.000</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="quick-actions">
                <h3>Layanan Cepat</h3>
                <div class="action-grid">
                    <a href="#" class="action-card">
                        <div class="action-icon" style="background-color: #4cc9f0;">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <p>Pulsa</p>
                    </a>
                    <a href="#" class="action-card">
                        <div class="action-icon" style="background-color: #4895ef;">
                            <i class="fas fa-wifi"></i>
                        </div>
                        <p>Paket Data</p>
                    </a>
                    <a href="#" class="action-card">
                        <div class="action-icon" style="background-color: #4361ee;">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <p>Token Listrik</p>
                    </a>
                    <a href="#" class="action-card">
                        <div class="action-icon" style="background-color: #3f37c9;">
                            <i class="fas fa-tint"></i>
                        </div>
                        <p>PDAM</p>
                    </a>
                    <a href="#" class="action-card">
                        <div class="action-icon" style="background-color: #7209b7;">
                            <i class="fas fa-gamepad"></i>
                        </div>
                        <p>Voucher Game</p>
                    </a>
                    <a href="#" class="action-card">
                        <div class="action-icon" style="background-color: #f72585;">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <p>E-Money</p>
                    </a>
                    <a href="#" class="action-card">
                        <div class="action-icon" style="background-color: #b5179e;">
                            <i class="fas fa-tv"></i>
                        </div>
                        <p>TV Kabel</p>
                    </a>
                    <a href="#" class="action-card">
                        <div class="action-icon" style="background-color: #560bad;">
                            <i class="fas fa-file-invoice"></i>
                        </div>
                        <p>Tagihan Lain</p>
                    </a>
                </div>
            </div>

            <!-- Recent Transactions -->
            <div class="recent-transactions">
                <div class="section-header">
                    <h3>Transaksi Terakhir</h3>
                    <a href="transactions.php" class="view-all">Lihat Semua</a>
                </div>
                <div class="transaction-list">
                    <div class="transaction-item">
                        <div class="transaction-icon success">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="transaction-info">
                            <h4>Pulsa Telkomsel 50.000</h4>
                            <p>12 Juni 2023 • 08:45</p>
                        </div>
                        <div class="transaction-amount">
                            <h4>- Rp 50.000</h4>
                            <p class="status success">Sukses</p>
                        </div>
                    </div>
                    <!-- More transaction items -->
                </div>
            </div>

            <!-- Promo Banner -->
            <div class="promo-banner">
                <div class="promo-content">
                    <h3>Dapatkan Cashback 10%</h3>
                    <p>Untuk semua pembelian paket data hingga 30 Juni 2023</p>
                    <button class="btn-primary">Klaim Sekarang</button>
                </div>
                <div class="promo-image">
                    <img src="assets/images/promo-banner.png" alt="Promo Banner">
                </div>
            </div>
        </main>
    </div>

    <div class="theme-toggle" id="themeToggle">
        <i class="fas fa-moon"></i>
    </div>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/chart.js"></script>
</body>
</html>