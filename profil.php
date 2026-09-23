<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil - Voltify</title>

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

        /* CARD */

        .profile-card {
            background: white;
            border-radius: 15px;
            border: none;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            padding: 25px;
            margin-bottom: 25px;
        }

        .card-title {
            font-weight: 700;
            margin-bottom: 20px;
        }

        .profile-avatar {
            width: 90px;
            height: 90px;
            background: var(--green);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
            font-weight: bold;
            margin: auto;
        }

        .profile-name {
            font-size: 20px;
            font-weight: 700;
            margin-top: 15px;
        }

        .profile-email {
            color: var(--muted);
            font-size: 14px;
        }

        .form-label {
            font-weight: 600;
            font-size: 14px;
        }

        .form-control,
        .form-select {
            border-radius: 9px;
            padding: 10px 12px;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--green);
            box-shadow: 0 0 0 0.2rem rgba(22,163,74,0.12);
        }

        .input-group-text {
            background: #f9fafb;
        }

        .info-box {
            background: #f0fdf4;
            border: 1px solid #bbf7d0;
            border-radius: 12px;
            padding: 15px;
            color: #166534;
            font-size: 13px;
        }

        .danger-box {
            border: 1px solid #fecaca;
            background: #fef2f2;
            border-radius: 12px;
            padding: 18px;
        }

        .danger-box h6 {
            color: #b91c1c;
            font-weight: 700;
        }

        .danger-box p {
            color: #7f1d1d;
            font-size: 13px;
            margin-bottom: 12px;
        }

        .btn-success {
            background: var(--green);
            border-color: var(--green);
        }

        .btn-success:hover {
            background: var(--dark-green);
            border-color: var(--dark-green);
        }

        .target-card {
            background: #f9fafb;
            border-radius: 12px;
            padding: 18px;
            margin-top: 15px;
        }

        .target-icon {
            width: 42px;
            height: 42px;
            background: var(--light-green);
            color: var(--green);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .target-value {
            font-size: 20px;
            font-weight: 700;
            margin-top: 10px;
        }

        .target-label {
            font-size: 13px;
            color: var(--muted);
        }

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


        <a href="kalkulator.php">
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


        <a href="profil.php" class="active">
            <i class="bi bi-person-fill"></i>
            <span>Profil</span>
        </a>


        <a href="logout.php">
            <i class="bi bi-box-arrow-right"></i>
            <span>Keluar</span>
        </a>

    </div>

</div>


<!-- ================= TOPBAR ================= -->

<div class="topbar">

    <div class="page-title">

        <h5>
            Profil & Pengaturan
        </h5>

        <small>
            Kelola informasi dan preferensi Voltify
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


<!-- ================= MAIN ================= -->

<div class="main-content">


    <!-- HEADER -->

    <div class="header-card">

        <h3>
            <i class="bi bi-person-circle me-2"></i>
            Profil & Pengaturan
        </h3>

        <p>
            Atur informasi akun dan target penggunaan energi Anda.
        </p>

    </div>


    <div class="row g-4">


        <!-- ================= PROFIL ================= -->

        <div class="col-lg-4">

            <div class="profile-card text-center">

                <div class="profile-avatar">
                    L
                </div>

                <div class="profile-name">
                    Lita Ayu
                </div>

                <div class="profile-email">
                    lita@example.com
                </div>

                <hr>

                <div class="text-start">

                    <div class="d-flex justify-content-between mb-3">

                        <span class="text-muted">
                            Status akun
                        </span>

                        <span class="badge bg-success-subtle text-success">
                            Aktif
                        </span>

                    </div>


                    <div class="d-flex justify-content-between mb-3">

                        <span class="text-muted">
                            Bergabung
                        </span>

                        <strong>
                            September 2026
                        </strong>

                    </div>


                    <div class="d-flex justify-content-between">

                        <span class="text-muted">
                            Perangkat
                        </span>

                        <strong>
                            8 perangkat
                        </strong>

                    </div>

                </div>

            </div>


            <!-- TARGET -->

            <div class="profile-card">

                <h5 class="card-title">
                    <i class="bi bi-bullseye text-success me-2"></i>
                    Target Bulanan
                </h5>


                <div class="target-card">

                    <div class="target-icon">

                        <i class="bi bi-lightning-charge-fill"></i>

                    </div>

                    <div class="target-value">
                        200 kWh
                    </div>

                    <div class="target-label">
                        Target konsumsi listrik
                    </div>

                </div>


                <div class="target-card">

                    <div class="target-icon">

                        <i class="bi bi-cash-stack"></i>

                    </div>

                    <div class="target-value">
                        Rp300.000
                    </div>

                    <div class="target-label">
                        Target biaya listrik
                    </div>

                </div>

            </div>

        </div>


        <!-- ================= FORM ================= -->

        <div class="col-lg-8">


            <!-- INFORMASI AKUN -->

            <div class="profile-card">

                <h5 class="card-title">

                    <i class="bi bi-person-vcard text-success me-2"></i>

                    Informasi Akun

                </h5>


                <form id="profileForm">

                    <div class="row g-3">


                        <div class="col-md-6">

                            <label class="form-label">
                                Nama Lengkap
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="nama"
                                value="Lita Ayu"
                                required
                            >

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                Email
                            </label>

                            <input
                                type="email"
                                class="form-control"
                                id="email"
                                value="lita@example.com"
                                required
                            >

                        </div>


                        <div class="col-12">

                            <label class="form-label">
                                Nomor Telepon
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="telepon"
                                value="081234567890"
                            >

                        </div>


                    </div>


                    <div class="mt-4">

                        <button
                            type="submit"
                            class="btn btn-success"
                        >

                            <i class="bi bi-check-circle me-1"></i>

                            Simpan Perubahan

                        </button>

                    </div>

                </form>

            </div>


            <!-- PENGATURAN ENERGI -->

            <div class="profile-card">

                <h5 class="card-title">

                    <i class="bi bi-lightning-charge text-success me-2"></i>

                    Pengaturan Energi

                </h5>


                <div class="info-box mb-4">

                    <i class="bi bi-info-circle-fill me-1"></i>

                    Tarif listrik digunakan oleh Voltify untuk
                    menghitung estimasi biaya penggunaan perangkat.

                </div>


                <div class="row g-3">


                    <div class="col-md-6">

                        <label class="form-label">
                            Tarif Listrik
                        </label>

                        <div class="input-group">

                            <span class="input-group-text">
                                Rp
                            </span>

                            <input
                                type="number"
                                class="form-control"
                                id="tarif"
                                value="1444.70"
                                step="0.01"
                            >

                            <span class="input-group-text">
                                / kWh
                            </span>

                        </div>

                        <small class="text-muted">
                            Tarif digunakan untuk estimasi biaya.
                        </small>

                    </div>


                    <div class="col-md-6">

                        <label class="form-label">
                            Target Konsumsi
                        </label>

                        <div class="input-group">

                            <input
                                type="number"
                                class="form-control"
                                id="targetKwh"
                                value="200"
                                step="0.1"
                            >

                            <span class="input-group-text">
                                kWh / bulan
                            </span>

                        </div>

                    </div>


                    <div class="col-md-6">

                        <label class="form-label">
                            Target Biaya
                        </label>

                        <div class="input-group">

                            <span class="input-group-text">
                                Rp
                            </span>

                            <input
                                type="number"
                                class="form-control"
                                id="targetBiaya"
                                value="300000"
                            >

                            <span class="input-group-text">
                                / bulan
                            </span>

                        </div>

                    </div>


                    <div class="col-md-6">

                        <label class="form-label">
                            Batas Peringatan
                        </label>

                        <select
                            class="form-select"
                            id="peringatan"
                        >

                            <option value="80">
                                80% dari target
                            </option>

                            <option value="90" selected>
                                90% dari target
                            </option>

                            <option value="100">
                                100% dari target
                            </option>

                        </select>

                    </div>


                </div>


                <div class="mt-4">

                    <button
                        class="btn btn-success"
                        onclick="saveEnergySettings()"
                    >

                        <i class="bi bi-save me-1"></i>

                        Simpan Pengaturan

                    </button>

                </div>

            </div>


            <!-- PASSWORD -->

            <div class="profile-card">

                <h5 class="card-title">

                    <i class="bi bi-shield-lock text-success me-2"></i>

                    Keamanan Akun

                </h5>


                <div class="row g-3">


                    <div class="col-md-4">

                        <label class="form-label">
                            Password Lama
                        </label>

                        <input
                            type="password"
                            class="form-control"
                            id="passwordLama"
                            placeholder="Password lama"
                        >

                    </div>


                    <div class="col-md-4">

                        <label class="form-label">
                            Password Baru
                        </label>

                        <input
                            type="password"
                            class="form-control"
                            id="passwordBaru"
                            placeholder="Password baru"
                        >

                    </div>


                    <div class="col-md-4">

                        <label class="form-label">
                            Konfirmasi
                        </label>

                        <input
                            type="password"
                            class="form-control"
                            id="passwordKonfirmasi"
                            placeholder="Ulangi password"
                        >

                    </div>


                </div>


                <div class="mt-4">

                    <button
                        class="btn btn-outline-success"
                        onclick="changePassword()"
                    >

                        <i class="bi bi-key me-1"></i>

                        Ubah Password

                    </button>

                </div>

            </div>


            <!-- DANGER -->

            <div class="profile-card">

                <div class="danger-box">

                    <h6>

                        <i class="bi bi-exclamation-triangle-fill me-1"></i>

                        Zona Berbahaya

                    </h6>

                    <p>
                        Menghapus akun akan menghapus data profil,
                        perangkat, jadwal, riwayat, dan notifikasi.
                    </p>

                    <button
                        class="btn btn-outline-danger btn-sm"
                        onclick="deleteAccount()"
                    >

                        <i class="bi bi-trash me-1"></i>

                        Hapus Akun

                    </button>

                </div>

            </div>


        </div>

    </div>

</div>


<script>

    /* ================= PROFILE ================= */

    document
        .getElementById("profileForm")
        .addEventListener("submit", function(event) {

            event.preventDefault();

            const nama =
                document.getElementById("nama").value;

            alert(
                "Profil berhasil diperbarui untuk " + nama + "."
            );

        });


    /* ================= ENERGY SETTINGS ================= */

    function saveEnergySettings() {

        const tarif =
            document.getElementById("tarif").value;

        const targetKwh =
            document.getElementById("targetKwh").value;

        const targetBiaya =
            document.getElementById("targetBiaya").value;


        if (
            tarif === "" ||
            targetKwh === "" ||
            targetBiaya === ""
        ) {

            alert(
                "Mohon lengkapi semua pengaturan energi."
            );

            return;

        }


        alert(
            "Pengaturan energi berhasil disimpan."
        );

    }


    /* ================= PASSWORD ================= */

    function changePassword() {

        const lama =
            document.getElementById("passwordLama").value;

        const baru =
            document.getElementById("passwordBaru").value;

        const konfirmasi =
            document.getElementById("passwordKonfirmasi").value;


        if (
            lama === "" ||
            baru === "" ||
            konfirmasi === ""
        ) {

            alert(
                "Mohon lengkapi semua password."
            );

            return;

        }


        if (baru !== konfirmasi) {

            alert(
                "Konfirmasi password tidak sesuai."
            );

            return;

        }


        if (baru.length < 6) {

            alert(
                "Password baru minimal 6 karakter."
            );

            return;

        }


        alert(
            "Password berhasil diubah."
        );


        document.getElementById(
            "passwordLama"
        ).value = "";

        document.getElementById(
            "passwordBaru"
        ).value = "";

        document.getElementById(
            "passwordKonfirmasi"
        ).value = "";

    }


    /* ================= DELETE ACCOUNT ================= */

    function deleteAccount() {

        const confirmation =
            confirm(
                "Apakah Anda yakin ingin menghapus akun? Data akun akan ikut terhapus."
            );


        if (confirmation) {

            alert(
                "Fitur penghapusan akun akan terhubung ke database pada tahap berikutnya."
            );

        }

    }

</script>


</body>
</html>