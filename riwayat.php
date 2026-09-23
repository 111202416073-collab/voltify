<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Riwayat Penggunaan - Voltify</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

        /* ================= STAT CARD ================= */

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

        /* ================= CHART ================= */

        .chart-card {
            background: white;
            border: none;
            border-radius: 15px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            padding: 20px;
        }

        .chart-title {
            font-weight: 700;
            margin: 0;
        }

        .chart-subtitle {
            color: var(--muted);
            font-size: 13px;
        }

        .chart-container {
            height: 300px;
            position: relative;
            margin-top: 20px;
        }

        /* ================= TABLE ================= */

        .history-card {
            background: white;
            border: none;
            border-radius: 15px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            overflow: hidden;
        }

        .history-header {
            padding: 20px;
            border-bottom: 1px solid #eeeeee;
        }

        .history-header h5 {
            margin: 0;
            font-weight: 700;
        }

        .table {
            margin: 0;
        }

        .table th {
            background: #fafafa;
            color: #6b7280;
            font-size: 13px;
            padding: 15px 20px;
            white-space: nowrap;
        }

        .table td {
            padding: 16px 20px;
            vertical-align: middle;
            font-size: 14px;
        }

        .device-name {
            font-weight: 600;
        }

        .device-type {
            color: #9ca3af;
            font-size: 12px;
        }

        .kwh-badge {
            background: #f0fdf4;
            color: #15803d;
            padding: 7px 10px;
            border-radius: 8px;
            font-weight: 600;
        }

        .cost {
            font-weight: 600;
        }

        /* ================= FILTER ================= */

        .filter-box {
            background: #f9fafb;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .filter-box label {
            font-size: 12px;
            color: var(--muted);
            margin-bottom: 5px;
        }

        .form-control,
        .form-select {
            border-radius: 9px;
            padding: 9px 12px;
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


        <a href="riwayat.php" class="active">

            <i class="bi bi-clock-history"></i>

            <span>
                Riwayat
            </span>

        </a>


        <div class="menu-divider"></div>


        <div class="menu-title">
            Lainnya
        </div>


        <a href="notifikasi.php">

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
            Riwayat Penggunaan
        </h5>

        <small>
            Pantau histori konsumsi listrik
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

            <i class="bi bi-clock-history me-2"></i>

            Riwayat Konsumsi Energi

        </h3>

        <p>

            Lihat perkembangan penggunaan listrik
            dan biaya dari waktu ke waktu.

        </p>

    </div>


    <!-- ================= STATISTIK ================= -->

    <div class="row g-4 mb-4">


        <div class="col-lg-3 col-md-6">

            <div class="stat-card">

                <div class="stat-icon">

                    <i class="bi bi-lightning-charge-fill"></i>

                </div>

                <h4>
                    186,4 kWh
                </h4>

                <small>
                    Total konsumsi bulan ini
                </small>

            </div>

        </div>


        <div class="col-lg-3 col-md-6">

            <div class="stat-card">

                <div class="stat-icon">

                    <i class="bi bi-cash-stack"></i>

                </div>

                <h4>
                    Rp269.086
                </h4>

                <small>
                    Estimasi biaya bulan ini
                </small>

            </div>

        </div>


        <div class="col-lg-3 col-md-6">

            <div class="stat-card">

                <div class="stat-icon">

                    <i class="bi bi-graph-down-arrow"></i>

                </div>

                <h4>
                    -8,5%
                </h4>

                <small>
                    Dibanding bulan lalu
                </small>

            </div>

        </div>


        <div class="col-lg-3 col-md-6">

            <div class="stat-card">

                <div class="stat-icon">

                    <i class="bi bi-calendar-check"></i>

                </div>

                <h4>
                    30 Hari
                </h4>

                <small>
                    Periode pencatatan
                </small>

            </div>

        </div>

    </div>


    <!-- ================= CHART ================= -->

    <div class="chart-card mb-4">

        <div class="d-flex justify-content-between align-items-center">

            <div>

                <h5 class="chart-title">

                    Grafik Konsumsi Listrik

                </h5>

                <span class="chart-subtitle">

                    Perkembangan konsumsi energi selama 7 hari terakhir

                </span>

            </div>


            <select
                class="form-select form-select-sm"
                id="chartFilter"
                style="width: 150px;"
            >

                <option value="7">
                    7 Hari
                </option>

                <option value="14">
                    14 Hari
                </option>

                <option value="30">
                    30 Hari
                </option>

            </select>

        </div>


        <div class="chart-container">

            <canvas id="usageChart"></canvas>

        </div>

    </div>


    <!-- ================= HISTORY ================= -->

    <div class="history-card">

        <div class="history-header">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h5>

                        <i class="bi bi-list-ul text-success me-2"></i>

                        Detail Riwayat

                    </h5>

                    <small class="text-muted">

                        Catatan penggunaan perangkat

                    </small>

                </div>

            </div>

        </div>


        <!-- FILTER -->

        <div class="p-3">

            <div class="filter-box">

                <div class="row g-3">

                    <div class="col-md-4">

                        <label>
                            Cari perangkat
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            id="searchDevice"
                            placeholder="Contoh: AC"
                        >

                    </div>


                    <div class="col-md-3">

                        <label>
                            Bulan
                        </label>

                        <select
                            class="form-select"
                            id="monthFilter"
                        >

                            <option value="semua">
                                Semua Bulan
                            </option>

                            <option value="September">
                                September
                            </option>

                            <option value="Agustus">
                                Agustus
                            </option>

                            <option value="Juli">
                                Juli
                            </option>

                        </select>

                    </div>


                    <div class="col-md-3">

                        <label>
                            Tahun
                        </label>

                        <select
                            class="form-select"
                            id="yearFilter"
                        >

                            <option value="semua">
                                Semua Tahun
                            </option>

                            <option value="2026">
                                2026
                            </option>

                            <option value="2025">
                                2025
                            </option>

                        </select>

                    </div>


                    <div class="col-md-2 d-flex align-items-end">

                        <button
                            class="btn btn-success w-100"
                            onclick="resetFilter()"
                        >

                            <i class="bi bi-arrow-clockwise me-1"></i>

                            Reset

                        </button>

                    </div>

                </div>

            </div>


            <!-- TABLE -->

            <div class="table-responsive">

                <table class="table" id="historyTable">

                    <thead>

                        <tr>

                            <th>
                                Tanggal
                            </th>

                            <th>
                                Perangkat
                            </th>

                            <th>
                                Jam Pakai
                            </th>

                            <th>
                                Konsumsi
                            </th>

                            <th>
                                Biaya
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        <tr data-device="AC Kamar"
                            data-month="September"
                            data-year="2026">

                            <td>
                                23 Sep 2026
                            </td>

                            <td>

                                <div class="device-name">
                                    AC Kamar
                                </div>

                                <div class="device-type">
                                    Pendingin • 500 Watt
                                </div>

                            </td>

                            <td>
                                8 jam
                            </td>

                            <td>

                                <span class="kwh-badge">
                                    4,00 kWh
                                </span>

                            </td>

                            <td class="cost">
                                Rp5.779
                            </td>

                        </tr>


                        <tr data-device="TV Ruang Tamu"
                            data-month="September"
                            data-year="2026">

                            <td>
                                23 Sep 2026
                            </td>

                            <td>

                                <div class="device-name">
                                    TV Ruang Tamu
                                </div>

                                <div class="device-type">
                                    Elektronik • 100 Watt
                                </div>

                            </td>

                            <td>
                                4 jam
                            </td>

                            <td>

                                <span class="kwh-badge">
                                    0,40 kWh
                                </span>

                            </td>

                            <td class="cost">
                                Rp578
                            </td>

                        </tr>


                        <tr data-device="Dispenser"
                            data-month="September"
                            data-year="2026">

                            <td>
                                22 Sep 2026
                            </td>

                            <td>

                                <div class="device-name">
                                    Dispenser
                                </div>

                                <div class="device-type">
                                    Peralatan • 350 Watt
                                </div>

                            </td>

                            <td>
                                4 jam
                            </td>

                            <td>

                                <span class="kwh-badge">
                                    1,40 kWh
                                </span>

                            </td>

                            <td class="cost">
                                Rp2.023
                            </td>

                        </tr>


                        <tr data-device="Kulkas"
                            data-month="September"
                            data-year="2026">

                            <td>
                                22 Sep 2026
                            </td>

                            <td>

                                <div class="device-name">
                                    Kulkas
                                </div>

                                <div class="device-type">
                                    Pendingin • 150 Watt
                                </div>

                            </td>

                            <td>
                                24 jam
                            </td>

                            <td>

                                <span class="kwh-badge">
                                    3,60 kWh
                                </span>

                            </td>

                            <td class="cost">
                                Rp5.201
                            </td>

                        </tr>


                        <tr data-device="AC Kamar"
                            data-month="September"
                            data-year="2026">

                            <td>
                                21 Sep 2026
                            </td>

                            <td>

                                <div class="device-name">
                                    AC Kamar
                                </div>

                                <div class="device-type">
                                    Pendingin • 500 Watt
                                </div>

                            </td>

                            <td>
                                7 jam
                            </td>

                            <td>

                                <span class="kwh-badge">
                                    3,50 kWh
                                </span>

                            </td>

                            <td class="cost">
                                Rp5.056
                            </td>

                        </tr>


                        <tr data-device="Mesin Cuci"
                            data-month="September"
                            data-year="2026">

                            <td>
                                20 Sep 2026
                            </td>

                            <td>

                                <div class="device-name">
                                    Mesin Cuci
                                </div>

                                <div class="device-type">
                                    Peralatan • 400 Watt
                                </div>

                            </td>

                            <td>
                                2 jam
                            </td>

                            <td>

                                <span class="kwh-badge">
                                    0,80 kWh
                                </span>

                            </td>

                            <td class="cost">
                                Rp1.156
                            </td>

                        </tr>


                    </tbody>

                </table>

            </div>

        </div>

    </div>


</div>


<script>

    /* ================= CHART ================= */

    const ctx =
        document.getElementById("usageChart");


    const usageChart =
        new Chart(ctx, {

            type: "line",

            data: {

                labels: [
                    "17 Sep",
                    "18 Sep",
                    "19 Sep",
                    "20 Sep",
                    "21 Sep",
                    "22 Sep",
                    "23 Sep"
                ],

                datasets: [

                    {

                        label: "Konsumsi (kWh)",

                        data: [
                            7.2,
                            8.4,
                            6.8,
                            9.1,
                            7.5,
                            8.2,
                            9.4
                        ],

                        borderColor: "#16a34a",

                        backgroundColor:
                            "rgba(22, 163, 74, 0.10)",

                        borderWidth: 3,

                        tension: 0.4,

                        fill: true,

                        pointRadius: 4,

                        pointHoverRadius: 6

                    }

                ]

            },

            options: {

                responsive: true,

                maintainAspectRatio: false,

                plugins: {

                    legend: {
                        display: true
                    }

                },

                scales: {

                    y: {

                        beginAtZero: true,

                        title: {

                            display: true,

                            text: "kWh"

                        }

                    }

                }

            }

        });


    /* ================= SEARCH ================= */

    document
        .getElementById("searchDevice")
        .addEventListener("input", filterTable);


    document
        .getElementById("monthFilter")
        .addEventListener("change", filterTable);


    document
        .getElementById("yearFilter")
        .addEventListener("change", filterTable);


    function filterTable() {

        const search =
            document
                .getElementById("searchDevice")
                .value
                .toLowerCase();

        const month =
            document
                .getElementById("monthFilter")
                .value;

        const year =
            document
                .getElementById("yearFilter")
                .value;


        const rows =
            document.querySelectorAll(
                "#historyTable tbody tr"
            );


        rows.forEach(row => {

            const device =
                row.dataset.device.toLowerCase();

            const rowMonth =
                row.dataset.month;

            const rowYear =
                row.dataset.year;


            const matchDevice =
                device.includes(search);

            const matchMonth =
                month === "semua" ||
                rowMonth === month;

            const matchYear =
                year === "semua" ||
                rowYear === year;


            if (
                matchDevice &&
                matchMonth &&
                matchYear
            ) {

                row.style.display = "";

            } else {

                row.style.display = "none";

            }

        });

    }


    /* ================= RESET FILTER ================= */

    function resetFilter() {

        document.getElementById("searchDevice").value = "";

        document.getElementById("monthFilter").value = "semua";

        document.getElementById("yearFilter").value = "semua";

        filterTable();

    }


    /* ================= CHART FILTER ================= */

    document
        .getElementById("chartFilter")
        .addEventListener("change", function() {

            const days = this.value;


            if (days === "7") {

                usageChart.data.labels = [
                    "17 Sep",
                    "18 Sep",
                    "19 Sep",
                    "20 Sep",
                    "21 Sep",
                    "22 Sep",
                    "23 Sep"
                ];

                usageChart.data.datasets[0].data = [
                    7.2,
                    8.4,
                    6.8,
                    9.1,
                    7.5,
                    8.2,
                    9.4
                ];

            }


            if (days === "14") {

                usageChart.data.labels = [
                    "10 Sep",
                    "11 Sep",
                    "12 Sep",
                    "13 Sep",
                    "14 Sep",
                    "15 Sep",
                    "16 Sep",
                    "17 Sep",
                    "18 Sep",
                    "19 Sep",
                    "20 Sep",
                    "21 Sep",
                    "22 Sep",
                    "23 Sep"
                ];

                usageChart.data.datasets[0].data = [
                    8.1,
                    7.4,
                    9.2,
                    8.7,
                    7.9,
                    8.3,
                    7.1,
                    7.2,
                    8.4,
                    6.8,
                    9.1,
                    7.5,
                    8.2,
                    9.4
                ];

            }


            if (days === "30") {

                usageChart.data.labels = [
                    "1",
                    "5",
                    "10",
                    "15",
                    "20",
                    "23"
                ];

                usageChart.data.datasets[0].data = [
                    8.2,
                    7.8,
                    9.4,
                    8.7,
                    9.1,
                    9.4
                ];

            }


            usageChart.update();

        });

</script>


</body>
</html>