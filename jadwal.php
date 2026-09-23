<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Perangkat - Voltify</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

        /* SIDEBAR */
        .sidebar {
            width: 250px;
            height: 100vh;
            background: white;
            position: fixed;
            left: 0;
            top: 0;
            border-right: 1px solid #e5e7eb;
            z-index: 1000;
            transition: 0.3s;
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

        /* TOPBAR */
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

        /* CONTENT */
        .main-content {
            margin-left: 250px;
            padding: 105px 30px 30px;
            transition: 0.3s;
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

        .btn-add {
            background: white;
            color: var(--green);
            border: none;
            padding: 11px 18px;
            border-radius: 10px;
            font-weight: 600;
        }

        .btn-add:hover {
            background: #f0fdf4;
            color: var(--dark-green);
        }

        /* STAT CARD */
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

        /* SCHEDULE */
        .schedule-card {
            background: white;
            border-radius: 15px;
            border: none;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }

        .schedule-card .card-header {
            background: white;
            border-bottom: 1px solid #eeeeee;
            padding: 20px;
            border-radius: 15px 15px 0 0;
        }

        .schedule-card .card-header h5 {
            margin: 0;
            font-weight: 700;
        }

        .table {
            margin-bottom: 0;
        }

        .table th {
            font-size: 13px;
            color: #6b7280;
            font-weight: 600;
            padding: 15px 20px;
            background: #fafafa;
            border-bottom: 1px solid #eeeeee;
        }

        .table td {
            padding: 16px 20px;
            vertical-align: middle;
            font-size: 14px;
        }

        .device-name {
            font-weight: 600;
        }

        .device-category {
            font-size: 12px;
            color: #9ca3af;
        }

        .time-box {
            background: #f0fdf4;
            color: var(--dark-green);
            padding: 7px 11px;
            border-radius: 8px;
            font-weight: 600;
            display: inline-block;
        }

        .badge-active {
            background: #dcfce7;
            color: #15803d;
            padding: 7px 12px;
            border-radius: 20px;
            font-size: 12px;
        }

        .badge-inactive {
            background: #f3f4f6;
            color: #6b7280;
            padding: 7px 12px;
            border-radius: 20px;
            font-size: 12px;
        }

        .action-btn {
            width: 34px;
            height: 34px;
            border: none;
            border-radius: 8px;
            margin-left: 4px;
            background: #f3f4f6;
            color: #6b7280;
        }

        .action-btn:hover {
            background: var(--light-green);
            color: var(--green);
        }

        /* MODAL */
        .modal-content {
            border: none;
            border-radius: 16px;
        }

        .modal-header {
            border-bottom: 1px solid #eeeeee;
        }

        .form-label {
            font-weight: 600;
            font-size: 14px;
        }

        .form-control,
        .form-select {
            padding: 11px 13px;
            border-radius: 9px;
        }

        .btn-save {
            background: var(--green);
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 9px;
            font-weight: 600;
        }

        .btn-save:hover {
            background: var(--dark-green);
            color: white;
        }

        /* RESPONSIVE */
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

            .header-card .btn-add {
                margin-top: 15px;
            }

            .table-responsive {
                overflow-x: auto;
            }
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">

    <div class="brand">
        <div class="brand-icon">
            <i class="bi bi-lightning-charge-fill"></i>
        </div>

        <div>
            <h4>Voltify</h4>
            <small>Smart Energy Habit</small>
        </div>
    </div>

    <div class="menu">

        <div class="menu-title">Menu Utama</div>

        <a href="dashboard.php">
            <i class="bi bi-grid-1x2-fill"></i>
            <span>Dashboard</span>
        </a>

        <a href="perangkat.php">
            <i class="bi bi-plug-fill"></i>
            <span>Perangkat</span>
        </a>

        <a href="jadwal.php" class="active">
            <i class="bi bi-calendar3"></i>
            <span>Jadwal</span>
        </a>

        <a href="kalkulator.php">
            <i class="bi bi-calculator-fill"></i>
            <span>Kalkulator</span>
        </a>

        <a href="riwayat.php">
            <i class="bi bi-clock-history"></i>
            <span>Riwayat</span>
        </a>

        <div class="menu-divider"></div>

        <div class="menu-title">Lainnya</div>

        <a href="notifikasi.php">
            <i class="bi bi-bell-fill"></i>
            <span>Notifikasi</span>
        </a>

        <a href="profil.php">
            <i class="bi bi-person-fill"></i>
            <span>Profil</span>
        </a>

        <a href="logout.php">
            <i class="bi bi-box-arrow-right"></i>
            <span>Keluar</span>
        </a>

    </div>
</div>


<!-- TOPBAR -->
<div class="topbar">

    <div class="page-title">
        <h5>Jadwal Perangkat</h5>
        <small>Kelola waktu penggunaan perangkat listrik</small>
    </div>

    <div class="user-profile">

        <div class="user-info text-end">
            <strong>Lita Ayu</strong>
            <small>Pengguna Voltify</small>
        </div>

        <div class="avatar">
            L
        </div>

    </div>

</div>


<!-- MAIN CONTENT -->
<div class="main-content">

    <!-- HEADER -->
    <div class="header-card">

        <div class="row align-items-center">

            <div class="col-lg-8">

                <h3>
                    <i class="bi bi-calendar-check me-2"></i>
                    Atur Jadwal Penggunaan
                </h3>

                <p>
                    Atur waktu penggunaan perangkat agar lebih hemat energi
                    dan mencegah perangkat menyala terlalu lama.
                </p>

            </div>

            <div class="col-lg-4 text-lg-end">

                <button class="btn-add"
                        data-bs-toggle="modal"
                        data-bs-target="#modalTambah">

                    <i class="bi bi-plus-lg me-1"></i>
                    Tambah Jadwal

                </button>

            </div>

        </div>

    </div>


    <!-- STATISTIK -->
    <div class="row g-4 mb-4">

        <div class="col-lg-3 col-md-6">

            <div class="stat-card">

                <div class="stat-icon">
                    <i class="bi bi-calendar-event"></i>
                </div>

                <h4>8</h4>

                <small>Total Jadwal</small>

            </div>

        </div>


        <div class="col-lg-3 col-md-6">

            <div class="stat-card">

                <div class="stat-icon">
                    <i class="bi bi-check-circle-fill"></i>
                </div>

                <h4>6</h4>

                <small>Jadwal Aktif</small>

            </div>

        </div>


        <div class="col-lg-3 col-md-6">

            <div class="stat-card">

                <div class="stat-icon">
                    <i class="bi bi-calendar-day"></i>
                </div>

                <h4>4</h4>

                <small>Jadwal Hari Ini</small>

            </div>

        </div>


        <div class="col-lg-3 col-md-6">

            <div class="stat-card">

                <div class="stat-icon">
                    <i class="bi bi-clock-fill"></i>
                </div>

                <h4>13,5 Jam</h4>

                <small>Total penggunaan terjadwal</small>

            </div>

        </div>

    </div>


    <!-- INFO -->
    <div class="alert alert-success border-0 shadow-sm mb-4">

        <i class="bi bi-lightbulb-fill me-2"></i>

        <strong>Tips Hemat Energi:</strong>

        Hindari penggunaan perangkat berdaya tinggi terlalu lama.
        Gunakan jadwal untuk membatasi waktu penggunaan perangkat.

    </div>


    <!-- TABLE -->
    <div class="schedule-card card">

        <div class="card-header">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h5>
                        <i class="bi bi-calendar-week me-2 text-success"></i>
                        Daftar Jadwal
                    </h5>

                    <small class="text-muted">
                        Jadwal penggunaan perangkat Anda
                    </small>

                </div>

                <div>

                    <select class="form-select form-select-sm"
                            id="filterStatus"
                            style="width:150px;">

                        <option value="semua">Semua Status</option>
                        <option value="aktif">Aktif</option>
                        <option value="nonaktif">Nonaktif</option>

                    </select>

                </div>

            </div>

        </div>


        <div class="table-responsive">

            <table class="table" id="scheduleTable">

                <thead>

                    <tr>
                        <th>Perangkat</th>
                        <th>Hari</th>
                        <th>Waktu</th>
                        <th>Durasi</th>
                        <th>Status</th>
                        <th class="text-end">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    <!-- JADWAL 1 -->
                    <tr data-status="aktif">

                        <td>
                            <div class="device-name">
                                <i class="bi bi-snow2 text-primary me-2"></i>
                                AC Kamar
                            </div>

                            <div class="device-category">
                                Pendingin • 500 Watt
                            </div>
                        </td>

                        <td>
                            Senin - Jumat
                        </td>

                        <td>
                            <span class="time-box">
                                19:00 - 23:00
                            </span>
                        </td>

                        <td>
                            4 jam
                        </td>

                        <td>
                            <span class="badge-active">
                                <i class="bi bi-check-circle me-1"></i>
                                Aktif
                            </span>
                        </td>

                        <td class="text-end">

                            <button class="action-btn"
                                    onclick="editSchedule('AC Kamar')"
                                    title="Edit">

                                <i class="bi bi-pencil"></i>

                            </button>

                            <button class="action-btn"
                                    onclick="toggleSchedule(this)"
                                    title="Nonaktifkan">

                                <i class="bi bi-power"></i>

                            </button>

                            <button class="action-btn"
                                    onclick="deleteSchedule(this)"
                                    title="Hapus">

                                <i class="bi bi-trash"></i>

                            </button>

                        </td>

                    </tr>


                    <!-- JADWAL 2 -->
                    <tr data-status="aktif">

                        <td>

                            <div class="device-name">
                                <i class="bi bi-box-seam text-warning me-2"></i>
                                Kulkas
                            </div>

                            <div class="device-category">
                                Pendingin • 150 Watt
                            </div>

                        </td>

                        <td>
                            Setiap Hari
                        </td>

                        <td>

                            <span class="time-box">
                                00:00 - 23:59
                            </span>

                        </td>

                        <td>
                            24 jam
                        </td>

                        <td>

                            <span class="badge-active">
                                <i class="bi bi-check-circle me-1"></i>
                                Aktif
                            </span>

                        </td>

                        <td class="text-end">

                            <button class="action-btn"
                                    onclick="editSchedule('Kulkas')">

                                <i class="bi bi-pencil"></i>

                            </button>

                            <button class="action-btn"
                                    onclick="toggleSchedule(this)">

                                <i class="bi bi-power"></i>

                            </button>

                            <button class="action-btn"
                                    onclick="deleteSchedule(this)">

                                <i class="bi bi-trash"></i>

                            </button>

                        </td>

                    </tr>


                    <!-- JADWAL 3 -->
                    <tr data-status="aktif">

                        <td>

                            <div class="device-name">
                                <i class="bi bi-tv text-danger me-2"></i>
                                TV Ruang Tamu
                            </div>

                            <div class="device-category">
                                Elektronik • 100 Watt
                            </div>

                        </td>

                        <td>
                            Senin - Minggu
                        </td>

                        <td>

                            <span class="time-box">
                                18:00 - 22:00
                            </span>

                        </td>

                        <td>
                            4 jam
                        </td>

                        <td>

                            <span class="badge-active">
                                <i class="bi bi-check-circle me-1"></i>
                                Aktif
                            </span>

                        </td>

                        <td class="text-end">

                            <button class="action-btn"
                                    onclick="editSchedule('TV Ruang Tamu')">

                                <i class="bi bi-pencil"></i>

                            </button>

                            <button class="action-btn"
                                    onclick="toggleSchedule(this)">

                                <i class="bi bi-power"></i>

                            </button>

                            <button class="action-btn"
                                    onclick="deleteSchedule(this)">

                                <i class="bi bi-trash"></i>

                            </button>

                        </td>

                    </tr>


                    <!-- JADWAL 4 -->
                    <tr data-status="aktif">

                        <td>

                            <div class="device-name">
                                <i class="bi bi-cup-hot text-info me-2"></i>
                                Dispenser
                            </div>

                            <div class="device-category">
                                Peralatan • 350 Watt
                            </div>

                        </td>

                        <td>
                            Setiap Hari
                        </td>

                        <td>

                            <span class="time-box">
                                06:00 - 10:00
                            </span>

                        </td>

                        <td>
                            4 jam
                        </td>

                        <td>

                            <span class="badge-active">
                                <i class="bi bi-check-circle me-1"></i>
                                Aktif
                            </span>

                        </td>

                        <td class="text-end">

                            <button class="action-btn"
                                    onclick="editSchedule('Dispenser')">

                                <i class="bi bi-pencil"></i>

                            </button>

                            <button class="action-btn"
                                    onclick="toggleSchedule(this)">

                                <i class="bi bi-power"></i>

                            </button>

                            <button class="action-btn"
                                    onclick="deleteSchedule(this)">

                                <i class="bi bi-trash"></i>

                            </button>

                        </td>

                    </tr>


                    <!-- JADWAL 5 -->
                    <tr data-status="nonaktif">

                        <td>

                            <div class="device-name">
                                <i class="bi bi-water text-primary me-2"></i>
                                Mesin Cuci
                            </div>

                            <div class="device-category">
                                Peralatan • 400 Watt
                            </div>

                        </td>

                        <td>
                            Sabtu
                        </td>

                        <td>

                            <span class="time-box">
                                09:00 - 11:00
                            </span>

                        </td>

                        <td>
                            2 jam
                        </td>

                        <td>

                            <span class="badge-inactive">
                                <i class="bi bi-dash-circle me-1"></i>
                                Nonaktif
                            </span>

                        </td>

                        <td class="text-end">

                            <button class="action-btn"
                                    onclick="editSchedule('Mesin Cuci')">

                                <i class="bi bi-pencil"></i>

                            </button>

                            <button class="action-btn"
                                    onclick="toggleSchedule(this)">

                                <i class="bi bi-power"></i>

                            </button>

                            <button class="action-btn"
                                    onclick="deleteSchedule(this)">

                                <i class="bi bi-trash"></i>

                            </button>

                        </td>

                    </tr>


                </tbody>

            </table>

        </div>

    </div>

</div>


<!-- MODAL TAMBAH JADWAL -->
<div class="modal fade" id="modalTambah" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <div>

                    <h5 class="modal-title fw-bold">
                        <i class="bi bi-calendar-plus text-success me-2"></i>
                        Tambah Jadwal
                    </h5>

                    <small class="text-muted">
                        Buat jadwal penggunaan perangkat
                    </small>

                </div>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"></button>

            </div>


            <form id="formJadwal">

                <div class="modal-body">

                    <div class="mb-3">

                        <label class="form-label">
                            Perangkat
                        </label>

                        <select class="form-select" id="device">

                            <option value="">
                                Pilih perangkat
                            </option>

                            <option>AC Kamar</option>
                            <option>Kulkas</option>
                            <option>TV Ruang Tamu</option>
                            <option>Dispenser</option>
                            <option>Mesin Cuci</option>

                        </select>

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Hari
                        </label>

                        <select class="form-select" id="day">

                            <option value="">
                                Pilih hari
                            </option>

                            <option>Setiap Hari</option>
                            <option>Senin</option>
                            <option>Selasa</option>
                            <option>Rabu</option>
                            <option>Kamis</option>
                            <option>Jumat</option>
                            <option>Sabtu</option>
                            <option>Minggu</option>
                            <option>Senin - Jumat</option>
                            <option>Senin - Minggu</option>

                        </select>

                    </div>


                    <div class="row">

                        <div class="col-6 mb-3">

                            <label class="form-label">
                                Jam Mulai
                            </label>

                            <input type="time"
                                   class="form-control"
                                   id="startTime">

                        </div>


                        <div class="col-6 mb-3">

                            <label class="form-label">
                                Jam Selesai
                            </label>

                            <input type="time"
                                   class="form-control"
                                   id="endTime">

                        </div>

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Status
                        </label>

                        <select class="form-select" id="status">

                            <option value="aktif">
                                Aktif
                            </option>

                            <option value="nonaktif">
                                Nonaktif
                            </option>

                        </select>

                    </div>

                </div>


                <div class="modal-footer">

                    <button type="button"
                            class="btn btn-light"
                            data-bs-dismiss="modal">

                        Batal

                    </button>

                    <button type="submit"
                            class="btn-save">

                        <i class="bi bi-check-lg me-1"></i>
                        Simpan Jadwal

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>


<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<script>

    // FILTER STATUS
    document.getElementById("filterStatus").addEventListener("change", function() {

        const filter = this.value;
        const rows = document.querySelectorAll("#scheduleTable tbody tr");

        rows.forEach(row => {

            const status = row.getAttribute("data-status");

            if (filter === "semua" || filter === status) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }

        });

    });


    // TAMBAH JADWAL
    document.getElementById("formJadwal").addEventListener("submit", function(e) {

        e.preventDefault();

        const device = document.getElementById("device").value;
        const day = document.getElementById("day").value;
        const start = document.getElementById("startTime").value;
        const end = document.getElementById("endTime").value;
        const status = document.getElementById("status").value;

        if (!device || !day || !start || !end) {

            alert("Silakan lengkapi semua data jadwal.");

            return;

        }

        if (start >= end) {

            alert("Jam selesai harus lebih besar dari jam mulai.");

            return;

        }

        alert(
            "Jadwal berhasil dibuat!\n\n" +
            "Perangkat: " + device +
            "\nHari: " + day +
            "\nWaktu: " + start + " - " + end
        );

        document.getElementById("formJadwal").reset();

        const modal = bootstrap.Modal.getInstance(
            document.getElementById("modalTambah")
        );

        modal.hide();

    });


    // EDIT
    function editSchedule(device) {

        alert(
            "Fitur edit jadwal untuk perangkat " +
            device +
            " akan terhubung ke database pada tahap berikutnya."
        );

    }


    // TOGGLE STATUS
    function toggleSchedule(button) {

        const row = button.closest("tr");
        const badge = row.querySelector("td:nth-child(5)");

        if (row.dataset.status === "aktif") {

            row.dataset.status = "nonaktif";

            badge.innerHTML =
                '<span class="badge-inactive">' +
                '<i class="bi bi-dash-circle me-1"></i>' +
                'Nonaktif' +
                '</span>';

        } else {

            row.dataset.status = "aktif";

            badge.innerHTML =
                '<span class="badge-active">' +
                '<i class="bi bi-check-circle me-1"></i>' +
                'Aktif' +
                '</span>';

        }

    }


    // HAPUS
    function deleteSchedule(button) {

        const row = button.closest("tr");

        const device = row.querySelector(".device-name").innerText.trim();

        const confirmDelete = confirm(
            "Apakah Anda yakin ingin menghapus jadwal " +
            device +
            "?"
        );

        if (confirmDelete) {

            row.remove();

            alert("Jadwal berhasil dihapus.");

        }

    }

</script>

</body>
</html>