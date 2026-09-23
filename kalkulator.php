<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Listrik - Voltify</title>

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

        /* CALCULATOR */
        .calculator-card {
            background: white;
            border: none;
            border-radius: 16px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            padding: 25px;
        }

        .section-title {
            font-weight: 700;
            margin-bottom: 5px;
        }

        .section-subtitle {
            color: var(--muted);
            font-size: 14px;
            margin-bottom: 25px;
        }

        .form-label {
            font-weight: 600;
            font-size: 14px;
        }

        .form-control,
        .form-select {
            padding: 12px 14px;
            border-radius: 10px;
            border: 1px solid #d1d5db;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--green);
            box-shadow: 0 0 0 3px rgba(22,163,74,0.1);
        }

        .input-group-text {
            background: #f9fafb;
            border-radius: 0 10px 10px 0;
        }

        .btn-calculate {
            width: 100%;
            padding: 13px;
            background: var(--green);
            border: none;
            color: white;
            border-radius: 10px;
            font-weight: 600;
            margin-top: 10px;
        }

        .btn-calculate:hover {
            background: var(--dark-green);
            color: white;
        }

        /* RESULT */
        .result-card {
            background: linear-gradient(135deg, #f0fdf4, #dcfce7);
            border: 1px solid #bbf7d0;
            border-radius: 16px;
            padding: 25px;
            height: 100%;
        }

        .result-title {
            font-weight: 700;
            color: #166534;
        }

        .result-main {
            background: white;
            border-radius: 14px;
            padding: 20px;
            text-align: center;
            margin: 20px 0;
        }

        .result-main small {
            color: var(--muted);
        }

        .result-main h2 {
            color: var(--green);
            font-weight: 800;
            margin: 5px 0;
        }

        .result-item {
            background: white;
            border-radius: 10px;
            padding: 14px;
            margin-bottom: 10px;
        }

        .result-item span {
            color: var(--muted);
            font-size: 13px;
        }

        .result-item strong {
            display: block;
            margin-top: 3px;
        }

        /* INFO */
        .info-card {
            background: white;
            border-radius: 16px;
            padding: 20px;
            margin-top: 25px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }

        .info-item {
            display: flex;
            gap: 12px;
            margin-bottom: 15px;
        }

        .info-icon {
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

        .info-item strong {
            font-size: 14px;
        }

        .info-item p {
            color: var(--muted);
            font-size: 13px;
            margin: 3px 0 0;
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

        <div class="menu-title">
            Menu Utama
        </div>

        <a href="dashboard.php">
            <i class="bi bi-grid-1x2-fill"></i>
            <span>Dashboard</span>
        </a>

        <a href="perangkat.php">
            <i class="bi bi-plug-fill"></i>
            <span>Perangkat</span>
        </a>

        <a href="jadwal.php">
            <i class="bi bi-calendar3"></i>
            <span>Jadwal</span>
        </a>

        <a href="kalkulator.php" class="active">
            <i class="bi bi-calculator-fill"></i>
            <span>Kalkulator</span>
        </a>

        <a href="riwayat.php">
            <i class="bi bi-clock-history"></i>
            <span>Riwayat</span>
        </a>


        <div class="menu-divider"></div>


        <div class="menu-title">
            Lainnya
        </div>

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

        <h5>Kalkulator Listrik</h5>

        <small>
            Hitung estimasi konsumsi dan biaya listrik
        </small>

    </div>


    <div class="user-profile">

        <div class="user-info text-end">

            <strong>Lita Ayu</strong>

            <small>
                Pengguna Voltify
            </small>

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

        <h3>
            <i class="bi bi-calculator me-2"></i>
            Kalkulator Konsumsi Listrik
        </h3>

        <p>
            Hitung perkiraan penggunaan energi dan biaya listrik
            berdasarkan perangkat yang digunakan.
        </p>

    </div>


    <!-- CALCULATOR -->
    <div class="row g-4">

        <!-- FORM -->
        <div class="col-lg-7">

            <div class="calculator-card">

                <h5 class="section-title">
                    Data Penggunaan
                </h5>

                <p class="section-subtitle">
                    Masukkan informasi perangkat yang ingin dihitung.
                </p>


                <!-- DEVICE -->
                <div class="mb-3">

                    <label class="form-label">
                        Nama Perangkat
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        id="namaPerangkat"
                        placeholder="Contoh: AC Kamar"
                    >

                </div>


                <!-- WATT -->
                <div class="mb-3">

                    <label class="form-label">
                        Daya Perangkat
                    </label>

                    <div class="input-group">

                        <input
                            type="number"
                            class="form-control"
                            id="daya"
                            placeholder="Contoh: 500"
                            min="1"
                        >

                        <span class="input-group-text">
                            Watt
                        </span>

                    </div>

                </div>


                <div class="row">

                    <!-- JAM -->
                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Lama Pemakaian
                        </label>

                        <div class="input-group">

                            <input
                                type="number"
                                class="form-control"
                                id="jam"
                                placeholder="Contoh: 8"
                                min="0.1"
                                step="0.1"
                            >

                            <span class="input-group-text">
                                Jam/Hari
                            </span>

                        </div>

                    </div>


                    <!-- HARI -->
                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Jumlah Hari
                        </label>

                        <div class="input-group">

                            <input
                                type="number"
                                class="form-control"
                                id="hari"
                                value="30"
                                min="1"
                                max="31"
                            >

                            <span class="input-group-text">
                                Hari
                            </span>

                        </div>

                    </div>

                </div>


                <!-- TARIF -->
                <div class="mb-3">

                    <label class="form-label">
                        Tarif Listrik
                    </label>

                    <select class="form-select" id="tarif">

                        <option value="1444.70">
                            Rp1.444,70 / kWh
                        </option>

                        <option value="1699.53">
                            Rp1.699,53 / kWh
                        </option>

                        <option value="custom">
                            Masukkan tarif sendiri
                        </option>

                    </select>

                </div>


                <!-- CUSTOM TARIF -->
                <div class="mb-3 d-none" id="customTarifBox">

                    <label class="form-label">
                        Tarif Sendiri
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            Rp
                        </span>

                        <input
                            type="number"
                            class="form-control"
                            id="customTarif"
                            placeholder="Contoh: 1500"
                            min="1"
                        >

                        <span class="input-group-text">
                            / kWh
                        </span>

                    </div>

                </div>


                <button
                    type="button"
                    class="btn-calculate"
                    onclick="hitungListrik()"
                >

                    <i class="bi bi-calculator me-2"></i>

                    Hitung Konsumsi Listrik

                </button>

            </div>

        </div>


        <!-- RESULT -->
        <div class="col-lg-5">

            <div class="result-card">

                <h5 class="result-title">

                    <i class="bi bi-lightning-charge-fill me-2"></i>

                    Hasil Perhitungan

                </h5>


                <div class="result-main">

                    <small>
                        Estimasi Biaya
                    </small>

                    <h2 id="hasilBiaya">
                        Rp0
                    </h2>

                    <small>
                        untuk periode yang dipilih
                    </small>

                </div>


                <div class="result-item">

                    <span>
                        Perangkat
                    </span>

                    <strong id="hasilPerangkat">
                        -
                    </strong>

                </div>


                <div class="result-item">

                    <span>
                        Konsumsi Energi
                    </span>

                    <strong id="hasilKwh">
                        0 kWh
                    </strong>

                </div>


                <div class="result-item">

                    <span>
                        Konsumsi Per Hari
                    </span>

                    <strong id="hasilHarian">
                        0 kWh/hari
                    </strong>

                </div>


                <div class="result-item mb-0">

                    <span>
                        Estimasi Biaya per Hari
                    </span>

                    <strong id="hasilBiayaHarian">
                        Rp0
                    </strong>

                </div>

            </div>

        </div>

    </div>


    <!-- INFORMASI -->
    <div class="info-card">

        <h5 class="fw-bold mb-4">
            <i class="bi bi-info-circle-fill text-success me-2"></i>
            Cara Perhitungan
        </h5>


        <div class="row">

            <div class="col-md-4">

                <div class="info-item">

                    <div class="info-icon">
                        <i class="bi bi-lightning"></i>
                    </div>

                    <div>

                        <strong>
                            1. Hitung kWh per Hari
                        </strong>

                        <p>
                            Daya Watt × jam penggunaan ÷ 1.000.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div class="info-item">

                    <div class="info-icon">
                        <i class="bi bi-calendar3"></i>
                    </div>

                    <div>

                        <strong>
                            2. Hitung Total kWh
                        </strong>

                        <p>
                            Konsumsi per hari × jumlah hari.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div class="info-item">

                    <div class="info-icon">
                        <i class="bi bi-cash-stack"></i>
                    </div>

                    <div>

                        <strong>
                            3. Hitung Biaya
                        </strong>

                        <p>
                            Total kWh × tarif listrik per kWh.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>


</div>


<script>

    // CUSTOM TARIF
    document.getElementById("tarif").addEventListener("change", function() {

        const customBox = document.getElementById("customTarifBox");

        if (this.value === "custom") {

            customBox.classList.remove("d-none");

        } else {

            customBox.classList.add("d-none");

        }

    });


    // FORMAT RUPIAH
    function formatRupiah(angka) {

        return new Intl.NumberFormat("id-ID", {
            style: "currency",
            currency: "IDR",
            minimumFractionDigits: 0
        }).format(angka);

    }


    // HITUNG
    function hitungListrik() {

        const nama =
            document.getElementById("namaPerangkat").value.trim();

        const daya =
            parseFloat(document.getElementById("daya").value);

        const jam =
            parseFloat(document.getElementById("jam").value);

        const hari =
            parseInt(document.getElementById("hari").value);

        const tarifSelect =
            document.getElementById("tarif").value;


        // VALIDASI
        if (!nama) {

            alert("Masukkan nama perangkat.");

            return;

        }


        if (!daya || daya <= 0) {

            alert("Masukkan daya perangkat yang valid.");

            return;

        }


        if (!jam || jam <= 0) {

            alert("Masukkan lama pemakaian yang valid.");

            return;

        }


        if (!hari || hari <= 0) {

            alert("Masukkan jumlah hari yang valid.");

            return;

        }


        // TARIF
        let tarif;

        if (tarifSelect === "custom") {

            tarif =
                parseFloat(
                    document.getElementById("customTarif").value
                );

            if (!tarif || tarif <= 0) {

                alert("Masukkan tarif listrik yang valid.");

                return;

            }

        } else {

            tarif = parseFloat(tarifSelect);

        }


        // RUMUS
        const kwhHarian =
            (daya * jam) / 1000;

        const totalKwh =
            kwhHarian * hari;

        const biayaHarian =
            kwhHarian * tarif;

        const totalBiaya =
            totalKwh * tarif;


        // TAMPILKAN HASIL
        document.getElementById("hasilPerangkat").innerText =
            nama;

        document.getElementById("hasilKwh").innerText =
            totalKwh.toFixed(2) + " kWh";

        document.getElementById("hasilHarian").innerText =
            kwhHarian.toFixed(2) + " kWh/hari";

        document.getElementById("hasilBiayaHarian").innerText =
            formatRupiah(biayaHarian);

        document.getElementById("hasilBiaya").innerText =
            formatRupiah(totalBiaya);

    }

</script>

</body>
</html>