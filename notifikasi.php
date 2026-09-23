<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Notifikasi - Voltify</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>

        :root {
            --green: #16a34a;
            --dark-green: #15803d;
            --light-green: #dcfce7;
            --bg: #f5f7fa;
            --text: #1f2937;
            --muted: #6b7280;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--text);
            font-family: Arial, sans-serif;
        }

        /* ================= SIDEBAR ================= */

        .sidebar {
            width: 250px;
            height: 100vh;
            background: white;
            position: fixed;
            left: 0;
            top: 0;
            border-right: 1px solid #e5e7eb;
            z-index: 1000;
        }

        .brand {
            height: 75px;
            display: flex;
            align-items: center;
            padding: 0 25px;
            border-bottom: 1px solid #f0f0f0;
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            background: var(--light-green);
            color: var(--green);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
            margin-right: 10px;
        }

        .brand h4 {
            margin: 0;
            font-weight: 700;
            color: var(--green);
        }

        .brand small {
            color: var(--muted);
            font-size: 10px;
        }

        .menu {
            padding: 20px 15px;
        }

        .menu-title {
            font-size: 11px;
            color: #9ca3af;
            text-transform: uppercase;
            font-weight: 600;
            padding: 0 12px;
            margin: 10px 0;
        }

        .menu a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #6b7280;
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 5px;
            transition: 0.2s;
        }

        .menu a i {
            font-size: 18px;
            width: 28px;
        }

        .menu a:hover {
            background: #f0fdf4;
            color: var(--green);
        }

        .menu a.active {
            background: var(--light-green);
            color: var(--dark-green);
            font-weight: 600;
        }

        .menu-divider {
            border-top: 1px solid #eeeeee;
            margin: 18px 0;
        }

        /* ================= TOPBAR ================= */

        .topbar {
            height: 75px;
            background: white;
            position: fixed;
            top: 0;
            left: 250px;
            right: 0;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
            z-index: 900;
        }

        .page-title h5 {
            margin: 0;
            font-weight: 700;
        }

        .page-title small {
            color: var(--muted);
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .avatar {
            width: 42px;
            height: 42px;
            background: var(--green);
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
        }

        .user-info strong {
            display: block;
            font-size: 14px;
        }

        .user-info small {
            color: var(--muted);
        }

        /* ================= CONTENT ================= */

        .main-content {
            margin-left: 250px;
            padding: 105px 30px 30px;
        }

        .header-card {
            background: linear-gradient(135deg, #16a34a, #15803d);
            color: white;
            border-radius: 18px;
            padding: 25px 30px;
            margin-bottom: 25px;
        }

        .header-card h3 {
            font-weight: 700;
            margin-bottom: 5px;
        }

        .header-card p {
            margin: 0;
            opacity: 0.9;
        }

        /* ================= STAT ================= */

        .stat-card {
            background: white;
            border: none;
            border-radius: 15px;
            padding: 20px;
            height: 100%;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }

        .stat-icon {
            width: 45px;
            height: 45px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--light-green);
            color: var(--green);
            font-size: 20px;
        }

        .stat-card h4 {
            font-weight: 700;
            margin: 12px 0 3px;
        }

        .stat-card small {
            color: var(--muted);
        }

        /* ================= NOTIFICATION ================= */

        .notification-card {
            background: white;
            border: none;
            border-radius: 15px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            overflow: hidden;
        }

        .notification-header {
            padding: 20px;
            border-bottom: 1px solid #eeeeee;
        }

        .notification-header h5 {
            margin: 0;
            font-weight: 700;
        }

        .notification-item {
            display: flex;
            gap: 15px;
            padding: 20px;
            border-bottom: 1px solid #f0f0f0;
            transition: 0.2s;
        }

        .notification-item:last-child {
            border-bottom: none;
        }

        .notification-item:hover {
            background: #fafafa;
        }

        .notification-item.unread {
            background: #f0fdf4;
        }

        .notification-icon {
            width: 45px;
            height: 45px;
            min-width: 45px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .icon-warning {
            background: #fef3c7;
            color: #d97706;
        }

        .icon-danger {
            background: #fee2e2;
            color: #dc2626;
        }

        .icon-success {
            background: #dcfce7;
            color: #16a34a;
        }

        .icon-info {
            background: #dbeafe;
            color: #2563eb;
        }

        .notification-content {
            flex: 1;
        }

        .notification-content h6 {
            font-weight: 700;
            margin: 0 0 5px;
        }

        .notification-content p {
            color: var(--muted);
            font-size: 14px;
            margin: 0 0 7px;
            line-height: 1.5;
        }

        .notification-time {
            color: #9ca3af;
            font-size: 12px;
        }

        .unread-dot {
            width: 9px;
            height: 9px;
            background: var(--green);
            border-radius: 50%;
            margin-top: 7px;
        }

        .notification-actions {
            display: flex;
            gap: 5px;
            align-items: flex-start;
        }

        .action-btn {
            width: 34px;
            height: 34px;
            border: none;
            border-radius: 8px;
            background: #f3f4f6;
            color: #6b7280;
        }

        .action-btn:hover {
            background: var(--light-green);
            color: var(--green);
        }

        /* ================= EMPTY ================= */

        .empty-state {
            display: none;
            text-align: center;
            padding: 60px 20px;
        }

        .empty-state i {
            font-size: 50px;
            color: #d1d5db;
        }

        .empty-state h5 {
            margin-top: 15px;
        }

        .empty-state p {
            color: var(--muted);
        }

        /* ================= TIPS ================= */

        .tips-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }

        .tip-item {
            display: flex;
            gap: 12px;
            margin-bottom: 15px;
        }

        .tip-item:last-child {
            margin-bottom: 0;
        }

        .tip-icon {
            width: 38px;
            height: 38px;
            min-width: 38px;
            background: var(--light-green);
            color: var(--green);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .tip-item strong {
            font-size: 14px;
        }

        .tip-item p {
            color: var(--muted);
            font-size: 13px;
            margin: 3px 0 0;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 991px) {

            .sidebar {
                width: 75px;
            }

            .brand {
                padding: 0;
                justify-content: center;
            }

            .brand h4,
            .brand small,
            .menu-title,
            .menu a span {
                display: none;
            }

            .brand-icon {
                margin: 0;
            }

            .menu a {
                justify-content: center;
            }

            .menu a i {
                width: auto;
            }

            .topbar {
                left: 75px;
            }

            .main-content {
                margin-left: 75px;
            }

            .user-info {
                display: none;
            }

        }

        @media (max-width: 768px) {

            .main-content {
                padding: 95px 15px 20px;
            }

            .topbar {
                padding: 0 15px;
            }

            .header-card {
                padding: 20px;
            }

            .notification-item {
                padding: 15px;
            }

        }

    </style>

</head>

<body>


<!-- ================= SIDEBAR ================= -->

<div class="sidebar">

    <div class="brand">

        <div class="brand-icon">
            <i class="bi bi-lightning-charge-fill"></i>
        </div>

        <div>

            <h4>Voltify</h4>

            <small>
                Smart Energy Habit
            </small>

        </div>

    </div>


    <div class="menu">

        <div class="menu-title">
            Menu Utama
        </div>


        <a href="dashboard.php">

            <i class="bi bi-grid-1x2-fill"></i>

            <span>
                Dashboard
            </span>

        </a>


        <a href="perangkat.php">

            <i class="bi bi-plug-fill"></i>

            <span>
                Perangkat
            </span>

        </a>


        <a href="jadwal.php">

            <i class="bi bi-calendar3"></i>

            <span>
                Jadwal
            </span>

        </a>


        <a href="kalkulator.php">

            <i class="bi bi-calculator-fill"></i>

            <span>
                Kalkulator
            </span>

        </a>


        <a href="riwayat.php">

            <i class="bi bi-clock-history"></i>

            <span>
                Riwayat
            </span>

        </a>


        <div class="menu-divider"></div>


        <div class="menu-title">
            Lainnya
        </div>


        <a href="notifikasi.php" class="active">

            <i class="bi bi-bell-fill"></i>

            <span>
                Notifikasi
            </span>

        </a>


        <a href="profil.php">

            <i class="bi bi-person-fill"></i>

            <span>
                Profil
            </span>

        </a>


        <a href="logout.php">

            <i class="bi bi-box-arrow-right"></i>

            <span>
                Keluar
            </span>

        </a>

    </div>

</div>


<!-- ================= TOPBAR ================= -->

<div class="topbar">

    <div class="page-title">

        <h5>
            Notifikasi
        </h5>

        <small>
            Peringatan dan informasi penggunaan listrik
        </small>

    </div>


    <div class="user-profile">

        <div class="user-info text-end">

            <strong>
                Lita Ayu
            </strong>

            <small>
                Pengguna Voltify
            </small>

        </div>


        <div class="avatar">
            L
        </div>

    </div>

</div>


<!-- ================= MAIN CONTENT ================= -->

<div class="main-content">


    <!-- HEADER -->

    <div class="header-card">

        <h3>

            <i class="bi bi-bell-fill me-2"></i>

            Pusat Notifikasi

        </h3>

        <p>

            Dapatkan peringatan untuk membantu mengurangi
            pemborosan energi di rumah.

        </p>

    </div>


    <!-- ================= STATISTIK ================= -->

    <div class="row g-4 mb-4">


        <div class="col-lg-3 col-md-6">

            <div class="stat-card">

                <div class="stat-icon">

                    <i class="bi bi-bell-fill"></i>

                </div>

                <h4 id="totalNotification">
                    6
                </h4>

                <small>
                    Total notifikasi
                </small>

            </div>

        </div>


        <div class="col-lg-3 col-md-6">

            <div class="stat-card">

                <div class="stat-icon">

                    <i class="bi bi-envelope-fill"></i>

                </div>

                <h4 id="unreadNotification">
                    3
                </h4>

                <small>
                    Belum dibaca
                </small>

            </div>

        </div>


        <div class="col-lg-3 col-md-6">

            <div class="stat-card">

                <div class="stat-icon">

                    <i class="bi bi-exclamation-triangle-fill"></i>

                </div>

                <h4>
                    2
                </h4>

                <small>
                    Peringatan energi
                </small>

            </div>

        </div>


        <div class="col-lg-3 col-md-6">

            <div class="stat-card">

                <div class="stat-icon">

                    <i class="bi bi-check-circle-fill"></i>

                </div>

                <h4>
                    1
                </h4>

                <small>
                    Penghematan tercapai
                </small>

            </div>

        </div>

    </div>


    <div class="row g-4">


        <!-- ================= NOTIFICATIONS ================= -->

        <div class="col-lg-8">

            <div class="notification-card">

                <div class="notification-header">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <h5>
                                <i class="bi bi-inbox-fill text-success me-2"></i>
                                Notifikasi Terbaru
                            </h5>

                            <small class="text-muted">
                                Informasi terbaru dari Voltify
                            </small>

                        </div>


                        <button
                            class="btn btn-sm btn-outline-success"
                            onclick="markAllRead()"
                        >

                            <i class="bi bi-check2-all me-1"></i>

                            Tandai semua dibaca

                        </button>

                    </div>

                </div>


                <!-- NOTIFICATION 1 -->

                <div class="notification-item unread">

                    <div class="notification-icon icon-danger">

                        <i class="bi bi-exclamation-triangle-fill"></i>

                    </div>


                    <div class="notification-content">

                        <h6>
                            Penggunaan AC cukup tinggi
                        </h6>

                        <p>
                            AC Kamar digunakan selama 8 jam hari ini.
                            Penggunaan ini lebih tinggi dari rata-rata
                            penggunaan Anda.
                        </p>

                        <span class="notification-time">
                            <i class="bi bi-clock me-1"></i>
                            15 menit yang lalu
                        </span>

                    </div>


                    <div class="notification-actions">

                        <div class="unread-dot"></div>

                        <button
                            class="action-btn"
                            onclick="markRead(this)"
                            title="Tandai sudah dibaca"
                        >

                            <i class="bi bi-check"></i>

                        </button>

                    </div>

                </div>


                <!-- NOTIFICATION 2 -->

                <div class="notification-item unread">

                    <div class="notification-icon icon-warning">

                        <i class="bi bi-graph-up-arrow"></i>

                    </div>


                    <div class="notification-content">

                        <h6>
                            Estimasi tagihan meningkat
                        </h6>

                        <p>
                            Estimasi tagihan listrik bulan ini mencapai
                            Rp269.086. Nilai ini meningkat dibandingkan
                            periode sebelumnya.
                        </p>

                        <span class="notification-time">
                            <i class="bi bi-clock me-1"></i>
                            1 jam yang lalu
                        </span>

                    </div>


                    <div class="notification-actions">

                        <div class="unread-dot"></div>

                        <button
                            class="action-btn"
                            onclick="markRead(this)"
                            title="Tandai sudah dibaca"
                        >

                            <i class="bi bi-check"></i>

                        </button>

                    </div>

                </div>


                <!-- NOTIFICATION 3 -->

                <div class="notification-item unread">

                    <div class="notification-icon icon-info">

                        <i class="bi bi-calendar-check-fill"></i>

                    </div>


                    <div class="notification-content">

                        <h6>
                            Jadwal perangkat akan dimulai
                        </h6>

                        <p>
                            Jadwal AC Kamar akan dimulai pukul
                            19:00. Pastikan perangkat siap digunakan
                            sesuai jadwal.
                        </p>

                        <span class="notification-time">
                            <i class="bi bi-clock me-1"></i>
                            2 jam yang lalu
                        </span>

                    </div>


                    <div class="notification-actions">

                        <div class="unread-dot"></div>

                        <button
                            class="action-btn"
                            onclick="markRead(this)"
                            title="Tandai sudah dibaca"
                        >

                            <i class="bi bi-check"></i>

                        </button>

                    </div>

                </div>


                <!-- NOTIFICATION 4 -->

                <div class="notification-item">

                    <div class="notification-icon icon-success">

                        <i class="bi bi-piggy-bank-fill"></i>

                    </div>


                    <div class="notification-content">

                        <h6>
                            Penghematan berhasil!
                        </h6>

                        <p>
                            Penggunaan listrik Anda turun sekitar
                            8,5% dibandingkan periode sebelumnya.
                            Pertahankan kebiasaan hemat energi.
                        </p>

                        <span class="notification-time">
                            <i class="bi bi-clock me-1"></i>
                            Kemarin
                        </span>

                    </div>


                    <div class="notification-actions">

                        <button
                            class="action-btn"
                            onclick="deleteNotification(this)"
                            title="Hapus"
                        >

                            <i class="bi bi-trash"></i>

                        </button>

                    </div>

                </div>


                <!-- NOTIFICATION 5 -->

                <div class="notification-item">

                    <div class="notification-icon icon-warning">

                        <i class="bi bi-lightbulb-fill"></i>

                    </div>


                    <div class="notification-content">

                        <h6>
                            Tips hemat energi
                        </h6>

                        <p>
                            Matikan perangkat yang tidak digunakan
                            untuk mengurangi konsumsi listrik standby.
                        </p>

                        <span class="notification-time">
                            <i class="bi bi-clock me-1"></i>
                            Kemarin
                        </span>

                    </div>


                    <div class="notification-actions">

                        <button
                            class="action-btn"
                            onclick="deleteNotification(this)"
                            title="Hapus"
                        >

                            <i class="bi bi-trash"></i>

                        </button>

                    </div>

                </div>


                <!-- NOTIFICATION 6 -->

                <div class="notification-item">

                    <div class="notification-icon icon-info">

                        <i class="bi bi-info-circle-fill"></i>

                    </div>


                    <div class="notification-content">

                        <h6>
                            Selamat datang di Voltify
                        </h6>

                        <p>
                            Mulai tambahkan perangkat rumah Anda
                            dan buat jadwal untuk memantau penggunaan
                            listrik dengan lebih teratur.
                        </p>

                        <span class="notification-time">
                            <i class="bi bi-clock me-1"></i>
                            2 hari yang lalu
                        </span>

                    </div>


                    <div class="notification-actions">

                        <button
                            class="action-btn"
                            onclick="deleteNotification(this)"
                            title="Hapus"
                        >

                            <i class="bi bi-trash"></i>

                        </button>

                    </div>

                </div>


                <!-- EMPTY -->

                <div class="empty-state" id="emptyState">

                    <i class="bi bi-bell-slash"></i>

                    <h5>
                        Tidak ada notifikasi
                    </h5>

                    <p>
                        Semua notifikasi telah dibersihkan.
                    </p>

                </div>

            </div>

        </div>


        <!-- ================= TIPS ================= -->

        <div class="col-lg-4">

            <div class="tips-card">

                <h5 class="fw-bold mb-4">

                    <i class="bi bi-lightbulb-fill text-success me-2"></i>

                    Tips Hemat Energi

                </h5>


                <div class="tip-item">

                    <div class="tip-icon">

                        <i class="bi bi-power"></i>

                    </div>

                    <div>

                        <strong>
                            Matikan perangkat
                        </strong>

                        <p>
                            Jangan biarkan perangkat menyala
                            ketika tidak sedang digunakan.
                        </p>

                    </div>

                </div>


                <div class="tip-item">

                    <div class="tip-icon">

                        <i class="bi bi-clock"></i>

                    </div>

                    <div>

                        <strong>
                            Gunakan jadwal
                        </strong>

                        <p>
                            Atur waktu penggunaan perangkat
                            agar lebih terkontrol.
                        </p>

                    </div>

                </div>


                <div class="tip-item">

                    <div class="tip-icon">

                        <i class="bi bi-graph-down"></i>

                    </div>

                    <div>

                        <strong>
                            Pantau konsumsi
                        </strong>

                        <p>
                            Periksa riwayat penggunaan secara
                            berkala untuk menemukan pemborosan.
                        </p>

                    </div>

                </div>


                <div class="tip-item">

                    <div class="tip-icon">

                        <i class="bi bi-calculator"></i>

                    </div>

                    <div>

                        <strong>
                            Hitung estimasi tagihan
                        </strong>

                        <p>
                            Gunakan kalkulator Voltify untuk
                            memperkirakan biaya listrik.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<script>

    /* ================= UPDATE JUMLAH UNREAD ================= */

    function updateUnread() {

        const unread =
            document.querySelectorAll(
                ".notification-item.unread"
            ).length;

        document.getElementById(
            "unreadNotification"
        ).innerText = unread;

    }


    /* ================= MARK READ ================= */

    function markRead(button) {

        const item =
            button.closest(".notification-item");

        item.classList.remove("unread");

        const dot =
            item.querySelector(".unread-dot");

        if (dot) {
            dot.remove();
        }

        updateUnread();

    }


    /* ================= MARK ALL READ ================= */

    function markAllRead() {

        const items =
            document.querySelectorAll(
                ".notification-item.unread"
            );

        items.forEach(item => {

            item.classList.remove("unread");

            const dot =
                item.querySelector(".unread-dot");

            if (dot) {
                dot.remove();
            }

        });

        updateUnread();

        alert(
            "Semua notifikasi telah ditandai sebagai sudah dibaca."
        );

    }


    /* ================= DELETE ================= */

    function deleteNotification(button) {

        const item =
            button.closest(".notification-item");

        item.remove();

        const total =
            document.querySelectorAll(
                ".notification-item"
            ).length;

        document.getElementById(
            "totalNotification"
        ).innerText = total;

        updateUnread();


        if (total === 0) {

            document.getElementById(
                "emptyState"
            ).style.display = "block";

        }

    }


    /* ================= INITIAL ================= */

    updateUnread();

</script>

</body>
</html>