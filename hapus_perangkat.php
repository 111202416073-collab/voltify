<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hapus Perangkat - Voltify</title>

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

        .breadcrumb-area {
            margin-bottom: 20px;
        }

        .breadcrumb-area a {
            color: #16a34a;
            text-decoration: none;
        }

        /* DELETE CARD */
        .delete-wrapper {
            max-width: 600px;
            margin: 50px auto;
        }

        .delete-card {
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid #eef2f7;
            padding: 40px;
            text-align: center;
        }

        .delete-icon {
            width: 85px;
            height: 85px;
            margin: 0 auto 25px;
            border-radius: 50%;
            background: #fee2e2;
            color: #dc2626;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
        }

        .delete-card h3 {
            font-weight: 700;
            margin-bottom: 10px;
        }

        .delete-card .description {
            color: #64748b;
            font-size: 14px;
            line-height: 1.7;
        }

        /* DEVICE INFO */
        .device-info {
            background: #f8fafc;
            border-radius: 15px;
            padding: 20px;
            margin: 25px 0;
            text-align: left;
        }

        .device-info-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .device-icon {
            width: 50px;
            height: 50px;
            border-radius: 13px;
            background: #dcfce7;
            color: #16a34a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
        }

        .device-name {
            font-weight: 700;
            margin-bottom: 3px;
        }

        .device-category {
            color: #94a3b8;
            font-size: 12px;
        }

        .device-detail {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-top: 1px solid #e5e7eb;
            font-size: 13px;
        }

        .detail-label {
            color: #64748b;
        }

        .detail-value {
            font-weight: 600;
        }

        /* WARNING */
        .warning-box {
            background: #fff7ed;
            border: 1px solid #fed7aa;
            color: #9a3412;
            border-radius: 12px;
            padding: 14px;
            font-size: 13px;
            text-align: left;
            margin-bottom: 25px;
        }

        .warning-box i {
            margin-right: 7px;
        }

        /* BUTTON */
        .btn-danger {
            background: #dc2626;
            border-color: #dc2626;
        }

        .btn-danger:hover {
            background: #b91c1c;
            border-color: #b91c1c;
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

            .delete-card {
                padding: 25px 20px;
            }

            .delete-wrapper {
                margin: 20px auto;
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
                Hapus Perangkat
            </h4>

            <small>
                Konfirmasi penghapusan perangkat
            </small>

        </div>

        <div class="user-area">

            <a href="notifikasi.php">

                <button class="notification-btn">
                    <i class="bi bi-bell"></i>
                </button>

            </a>

            <div class="avatar">
                L
            </div>

        </div>

    </header>


    <!-- CONTENT -->

    <div class="content">

        <div class="breadcrumb-area">

            <a href="perangkat.php">
                <i class="bi bi-arrow-left"></i>
                Kembali ke Perangkat
            </a>

        </div>


        <div class="delete-wrapper">

            <div class="delete-card">

                <!-- ICON -->

                <div class="delete-icon">

                    <i class="bi bi-trash3-fill"></i>

                </div>


                <!-- TITLE -->

                <h3>
                    Hapus Perangkat?
                </h3>

                <p class="description">

                    Apakah kamu yakin ingin menghapus perangkat
                    berikut dari daftar Voltify?

                </p>


                <!-- DEVICE INFO -->

                <div class="device-info">

                    <div class="device-info-header">

                        <div class="device-icon">

                            <i class="bi bi-snow"></i>

                        </div>

                        <div>

                            <div class="device-name">
                                AC Kamar
                            </div>

                            <div class="device-category">
                                Pendingin
                            </div>

                        </div>

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
                            Konsumsi
                        </span>

                        <span class="detail-value">
                            120 kWh/bulan
                        </span>

                    </div>

                </div>


                <!-- WARNING -->

                <div class="warning-box">

                    <i class="bi bi-exclamation-triangle-fill"></i>

                    Data perangkat yang dihapus nantinya tidak akan
                    digunakan lagi dalam perhitungan konsumsi listrik
                    Voltify.

                </div>


                <!-- BUTTON -->

                <div class="d-flex justify-content-center gap-2">

                    <a
                        href="perangkat.php"
                        class="btn btn-light px-4"
                    >

                        <i class="bi bi-x-lg"></i>
                        Batal

                    </a>


                    <button
                        type="button"
                        class="btn btn-danger px-4"
                        onclick="konfirmasiHapus()"
                    >

                        <i class="bi bi-trash3"></i>
                        Ya, Hapus

                    </button>

                </div>

            </div>

        </div>

    </div>

</main>


<!-- ================= JAVASCRIPT ================= -->

<script>

    function konfirmasiHapus() {

        const yakin = confirm(
            "Apakah kamu yakin ingin menghapus perangkat AC Kamar?"
        );

        if (yakin) {

            alert(
                "Perangkat berhasil dihapus."
            );

            window.location.href = "perangkat.php";

        }

    }

</script>

</body>
</html>