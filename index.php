<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Voltify - Smart Energy Habit & Bill Tracking</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f8fafc;
            color: #1f2937;
        }

        .navbar {
            background: #ffffff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
        }

        .navbar-brand {
            font-size: 25px;
            font-weight: 700;
            color: #16a34a !important;
        }

        .navbar-brand i {
            margin-right: 6px;
        }

        .hero {
            min-height: 620px;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #ecfdf5, #ffffff);
            padding: 80px 0;
        }

        .hero h1 {
            font-size: 52px;
            font-weight: 700;
            line-height: 1.15;
        }

        .hero h1 span {
            color: #16a34a;
        }

        .hero p {
            font-size: 18px;
            color: #64748b;
            line-height: 1.7;
            max-width: 600px;
        }

        .btn-primary-custom {
            background: #16a34a;
            color: white;
            padding: 12px 25px;
            border-radius: 10px;
            text-decoration: none;
            display: inline-block;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-primary-custom:hover {
            background: #15803d;
            color: white;
        }

        .btn-outline-custom {
            border: 2px solid #16a34a;
            color: #16a34a;
            padding: 10px 25px;
            border-radius: 10px;
            text-decoration: none;
            display: inline-block;
            font-weight: 600;
            margin-left: 10px;
        }

        .btn-outline-custom:hover {
            background: #16a34a;
            color: white;
        }

        .energy-card {
            background: white;
            border-radius: 25px;
            padding: 30px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.10);
        }

        .energy-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .energy-icon {
            width: 55px;
            height: 55px;
            background: #dcfce7;
            color: #16a34a;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
        }

        .energy-value {
            font-size: 35px;
            font-weight: 700;
            color: #16a34a;
        }

        .progress {
            height: 10px;
            border-radius: 10px;
            background: #e5e7eb;
        }

        .progress-bar {
            background: #16a34a;
            border-radius: 10px;
        }

        .device-item {
            padding: 15px 0;
            border-bottom: 1px solid #f1f5f9;
        }

        .device-item:last-child {
            border-bottom: none;
        }

        .device-icon {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: #f0fdf4;
            color: #16a34a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .section-title {
            font-weight: 700;
            font-size: 36px;
        }

        .section-subtitle {
            color: #64748b;
            max-width: 650px;
            margin: auto;
        }

        .feature-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            height: 100%;
            border: 1px solid #eef2f7;
            transition: 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.08);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: #dcfce7;
            color: #16a34a;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 27px;
            margin-bottom: 20px;
        }

        .feature-card h5 {
            font-weight: 700;
        }

        .feature-card p {
            color: #64748b;
            line-height: 1.6;
        }

        .stats-section {
            background: #16a34a;
            color: white;
            padding: 60px 0;
        }

        .stat-number {
            font-size: 40px;
            font-weight: 700;
        }

        .stat-text {
            opacity: 0.9;
        }

        .about-section {
            padding: 90px 0;
        }

        .about-box {
            background: white;
            padding: 40px;
            border-radius: 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.06);
        }

        footer {
            background: #111827;
            color: #cbd5e1;
            padding: 30px 0;
        }

        footer strong {
            color: white;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 40px;
            }

            .hero {
                text-align: center;
            }

            .hero p {
                margin: auto;
            }

            .btn-outline-custom {
                margin-left: 0;
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>

<!-- ================= NAVBAR ================= -->
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">

        <a class="navbar-brand" href="index.php">
            <i class="bi bi-lightning-charge-fill"></i>
            Voltify
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link active" href="index.php">
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#fitur">
                        Fitur
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#tentang">
                        Tentang
                    </a>
                </li>

                <li class="nav-item ms-lg-3">
                    <a href="login.php" class="btn btn-success px-4">
                        Login
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>


<!-- ================= HERO ================= -->
<section class="hero">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- TEXT -->
            <div class="col-lg-6">

                <div class="mb-3">
                    <span class="badge bg-success-subtle text-success px-3 py-2">
                        <i class="bi bi-stars"></i>
                        Smart Energy Management
                    </span>
                </div>

                <h1>
                    Hemat Listrik,
                    <span>Hemat Biaya.</span>
                </h1>

                <p class="mt-4">
                    Voltify membantu kamu memantau kebiasaan penggunaan
                    listrik, menghitung estimasi konsumsi energi,
                    memperkirakan tagihan, dan mengingatkan penggunaan
                    perangkat listrik secara lebih bijak.
                </p>

                <div class="mt-4">

                    <a href="register.php" class="btn-primary-custom">
                        Mulai Sekarang
                        <i class="bi bi-arrow-right"></i>
                    </a>

                    <a href="login.php" class="btn-outline-custom">
                        Login
                    </a>

                </div>

            </div>


            <!-- DASHBOARD PREVIEW -->
            <div class="col-lg-6">

                <div class="energy-card">

                    <div class="energy-header">

                        <div>
                            <small class="text-muted">
                                Estimasi Tagihan Bulanan
                            </small>

                            <div class="energy-value">
                                Rp 185.000
                            </div>
                        </div>

                        <div class="energy-icon">
                            <i class="bi bi-lightning-charge-fill"></i>
                        </div>

                    </div>

                    <div class="mb-4">

                        <div class="d-flex justify-content-between mb-2">

                            <small>
                                Penggunaan Energi
                            </small>

                            <small>
                                72%
                            </small>

                        </div>

                        <div class="progress">

                            <div class="progress-bar"
                                 style="width:72%">
                            </div>

                        </div>

                    </div>


                    <h6 class="fw-bold mb-3">
                        Perangkat Teratas
                    </h6>


                    <!-- DEVICE 1 -->
                    <div class="device-item d-flex align-items-center">

                        <div class="device-icon me-3">
                            <i class="bi bi-snow"></i>
                        </div>

                        <div class="flex-grow-1">

                            <strong>AC</strong>

                            <div class="small text-muted">
                                500 Watt · 8 jam/hari
                            </div>

                        </div>

                        <strong>
                            120 kWh
                        </strong>

                    </div>


                    <!-- DEVICE 2 -->
                    <div class="device-item d-flex align-items-center">

                        <div class="device-icon me-3">
                            <i class="bi bi-tv"></i>
                        </div>

                        <div class="flex-grow-1">

                            <strong>Televisi</strong>

                            <div class="small text-muted">
                                100 Watt · 5 jam/hari
                            </div>

                        </div>

                        <strong>
                            15 kWh
                        </strong>

                    </div>


                    <!-- DEVICE 3 -->
                    <div class="device-item d-flex align-items-center">

                        <div class="device-icon me-3">
                            <i class="bi bi-cup-hot"></i>
                        </div>

                        <div class="flex-grow-1">

                            <strong>Dispenser</strong>

                            <div class="small text-muted">
                                300 Watt · 6 jam/hari
                            </div>

                        </div>

                        <strong>
                            54 kWh
                        </strong>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= STATS ================= -->
<section class="stats-section">

    <div class="container">

        <div class="row text-center g-4">

            <div class="col-md-3">

                <div class="stat-number">
                    24/7
                </div>

                <div class="stat-text">
                    Pemantauan Kebiasaan
                </div>

            </div>


            <div class="col-md-3">

                <div class="stat-number">
                    6+
                </div>

                <div class="stat-text">
                    Fitur Utama
                </div>

            </div>


            <div class="col-md-3">

                <div class="stat-number">
                    kWh
                </div>

                <div class="stat-text">
                    Monitoring Energi
                </div>

            </div>


            <div class="col-md-3">

                <div class="stat-number">
                    Rp
                </div>

                <div class="stat-text">
                    Estimasi Biaya
                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= FITUR ================= -->
<section id="fitur" class="py-5">

    <div class="container py-5">

        <div class="text-center mb-5">

            <h2 class="section-title">
                Fitur Voltify
            </h2>

            <p class="section-subtitle mt-3">
                Kelola penggunaan listrik rumah dengan data,
                perhitungan, dan pengingat yang mudah dipahami.
            </p>

        </div>


        <div class="row g-4">

            <!-- FITUR 1 -->
            <div class="col-md-6 col-lg-4">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-speedometer2"></i>
                    </div>

                    <h5>
                        Dashboard Energi
                    </h5>

                    <p>
                        Melihat ringkasan penggunaan energi,
                        estimasi tagihan, dan perangkat yang
                        paling banyak menggunakan listrik.
                    </p>

                </div>

            </div>


            <!-- FITUR 2 -->
            <div class="col-md-6 col-lg-4">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-plug"></i>
                    </div>

                    <h5>
                        Manajemen Perangkat
                    </h5>

                    <p>
                        Tambahkan perangkat listrik beserta daya
                        dan lama penggunaan untuk mendapatkan
                        estimasi konsumsi energi.
                    </p>

                </div>

            </div>


            <!-- FITUR 3 -->
            <div class="col-md-6 col-lg-4">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-calculator"></i>
                    </div>

                    <h5>
                        Kalkulator Energi
                    </h5>

                    <p>
                        Hitung perkiraan kWh dan biaya listrik
                        berdasarkan daya perangkat dan durasi
                        penggunaannya.
                    </p>

                </div>

            </div>


            <!-- FITUR 4 -->
            <div class="col-md-6 col-lg-4">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-calendar-check"></i>
                    </div>

                    <h5>
                        Jadwal Penggunaan
                    </h5>

                    <p>
                        Atur jadwal penggunaan perangkat agar
                        kebiasaan hemat listrik lebih mudah
                        diterapkan setiap hari.
                    </p>

                </div>

            </div>


            <!-- FITUR 5 -->
            <div class="col-md-6 col-lg-4">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-bell"></i>
                    </div>

                    <h5>
                        Pengingat
                    </h5>

                    <p>
                        Mendapatkan pengingat berdasarkan jadwal
                        dan pola penggunaan yang telah dicatat
                        di dalam aplikasi.
                    </p>

                </div>

            </div>


            <!-- FITUR 6 -->
            <div class="col-md-6 col-lg-4">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-bar-chart-line"></i>
                    </div>

                    <h5>
                        Riwayat & Statistik
                    </h5>

                    <p>
                        Melihat riwayat penggunaan listrik dan
                        perkembangan konsumsi energi dari waktu
                        ke waktu.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= TENTANG ================= -->
<section id="tentang" class="about-section">

    <div class="container">

        <div class="about-box">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <span class="text-success fw-semibold">
                        TENTANG VOLTIFY
                    </span>

                    <h2 class="section-title mt-2">
                        Bijak menggunakan energi
                        dimulai dari kebiasaan.
                    </h2>

                </div>

                <div class="col-lg-6">

                    <p class="text-muted lh-lg">
                        Voltify merupakan aplikasi berbasis web yang
                        dirancang untuk membantu pengguna memahami
                        kebiasaan penggunaan listrik rumah tangga.
                    </p>

                    <p class="text-muted lh-lg">
                        Pengguna dapat mencatat perangkat listrik,
                        memasukkan daya dan durasi pemakaian,
                        menghitung estimasi konsumsi energi,
                        memperkirakan biaya, membuat jadwal,
                        serta menerima pengingat.
                    </p>

                    <div class="mt-4">

                        <span class="badge bg-success-subtle text-success p-2 me-2">
                            Hemat Energi
                        </span>

                        <span class="badge bg-success-subtle text-success p-2 me-2">
                            Monitoring
                        </span>

                        <span class="badge bg-success-subtle text-success p-2">
                            Smart Habit
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= FOOTER ================= -->
<footer>

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6">

                <strong>
                    <i class="bi bi-lightning-charge-fill"></i>
                    Voltify
                </strong>

                <div class="small mt-2">
                    Smart Energy Habit & Bill Tracking App
                </div>

            </div>

            <div class="col-md-6 text-md-end mt-3 mt-md-0">

                <div class="small">
                    &copy; 2026 Voltify. All Rights Reserved.
                </div>

            </div>

        </div>

    </div>

</footer>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>