<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Perangkat - Voltify</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

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

        .header-card {
            background: linear-gradient(135deg, #16a34a, #15803d);
            color: white;
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 25px;
        }

        .header-card h2 {
            font-weight: 700;
        }

        .header-card p {
            margin-bottom: 0;
            opacity: 0.85;
        }

        .header-icon {
            font-size: 75px;
            opacity: 0.15;
        }

        /* SUMMARY */
        .summary-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            border: 1px solid #eef2f7;
            height: 100%;
        }

        .summary-icon {
            width: 45px;
            height: 45px;
            border-radius: 12px;
            background: #dcfce7;
            color: #16a34a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-bottom: 12px;
        }

        .summary-label {
            color: #64748b;
            font-size: 13px;
        }

        .summary-value {
            font-size: 25px;
            font-weight: 700;
        }

        /* DEVICE CARD */
        .device-card {
            background: white;
            border-radius: 16px;
            border: 1px solid #eef2f7;
            padding: 22px;
            height: 100%;
            transition: 0.3s;
        }

        .device-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.07);
        }

        .device-top {
            display: flex;
            justify-content: space-between;
            align-items: start;
        }

        .device-icon {
            width: 55px;
            height: 55px;
            border-radius: 15px;
            background: #f0fdf4;
            color: #16a34a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
        }

        .status-active {
            background: #dcfce7;
            color: #15803d;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
        }

        .status-inactive {
            background: #f1f5f9;
            color: #64748b;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
        }

        .device-card h5 {
            font-weight: 700;
            margin-top: 18px;
        }

        .device-category {
            color: #94a3b8;
            font-size: 13px;
        }

        .device-detail {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-top: 1px solid #f1f5f9;
            margin-top: 15px;
        }

        .detail-label {
            color: #64748b;
            font-size: 13px;
        }

        .detail-value {
            font-weight: 600;
            font-size: 13px;
        }

        .device-actions {
            display: flex;
            gap: 8px;
            margin-top: 15px;
        }

        .device-actions a {
            flex: 1;
        }

        /* FILTER */
        .filter-card {
            background: white;
            padding: 18px;
            border-radius: 15px;
            border: 1px solid #eef2f7;
            margin-bottom: 25px;
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

            .content {
                padding: 15px;
            }

            .topbar {
                padding: 0 15px;
            }

            .page-title small {
                display: none;
            }

            .header-icon {
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
            <a href="dashboard.php">
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li>
            <a href="perangkat.php" class="active">
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
                Perangkat Listrik
            </h4>

            <small>
                Kelola perangkat dan konsumsi energinya
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

        <!-- HEADER -->

        <div class="header-card">

            <div class="row align-items-center">

                <div class="col">

                    <h2>
                        Perangkat Saya
                    </h2>

                    <p>
                        Catat perangkat listrik di rumah untuk
                        menghitung estimasi konsumsi energi dan biaya.
                    </p>

                </div>

                <div class="col-auto">

                    <i class="bi bi-plug-fill header-icon"></i>

                </div>

            </div>

        </div>


        <!-- SUMMARY -->

        <div class="row g-4 mb-4">

            <div class="col-md-4">

                <div class="summary-card">

                    <div class="summary-icon">
                        <i class="bi bi-plug-fill"></i>
                    </div>

                    <div class="summary-label">
                        Total Perangkat
                    </div>

                    <div class="summary-value">
                        8
                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div class="summary-card">

                    <div class="summary-icon">
                        <i class="bi bi-lightning-charge"></i>
                    </div>

                    <div class="summary-label">
                        Total Daya
                    </div>

                    <div class="summary-value">
                        2.450 Watt
                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div class="summary-card">

                    <div class="summary-icon">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>

                    <div class="summary-label">
                        Estimasi Konsumsi
                    </div>

                    <div class="summary-value">
                        189,5 kWh
                    </div>

                </div>

            </div>

        </div>


        <!-- FILTER + TAMBAH -->

        <div class="filter-card">

            <div class="row align-items-center g-3">

                <div class="col-md-5">

                    <div class="input-group">

                        <span class="input-group-text bg-white">
                            <i class="bi bi-search"></i>
                        </span>

                        <input
                            type="text"
                            class="form-control"
                            placeholder="Cari perangkat..."
                        >

                    </div>

                </div>


                <div class="col-md-3">

                    <select class="form-select">

                        <option selected>
                            Semua Kategori
                        </option>

                        <option>
                            Pendingin
                        </option>

                        <option>
                            Elektronik
                        </option>

                        <option>
                            Dapur
                        </option>

                        <option>
                            Penerangan
                        </option>

                        <option>
                            Lainnya
                        </option>

                    </select>

                </div>


                <div class="col-md-4 text-md-end">

                    <a
                        href="tambah_perangkat.php"
                        class="btn btn-success">

                        <i class="bi bi-plus-lg"></i>
                        Tambah Perangkat

                    </a>

                </div>

            </div>

        </div>


        <!-- DEVICE LIST -->

        <div class="row g-4">


            <!-- AC -->

            <div class="col-xl-3 col-lg-4 col-md-6">

                <div class="device-card">

                    <div class="device-top">

                        <div class="device-icon">
                            <i class="bi bi-snow"></i>
                        </div>

                        <span class="status-active">
                            Aktif
                        </span>

                    </div>

                    <h5>
                        AC Kamar
                    </h5>

                    <div class="device-category">
                        Pendingin
                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Daya
                        </span>

                        <span class="detail-value">
                            500 Watt
                        </span>

                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Pemakaian
                        </span>

                        <span class="detail-value">
                            8 jam/hari
                        </span>

                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Estimasi
                        </span>

                        <span class="detail-value text-success">
                            120 kWh/bln
                        </span>

                    </div>

                    <div class="device-actions">

                        <a
                            href="edit_perangkat.php"
                            class="btn btn-outline-success btn-sm">

                            <i class="bi bi-pencil"></i>
                            Edit

                        </a>

                        <a
                            href="hapus_perangkat.php"
                            class="btn btn-outline-danger btn-sm">

                            <i class="bi bi-trash"></i>
                            Hapus

                        </a>

                    </div>

                </div>

            </div>


            <!-- KULKAS -->

            <div class="col-xl-3 col-lg-4 col-md-6">

                <div class="device-card">

                    <div class="device-top">

                        <div class="device-icon">
                            <i class="bi bi-box-seam"></i>
                        </div>

                        <span class="status-active">
                            Aktif
                        </span>

                    </div>

                    <h5>
                        Kulkas
                    </h5>

                    <div class="device-category">
                        Dapur
                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Daya
                        </span>

                        <span class="detail-value">
                            150 Watt
                        </span>

                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Pemakaian
                        </span>

                        <span class="detail-value">
                            24 jam/hari
                        </span>

                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Estimasi
                        </span>

                        <span class="detail-value text-success">
                            108 kWh/bln
                        </span>

                    </div>

                    <div class="device-actions">

                        <a
                            href="edit_perangkat.php"
                            class="btn btn-outline-success btn-sm">

                            <i class="bi bi-pencil"></i>
                            Edit

                        </a>

                        <a
                            href="hapus_perangkat.php"
                            class="btn btn-outline-danger btn-sm">

                            <i class="bi bi-trash"></i>
                            Hapus

                        </a>

                    </div>

                </div>

            </div>


            <!-- TV -->

            <div class="col-xl-3 col-lg-4 col-md-6">

                <div class="device-card">

                    <div class="device-top">

                        <div class="device-icon">
                            <i class="bi bi-tv"></i>
                        </div>

                        <span class="status-active">
                            Aktif
                        </span>

                    </div>

                    <h5>
                        Televisi
                    </h5>

                    <div class="device-category">
                        Elektronik
                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Daya
                        </span>

                        <span class="detail-value">
                            100 Watt
                        </span>

                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Pemakaian
                        </span>

                        <span class="detail-value">
                            5 jam/hari
                        </span>

                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Estimasi
                        </span>

                        <span class="detail-value text-success">
                            15 kWh/bln
                        </span>

                    </div>

                    <div class="device-actions">

                        <a
                            href="edit_perangkat.php"
                            class="btn btn-outline-success btn-sm">

                            <i class="bi bi-pencil"></i>
                            Edit

                        </a>

                        <a
                            href="hapus_perangkat.php"
                            class="btn btn-outline-danger btn-sm">

                            <i class="bi bi-trash"></i>
                            Hapus

                        </a>

                    </div>

                </div>

            </div>


            <!-- DISPENSER -->

            <div class="col-xl-3 col-lg-4 col-md-6">

                <div class="device-card">

                    <div class="device-top">

                        <div class="device-icon">
                            <i class="bi bi-droplet"></i>
                        </div>

                        <span class="status-active">
                            Aktif
                        </span>

                    </div>

                    <h5>
                        Dispenser
                    </h5>

                    <div class="device-category">
                        Dapur
                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Daya
                        </span>

                        <span class="detail-value">
                            300 Watt
                        </span>

                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Pemakaian
                        </span>

                        <span class="detail-value">
                            6 jam/hari
                        </span>

                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Estimasi
                        </span>

                        <span class="detail-value text-success">
                            54 kWh/bln
                        </span>

                    </div>

                    <div class="device-actions">

                        <a
                            href="edit_perangkat.php"
                            class="btn btn-outline-success btn-sm">

                            <i class="bi bi-pencil"></i>
                            Edit

                        </a>

                        <a
                            href="hapus_perangkat.php"
                            class="btn btn-outline-danger btn-sm">

                            <i class="bi bi-trash"></i>
                            Hapus

                        </a>

                    </div>

                </div>

            </div>


            <!-- SETRIKA -->

            <div class="col-xl-3 col-lg-4 col-md-6">

                <div class="device-card">

                    <div class="device-top">

                        <div class="device-icon">
                            <i class="bi bi-wind"></i>
                        </div>

                        <span class="status-active">
                            Aktif
                        </span>

                    </div>

                    <h5>
                        Setrika
                    </h5>

                    <div class="device-category">
                        Rumah Tangga
                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Daya
                        </span>

                        <span class="detail-value">
                            350 Watt
                        </span>

                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Pemakaian
                        </span>

                        <span class="detail-value">
                            1 jam/hari
                        </span>

                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Estimasi
                        </span>

                        <span class="detail-value text-success">
                            10,5 kWh/bln
                        </span>

                    </div>

                    <div class="device-actions">

                        <a
                            href="edit_perangkat.php"
                            class="btn btn-outline-success btn-sm">

                            <i class="bi bi-pencil"></i>
                            Edit

                        </a>

                        <a
                            href="hapus_perangkat.php"
                            class="btn btn-outline-danger btn-sm">

                            <i class="bi bi-trash"></i>
                            Hapus

                        </a>

                    </div>

                </div>

            </div>


            <!-- MESIN CUCI -->

            <div class="col-xl-3 col-lg-4 col-md-6">

                <div class="device-card">

                    <div class="device-top">

                        <div class="device-icon">
                            <i class="bi bi-water"></i>
                        </div>

                        <span class="status-active">
                            Aktif
                        </span>

                    </div>

                    <h5>
                        Mesin Cuci
                    </h5>

                    <div class="device-category">
                        Rumah Tangga
                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Daya
                        </span>

                        <span class="detail-value">
                            400 Watt
                        </span>

                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Pemakaian
                        </span>

                        <span class="detail-value">
                            2 jam/hari
                        </span>

                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Estimasi
                        </span>

                        <span class="detail-value text-success">
                            24 kWh/bln
                        </span>

                    </div>

                    <div class="device-actions">

                        <a
                            href="edit_perangkat.php"
                            class="btn btn-outline-success btn-sm">

                            <i class="bi bi-pencil"></i>
                            Edit

                        </a>

                        <a
                            href="hapus_perangkat.php"
                            class="btn btn-outline-danger btn-sm">

                            <i class="bi bi-trash"></i>
                            Hapus

                        </a>

                    </div>

                </div>

            </div>


            <!-- LAMPU -->

            <div class="col-xl-3 col-lg-4 col-md-6">

                <div class="device-card">

                    <div class="device-top">

                        <div class="device-icon">
                            <i class="bi bi-lightbulb"></i>
                        </div>

                        <span class="status-active">
                            Aktif
                        </span>

                    </div>

                    <h5>
                        Lampu Ruang Tamu
                    </h5>

                    <div class="device-category">
                        Penerangan
                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Daya
                        </span>

                        <span class="detail-value">
                            20 Watt
                        </span>

                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Pemakaian
                        </span>

                        <span class="detail-value">
                            8 jam/hari
                        </span>

                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Estimasi
                        </span>

                        <span class="detail-value text-success">
                            4,8 kWh/bln
                        </span>

                    </div>

                    <div class="device-actions">

                        <a
                            href="edit_perangkat.php"
                            class="btn btn-outline-success btn-sm">

                            <i class="bi bi-pencil"></i>
                            Edit

                        </a>

                        <a
                            href="hapus_perangkat.php"
                            class="btn btn-outline-danger btn-sm">

                            <i class="bi bi-trash"></i>
                            Hapus

                        </a>

                    </div>

                </div>

            </div>


            <!-- LAPTOP -->

            <div class="col-xl-3 col-lg-4 col-md-6">

                <div class="device-card">

                    <div class="device-top">

                        <div class="device-icon">
                            <i class="bi bi-laptop"></i>
                        </div>

                        <span class="status-inactive">
                            Nonaktif
                        </span>

                    </div>

                    <h5>
                        Laptop
                    </h5>

                    <div class="device-category">
                        Elektronik
                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Daya
                        </span>

                        <span class="detail-value">
                            65 Watt
                        </span>

                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Pemakaian
                        </span>

                        <span class="detail-value">
                            6 jam/hari
                        </span>

                    </div>

                    <div class="device-detail">

                        <span class="detail-label">
                            Estimasi
                        </span>

                        <span class="detail-value text-success">
                            11,7 kWh/bln
                        </span>

                    </div>

                    <div class="device-actions">

                        <a
                            href="edit_perangkat.php"
                            class="btn btn-outline-success btn-sm">

                            <i class="bi bi-pencil"></i>
                            Edit

                        </a>

                        <a
                            href="hapus_perangkat.php"
                            class="btn btn-outline-danger btn-sm">

                            <i class="bi bi-trash"></i>
                            Hapus

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</main>

</body>
</html>