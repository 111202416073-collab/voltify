<!DOCTYPE html>
<!-- tes edit git -->
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Perangkat - Voltify</title>

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

        /* FORM */
        .form-card {
            background: #ffffff;
            border-radius: 18px;
            border: 1px solid #eef2f7;
            padding: 30px;
        }

        .form-header {
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: 20px;
            margin-bottom: 25px;
        }

        .form-header h4 {
            font-weight: 700;
            margin-bottom: 5px;
        }

        .form-header p {
            color: #64748b;
            margin-bottom: 0;
            font-size: 14px;
        }

        .form-label {
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .form-control,
        .form-select {
            min-height: 46px;
            border-radius: 10px;
            border: 1px solid #dbe1e8;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #16a34a;
            box-shadow: 0 0 0 0.2rem rgba(22, 163, 74, 0.12);
        }

        .input-group-text {
            background: #f8fafc;
            border-color: #dbe1e8;
        }

        .help-text {
            color: #94a3b8;
            font-size: 12px;
            margin-top: 6px;
        }

        /* PREVIEW */
        .preview-card {
            background: #f8fafc;
            border-radius: 15px;
            padding: 25px;
            height: 100%;
        }

        .preview-title {
            font-weight: 700;
            margin-bottom: 20px;
        }

        .preview-device {
            background: white;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            border: 1px solid #eef2f7;
        }

        .preview-icon {
            width: 70px;
            height: 70px;
            margin: auto;
            border-radius: 18px;
            background: #dcfce7;
            color: #16a34a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            margin-bottom: 15px;
        }

        .preview-device h5 {
            font-weight: 700;
        }

        .preview-device p {
            color: #94a3b8;
            font-size: 13px;
            margin-bottom: 20px;
        }

        .estimate-box {
            background: #f0fdf4;
            border-radius: 12px;
            padding: 15px;
            text-align: left;
        }

        .estimate-label {
            color: #64748b;
            font-size: 12px;
        }

        .estimate-value {
            color: #15803d;
            font-weight: 700;
            font-size: 20px;
        }

        /* WARNING */
        .warning-box {
            background: #fff7ed;
            border: 1px solid #fed7aa;
            color: #9a3412;
            border-radius: 12px;
            padding: 15px;
            font-size: 13px;
        }

        .warning-box i {
            margin-right: 8px;
        }

        /* BUTTON */
        .btn-success {
            background: #16a34a;
            border-color: #16a34a;
        }

        .btn-success:hover {
            background: #15803d;
            border-color: #15803d;
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

            .form-card {
                padding: 20px;
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
                Edit Perangkat
            </h4>

            <small>
                Perbarui informasi perangkat listrik
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

        <!-- KEMBALI -->

        <div class="breadcrumb-area">

            <a href="perangkat.php">
                <i class="bi bi-arrow-left"></i>
                Kembali ke Perangkat
            </a>

        </div>


        <div class="row g-4">

            <!-- ================= FORM ================= -->

            <div class="col-lg-8">

                <div class="form-card">

                    <div class="form-header">

                        <h4>
                            Edit Informasi Perangkat
                        </h4>

                        <p>
                            Ubah informasi perangkat sesuai dengan
                            kondisi penggunaan saat ini.
                        </p>

                    </div>


                    <form action="#" method="POST">

                        <!-- NAMA -->

                        <div class="mb-4">

                            <label class="form-label">
                                Nama Perangkat
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                name="nama_device"
                                id="nama_device"
                                value="AC Kamar"
                                required
                            >

                            <div class="help-text">
                                Nama perangkat yang mudah dikenali.
                            </div>

                        </div>


                        <!-- KATEGORI -->

                        <div class="mb-4">

                            <label class="form-label">
                                Kategori
                            </label>

                            <select
                                class="form-select"
                                name="kategori"
                                id="kategori"
                                required
                            >

                                <option value="Pendingin" selected>
                                    Pendingin
                                </option>

                                <option value="Dapur">
                                    Dapur
                                </option>

                                <option value="Elektronik">
                                    Elektronik
                                </option>

                                <option value="Penerangan">
                                    Penerangan
                                </option>

                                <option value="Rumah Tangga">
                                    Rumah Tangga
                                </option>

                                <option value="Lainnya">
                                    Lainnya
                                </option>

                            </select>

                        </div>


                        <!-- DAYA -->

                        <div class="mb-4">

                            <label class="form-label">
                                Daya Perangkat
                            </label>

                            <div class="input-group">

                                <input
                                    type="number"
                                    class="form-control"
                                    name="daya_watt"
                                    id="daya_watt"
                                    value="500"
                                    min="1"
                                    required
                                >

                                <span class="input-group-text">
                                    Watt
                                </span>

                            </div>

                            <div class="help-text">
                                Daya listrik perangkat dalam satuan Watt.
                            </div>

                        </div>


                        <!-- JAM PAKAI -->

                        <div class="mb-4">

                            <label class="form-label">
                                Rata-rata Pemakaian
                            </label>

                            <div class="input-group">

                                <input
                                    type="number"
                                    class="form-control"
                                    name="jam_pakai"
                                    id="jam_pakai"
                                    value="8"
                                    min="0"
                                    max="24"
                                    step="0.5"
                                    required
                                >

                                <span class="input-group-text">
                                    Jam / Hari
                                </span>

                            </div>

                            <div class="help-text">
                                Rata-rata lama penggunaan perangkat
                                setiap hari.
                            </div>

                        </div>


                        <!-- STATUS -->

                        <div class="mb-4">

                            <label class="form-label">
                                Status Perangkat
                            </label>

                            <select
                                class="form-select"
                                name="status"
                                id="status"
                                required
                            >

                                <option value="aktif" selected>
                                    Aktif
                                </option>

                                <option value="nonaktif">
                                    Nonaktif
                                </option>

                            </select>

                        </div>


                        <!-- WARNING -->

                        <div class="warning-box mb-4">

                            <i class="bi bi-exclamation-triangle-fill"></i>

                            Perubahan data akan memengaruhi perhitungan
                            estimasi konsumsi listrik perangkat.

                        </div>


                        <!-- BUTTON -->

                        <div class="d-flex gap-2">

                            <a
                                href="perangkat.php"
                                class="btn btn-light px-4"
                            >
                                Batal
                            </a>

                            <button
                                type="submit"
                                class="btn btn-success px-4"
                            >

                                <i class="bi bi-check-lg"></i>
                                Simpan Perubahan

                            </button>

                        </div>

                    </form>

                </div>

            </div>


            <!-- ================= PREVIEW ================= -->

            <div class="col-lg-4">

                <div class="preview-card">

                    <div class="preview-title">
                        Preview Perubahan
                    </div>


                    <div class="preview-device">

                        <div class="preview-icon">

                            <i
                                class="bi bi-snow"
                                id="previewIcon"
                            ></i>

                        </div>

                        <h5 id="previewName">
                            AC Kamar
                        </h5>

                        <p id="previewCategory">
                            Pendingin
                        </p>


                        <div class="estimate-box">

                            <div class="estimate-label">
                                Estimasi konsumsi per bulan
                            </div>

                            <div class="estimate-value">

                                <span id="previewKwh">
                                    120.00
                                </span>

                                kWh

                            </div>

                        </div>

                    </div>


                    <div class="mt-4">

                        <small class="text-muted">

                            <i class="bi bi-lightbulb"></i>

                            Estimasi dihitung berdasarkan daya perangkat
                            dan rata-rata pemakaian per hari.

                        </small>

                    </div>

                </div>

            </div>

        </div>

    </div>

</main>


<!-- ================= JAVASCRIPT ================= -->

<script>

    const namaInput = document.getElementById('nama_device');
    const kategoriInput = document.getElementById('kategori');
    const dayaInput = document.getElementById('daya_watt');
    const jamInput = document.getElementById('jam_pakai');

    const previewName = document.getElementById('previewName');
    const previewCategory = document.getElementById('previewCategory');
    const previewKwh = document.getElementById('previewKwh');


    function updatePreview() {

        /* Nama */

        if (namaInput.value.trim() !== "") {

            previewName.textContent = namaInput.value;

        } else {

            previewName.textContent = "Nama Perangkat";

        }


        /* Kategori */

        if (kategoriInput.value !== "") {

            previewCategory.textContent = kategoriInput.value;

        } else {

            previewCategory.textContent = "Kategori perangkat";

        }


        /* Hitung konsumsi */

        const daya = parseFloat(dayaInput.value) || 0;
        const jam = parseFloat(jamInput.value) || 0;

        const kwh = (daya * jam * 30) / 1000;

        previewKwh.textContent = kwh.toFixed(2);

    }


    namaInput.addEventListener("input", updatePreview);

    kategoriInput.addEventListener("change", updatePreview);

    dayaInput.addEventListener("input", updatePreview);

    jamInput.addEventListener("input", updatePreview);


</script>

</body>
</html>