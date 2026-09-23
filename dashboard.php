<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - Voltify</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            background: #f5f7fa;
            font-family: 'Segoe UI', sans-serif;
            color: #1f2937;
        }

        /* SIDEBAR */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            background: #ffffff;
            border-right: 1px solid #e5e7eb;
            padding: 25px 15px;
            z-index: 1000;
        }

        .brand {
            font-size: 25px;
            font-weight: 700;
            color: #16a34a;
            padding: 0 15px;
            margin-bottom: 35px;
        }

        .brand i {
            margin-right: 6px;
        }

        .menu-title {
            font-size: 12px;
            color: #94a3b8;
            font-weight: 600;
            padding: 0 15px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-menu li {
            margin-bottom: 5px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 15px;
            border-radius: 10px;
            text-decoration: none;
            color: #64748b;
            transition: 0.3s;
        }

        .sidebar-menu a:hover {
            background: #f0fdf4;
            color: #16a34a;
        }

        .sidebar-menu a.active {
            background: #dcfce7;
            color: #16a34a;
            font-weight: 600;
        }

        .sidebar-menu i {
            font-size: 18px;
        }

        /* MAIN */
        .main-content {
            margin-left: 250px;
            min-height: 100vh;
        }

        /* TOPBAR */
        .topbar {
            height: 75px;
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
        }

        .page-title h4 {
            margin: 0;
            font-weight: 700;
        }

        .page-title small {
            color: #94a3b8;
        }

        .user-area {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .notification-btn {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            border: none;
            background: #f8fafc;
            color: #64748b;
            position: relative;
        }

        .notification-dot {
            position: absolute;
            width: 8px;
            height: 8px;
            background: #ef4444;
            border-radius: 50%;
            top: 8px;
            right: 8px;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #dcfce7;
            color: #16a34a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
        }

        /* CONTENT */
        .content {
            padding: 30px;
        }

        .welcome-box {
            background: linear-gradient(135deg, #16a34a, #15803d);
            border-radius: 20px;
            padding: 30px;
            color: white;
            margin-bottom: 25px;
        }

        .welcome-box h2 {
            font-weight: 700;
        }

        .welcome-box p {
            margin: 0;
            opacity: 0.85;
        }

        .welcome-icon {
            font-size: 80px;
            opacity: 0.15;
        }

        /* STAT CARD */
        .stat-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 22px;
            border: 1px solid #eef2f7;
            height: 100%;
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: #dcfce7;
            color: #16a34a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-bottom: 15px;
        }

        .stat-label {
            color: #64748b;
            font-size: 14px;
        }

        .stat-value {
            font-size: 27px;
            font-weight: 700;
            margin-top: 4px;
        }

        .stat-change {
            font-size: 12px;
            color: #16a34a;
            margin-top: 6px;
        }

        /* CARD */
        .dashboard-card {
            background: white;
            border-radius: 16px;
            border: 1px solid #eef2f7;
            padding: 25px;
            height: 100%;
        }

        .card-title {
            font-weight: 700;
            margin-bottom: 5px;
        }

        .card-subtitle {
            font-size: 13px;
            color: #94a3b8;
        }

        /* DEVICE */
        .device-item {
            display: flex;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #f1f5f9;
        }

        .device-item:last-child {
            border-bottom: none;
        }

        .device-icon {
            width: 45px;
            height: 45px;
            border-radius: 12px;
            background: #f0fdf4;
            color: #16a34a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-right: 13px;
        }

        .device-name {
            font-weight: 600;
        }

        .device-info {
            font-size: 12px;
            color: #94a3b8;
        }

        .device-value {
            margin-left: auto;
            font-weight: 600;
        }

        /* SCHEDULE */
        .schedule-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px 0;
            border-bottom: 1px solid #f1f5f9;
        }

        .schedule-item:last-child {
            border-bottom: none;
        }

        .schedule-time {
            font-weight: 700;
            color: #16a34a;
            min-width: 65px;
        }

        .schedule-icon {
            width: 40px;
            height: 40px;
            background: #f0fdf4;
            color: #16a34a;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .schedule-name {
            font-weight: 600;
        }

        .schedule-day {
            font-size: 12px;
            color: #94a3b8;
        }

        /* ALERT */
        .alert-energy {
            background: #fff7ed;
            border: 1px solid #fed7aa;
            border-radius: 14px;
            padding: 18px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .alert-icon {
            width: 45px;
            height: 45px;
            background: #ffedd5;
            color: #ea580c;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        /* QUICK ACTION */
        .quick-btn {
            display: flex;
            align-items: center;
            gap: 10px;
            width: 100%;
            border: 1px solid #e5e7eb;
            background: white;
            padding: 14px;
            border-radius: 12px;
            text-decoration: none;
            color: #374151;
            transition: 0.3s;
        }

        .quick-btn:hover {
            border-color: #16a34a;
            color: #16a34a;
            background: #f0fdf4;
        }

        .quick-btn i {
            color: #16a34a;
        }

        /* MOBILE */
        @media (max-width: 991px) {

            .sidebar {
                width: 75px;
                padding: 25px 10px;
            }

            .brand span,
            .menu-title,
            .sidebar-menu span {
                display: none;
            }

            .brand {
                text-align: center;
                padding: 0;
            }

            .sidebar-menu a {
                justify-content: center;
                padding: 13px;
            }

            .main-content {
                margin-left: 75px;
            }
        }

        @media (max-width: 576px) {

            .topbar {
                padding: 0 15px;
            }

            .content {
                padding: 15px;
            }

            .page-title small {
                display: none;
            }

            .welcome-icon {
                display: none;
            }
        }
    </style>
</head>

<body>

<!-- ================= SIDEBAR ================= -->

<aside class="sidebar">

    <div class="brand">
        <i class="bi bi-lightning-charge-fill"></i>
        <span>Voltify</span>
    </div>

    <div class="menu-title">
        Menu Utama
    </div>

    <ul class="sidebar-menu">

        <li>
            <a href="dashboard.php" class="active">
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li>
            <a href="perangkat.php">
                <i class="bi bi-plug-fill"></i>
                <span>Perangkat</span>
            </a>
        </li>

        <li>
            <a href="jadwal.php">
                <i class="bi bi-calendar-check"></i>
                <span>Jadwal</span>
            </a>
        </li>

        <li>
            <a href="kalkulator.php">
                <i class="bi bi-calculator"></i>
                <span>Kalkulator</span>
            </a>
        </li>

        <li>
            <a href="riwayat.php">
                <i class="bi bi-bar-chart-line"></i>
                <span>Riwayat</span>
            </a>
        </li>

    </ul>

    <div class="menu-title mt-4">
        Lainnya
    </div>

    <ul class="sidebar-menu">

        <li>
            <a href="notifikasi.php">
                <i class="bi bi-bell"></i>
                <span>Notifikasi</span>
            </a>
        </li>

        <li>
            <a href="profil.php">
                <i class="bi bi-person-circle"></i>
                <span>Profil</span>
            </a>
        </li>

        <li>
            <a href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Keluar</span>
            </a>
        </li>

    </ul>

</aside>


<!-- ================= MAIN ================= -->

<main class="main-content">

    <!-- TOPBAR -->

    <header class="topbar">

        <div class="page-title">

            <h4>
                Dashboard
            </h4>

            <small>
                Pantau penggunaan energi kamu hari ini
            </small>

        </div>


        <div class="user-area">

            <a href="notifikasi.php">

                <button class="notification-btn">

                    <i class="bi bi-bell"></i>

                    <span class="notification-dot"></span>

                </button>

            </a>

            <div class="avatar">
                L
            </div>

        </div>

    </header>


    <!-- CONTENT -->

    <div class="content">

        <!-- WELCOME -->

        <div class="welcome-box">

            <div class="row align-items-center">

                <div class="col">

                    <p class="mb-2">
                        Selamat datang kembali 👋
                    </p>

                    <h2>
                        Yuk, hemat energi hari ini!
                    </h2>

                    <p class="mt-2">
                        Pantau perangkat dan kebiasaan penggunaan
                        listrik agar tagihan tetap terkendali.
                    </p>

                </div>

                <div class="col-auto">

                    <i class="bi bi-lightning-charge-fill welcome-icon"></i>

                </div>

            </div>

        </div>


        <!-- STATISTIK -->

        <div class="row g-4 mb-4">

            <!-- KWH -->

            <div class="col-xl-3 col-md-6">

                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="bi bi-lightning-charge"></i>
                    </div>

                    <div class="stat-label">
                        Konsumsi Bulan Ini
                    </div>

                    <div class="stat-value">
                        189,5 kWh
                    </div>

                    <div class="stat-change">
                        <i class="bi bi-arrow-down"></i>
                        8,4% dari bulan lalu
                    </div>

                </div>

            </div>


            <!-- BIAYA -->

            <div class="col-xl-3 col-md-6">

                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="bi bi-cash-stack"></i>
                    </div>

                    <div class="stat-label">
                        Estimasi Tagihan
                    </div>

                    <div class="stat-value">
                        Rp 273.000
                    </div>

                    <div class="stat-change">
                        <i class="bi bi-check-circle"></i>
                        Dalam target
                    </div>

                </div>

            </div>


            <!-- DEVICE -->

            <div class="col-xl-3 col-md-6">

                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="bi bi-plug"></i>
                    </div>

                    <div class="stat-label">
                        Perangkat Aktif
                    </div>

                    <div class="stat-value">
                        8
                    </div>

                    <div class="stat-change">
                        2 perangkat ditambahkan
                    </div>

                </div>

            </div>


            <!-- TARGET -->

            <div class="col-xl-3 col-md-6">

                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="bi bi-bullseye"></i>
                    </div>

                    <div class="stat-label">
                        Target Bulanan
                    </div>

                    <div class="stat-value">
                        250 kWh
                    </div>

                    <div class="stat-change">
                        76% dari target
                    </div>

                </div>

            </div>

        </div>


        <!-- CHART + DEVICE -->

        <div class="row g-4 mb-4">

            <!-- CHART -->

            <div class="col-lg-8">

                <div class="dashboard-card">

                    <div class="d-flex justify-content-between align-items-start mb-4">

                        <div>

                            <div class="card-title">
                                Konsumsi Energi
                            </div>

                            <div class="card-subtitle">
                                Perbandingan penggunaan listrik selama 7 hari
                            </div>

                        </div>

                        <select class="form-select form-select-sm"
                                style="width: 120px;">

                            <option>7 Hari</option>
                            <option>30 Hari</option>
                            <option>6 Bulan</option>

                        </select>

                    </div>

                    <canvas id="energyChart" height="120"></canvas>

                </div>

            </div>


            <!-- TOP DEVICE -->

            <div class="col-lg-4">

                <div class="dashboard-card">

                    <div class="card-title">
                        Perangkat Terboros
                    </div>

                    <div class="card-subtitle mb-3">
                        Berdasarkan estimasi konsumsi
                    </div>


                    <div class="device-item">

                        <div class="device-icon">
                            <i class="bi bi-snow"></i>
                        </div>

                        <div>

                            <div class="device-name">
                                AC
                            </div>

                            <div class="device-info">
                                500 Watt
                            </div>

                        </div>

                        <div class="device-value">
                            96 kWh
                        </div>

                    </div>


                    <div class="device-item">

                        <div class="device-icon">
                            <i class="bi bi-droplet"></i>
                        </div>

                        <div>

                            <div class="device-name">
                                Dispenser
                            </div>

                            <div class="device-info">
                                300 Watt
                            </div>

                        </div>

                        <div class="device-value">
                            54 kWh
                        </div>

                    </div>


                    <div class="device-item">

                        <div class="device-icon">
                            <i class="bi bi-tv"></i>
                        </div>

                        <div>

                            <div class="device-name">
                                Televisi
                            </div>

                            <div class="device-info">
                                100 Watt
                            </div>

                        </div>

                        <div class="device-value">
                            15 kWh
                        </div>

                    </div>


                    <a href="perangkat.php"
                       class="btn btn-outline-success w-100 mt-3">

                        Lihat Semua Perangkat

                    </a>

                </div>

            </div>

        </div>


        <!-- SCHEDULE + NOTIFICATION -->

        <div class="row g-4 mb-4">

            <!-- JADWAL -->

            <div class="col-lg-7">

                <div class="dashboard-card">

                    <div class="d-flex justify-content-between align-items-center mb-2">

                        <div>

                            <div class="card-title">
                                Jadwal Hari Ini
                            </div>

                            <div class="card-subtitle">
                                Rencana penggunaan perangkat
                            </div>

                        </div>

                        <a href="jadwal.php"
                           class="btn btn-sm btn-outline-success">

                            Kelola

                        </a>

                    </div>


                    <div class="schedule-item">

                        <div class="schedule-time">
                            06:00
                        </div>

                        <div class="schedule-icon">
                            <i class="bi bi-cup-hot"></i>
                        </div>

                        <div>

                            <div class="schedule-name">
                                Dispenser
                            </div>

                            <div class="schedule-day">
                                Setiap hari
                            </div>

                        </div>

                    </div>


                    <div class="schedule-item">

                        <div class="schedule-time">
                            18:00
                        </div>

                        <div class="schedule-icon">
                            <i class="bi bi-tv"></i>
                        </div>

                        <div>

                            <div class="schedule-name">
                                Televisi
                            </div>

                            <div class="schedule-day">
                                Senin - Jumat
                            </div>

                        </div>

                    </div>


                    <div class="schedule-item">

                        <div class="schedule-time">
                            22:00
                        </div>

                        <div class="schedule-icon">
                            <i class="bi bi-snow"></i>
                        </div>

                        <div>

                            <div class="schedule-name">
                                AC
                            </div>

                            <div class="schedule-day">
                                Setiap hari
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- NOTIFIKASI -->

            <div class="col-lg-5">

                <div class="dashboard-card">

                    <div class="card-title">
                        Peringatan Energi
                    </div>

                    <div class="card-subtitle mb-3">
                        Pengingat untuk membantu menghemat listrik
                    </div>


                    <div class="alert-energy mb-3">

                        <div class="alert-icon">
                            <i class="bi bi-exclamation-triangle"></i>
                        </div>

                        <div>

                            <strong>
                                Penggunaan AC tinggi
                            </strong>

                            <div class="small text-muted">
                                Estimasi penggunaan melebihi kebiasaan.
                            </div>

                        </div>

                    </div>


                    <div class="alert-energy">

                        <div class="alert-icon">
                            <i class="bi bi-clock"></i>
                        </div>

                        <div>

                            <strong>
                                Jadwal AC mendekati selesai
                            </strong>

                            <div class="small text-muted">
                                Periksa jadwal penggunaan malam ini.
                            </div>

                        </div>

                    </div>


                    <a href="notifikasi.php"
                       class="btn btn-outline-success w-100 mt-3">

                        Lihat Semua Notifikasi

                    </a>

                </div>

            </div>

        </div>


        <!-- QUICK ACTION -->

        <div class="dashboard-card">

            <div class="card-title mb-3">
                Aksi Cepat
            </div>

            <div class="row g-3">

                <div class="col-md-3">

                    <a href="tambah_perangkat.php"
                       class="quick-btn">

                        <i class="bi bi-plus-circle"></i>

                        Tambah Perangkat

                    </a>

                </div>

                <div class="col-md-3">

                    <a href="jadwal.php"
                       class="quick-btn">

                        <i class="bi bi-calendar-plus"></i>

                        Tambah Jadwal

                    </a>

                </div>

                <div class="col-md-3">

                    <a href="kalkulator.php"
                       class="quick-btn">

                        <i class="bi bi-calculator"></i>

                        Hitung Energi

                    </a>

                </div>

                <div class="col-md-3">

                    <a href="riwayat.php"
                       class="quick-btn">

                        <i class="bi bi-clock-history"></i>

                        Lihat Riwayat

                    </a>

                </div>

            </div>

        </div>

    </div>

</main>


<!-- ================= CHART ================= -->

<script>

const ctx = document.getElementById('energyChart');

new Chart(ctx, {

    type: 'line',

    data: {

        labels: [
            'Sen',
            'Sel',
            'Rab',
            'Kam',
            'Jum',
            'Sab',
            'Min'
        ],

        datasets: [

            {
                label: 'Konsumsi kWh',

                data: [
                    8.2,
                    10.5,
                    9.1,
                    12.4,
                    11.2,
                    14.1,
                    10.8
                ],

                borderWidth: 3,

                tension: 0.4,

                fill: true
            }

        ]

    },

    options: {

        responsive: true,

        plugins: {

            legend: {
                display: false
            }

        },

        scales: {

            y: {

                beginAtZero: true,

                title: {
                    display: true,
                    text: 'kWh'
                }

            }

        }

    }

});

</script>

</body>
</html>