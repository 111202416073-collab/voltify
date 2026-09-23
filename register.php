<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Akun - Voltify</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #ecfdf5, #f8fafc);
        }

        .register-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        .register-card {
            width: 100%;
            max-width: 1000px;
            background: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.10);
        }

        .register-left {
            background: linear-gradient(145deg, #16a34a, #15803d);
            color: white;
            padding: 50px 45px;
            min-height: 650px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .brand {
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .brand i {
            margin-right: 8px;
        }

        .register-left h1 {
            font-size: 38px;
            font-weight: 700;
            line-height: 1.2;
        }

        .register-left p {
            color: rgba(255,255,255,0.85);
            line-height: 1.7;
            margin-top: 20px;
        }

        .feature {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .feature-icon {
            width: 42px;
            height: 42px;
            background: rgba(255,255,255,0.15);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
        }

        .register-right {
            padding: 50px 45px;
        }

        .register-right h2 {
            font-weight: 700;
            color: #1f2937;
        }

        .subtitle {
            color: #64748b;
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: 600;
            color: #374151;
        }

        .input-group-text {
            background: white;
            border-right: none;
            color: #16a34a;
        }

        .form-control {
            border-left: none;
            padding: 12px;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #16a34a;
        }

        .input-group:focus-within .input-group-text {
            border-color: #16a34a;
        }

        .btn-register {
            width: 100%;
            background: #16a34a;
            border: none;
            color: white;
            padding: 13px;
            border-radius: 10px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-register:hover {
            background: #15803d;
        }

        .login-link {
            color: #16a34a;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link:hover {
            text-decoration: underline;
        }

        .back-home {
            color: #64748b;
            text-decoration: none;
            font-size: 14px;
        }

        .back-home:hover {
            color: #16a34a;
        }

        .password-info {
            font-size: 13px;
            color: #64748b;
            margin-top: 6px;
        }

        @media (max-width: 768px) {

            .register-left {
                min-height: auto;
                padding: 40px 30px;
            }

            .register-right {
                padding: 40px 30px;
            }

            .register-left h1 {
                font-size: 32px;
            }
        }
    </style>
</head>

<body>

<div class="register-wrapper">

    <div class="register-card">

        <div class="row g-0">

            <!-- BAGIAN KIRI -->
            <div class="col-lg-6">

                <div class="register-left">

                    <div class="brand">
                        <i class="bi bi-lightning-charge-fill"></i>
                        Voltify
                    </div>

                    <h1>
                        Mulai kebiasaan
                        hemat energi.
                    </h1>

                    <p>
                        Buat akun Voltify dan mulai mencatat perangkat
                        listrik, mengatur jadwal penggunaan, serta
                        memantau estimasi konsumsi energi.
                    </p>

                    <div class="feature">

                        <div class="feature-icon">
                            <i class="bi bi-plug"></i>
                        </div>

                        <span>
                            Kelola perangkat listrik
                        </span>

                    </div>

                    <div class="feature">

                        <div class="feature-icon">
                            <i class="bi bi-calculator"></i>
                        </div>

                        <span>
                            Hitung estimasi biaya
                        </span>

                    </div>

                    <div class="feature">

                        <div class="feature-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>

                        <span>
                            Pantau perkembangan penggunaan
                        </span>

                    </div>

                </div>

            </div>


            <!-- BAGIAN KANAN -->
            <div class="col-lg-6">

                <div class="register-right">

                    <a href="index.php" class="back-home">
                        <i class="bi bi-arrow-left"></i>
                        Kembali ke Beranda
                    </a>

                    <div class="mt-4">

                        <h2>
                            Buat Akun
                        </h2>

                        <p class="subtitle">
                            Daftar untuk mulai menggunakan Voltify.
                        </p>

                    </div>


                    <!-- FORM REGISTER -->
                    <form action="#" method="POST">

                        <!-- NAMA -->
                        <div class="mb-3">

                            <label class="form-label">
                                Nama Lengkap
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="bi bi-person"></i>
                                </span>

                                <input
                                    type="text"
                                    name="nama"
                                    class="form-control"
                                    placeholder="Masukkan nama lengkap"
                                    required
                                >

                            </div>

                        </div>


                        <!-- EMAIL -->
                        <div class="mb-3">

                            <label class="form-label">
                                Email
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="bi bi-envelope"></i>
                                </span>

                                <input
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    placeholder="Masukkan email"
                                    required
                                >

                            </div>

                        </div>


                        <!-- PASSWORD -->
                        <div class="mb-3">

                            <label class="form-label">
                                Password
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="bi bi-lock"></i>
                                </span>

                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    class="form-control"
                                    placeholder="Buat password"
                                    minlength="6"
                                    required
                                >

                                <button
                                    type="button"
                                    class="btn btn-outline-secondary"
                                    onclick="togglePassword('password', 'eye1')">

                                    <i class="bi bi-eye" id="eye1"></i>

                                </button>

                            </div>

                            <div class="password-info">
                                Password minimal 6 karakter.
                            </div>

                        </div>


                        <!-- KONFIRMASI PASSWORD -->
                        <div class="mb-4">

                            <label class="form-label">
                                Konfirmasi Password
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="bi bi-shield-lock"></i>
                                </span>

                                <input
                                    type="password"
                                    name="password_confirm"
                                    id="password_confirm"
                                    class="form-control"
                                    placeholder="Ulangi password"
                                    minlength="6"
                                    required
                                >

                                <button
                                    type="button"
                                    class="btn btn-outline-secondary"
                                    onclick="togglePassword('password_confirm', 'eye2')">

                                    <i class="bi bi-eye" id="eye2"></i>

                                </button>

                            </div>

                        </div>


                        <!-- PERSETUJUAN -->
                        <div class="form-check mb-4">

                            <input
                                class="form-check-input"
                                type="checkbox"
                                id="terms"
                                required
                            >

                            <label
                                class="form-check-label small"
                                for="terms">

                                Saya menyetujui penggunaan aplikasi
                                Voltify untuk mengelola data penggunaan
                                listrik saya.

                            </label>

                        </div>


                        <!-- BUTTON -->
                        <button
                            type="submit"
                            class="btn-register">

                            <i class="bi bi-person-plus"></i>
                            Buat Akun

                        </button>

                    </form>


                    <!-- LOGIN -->
                    <div class="text-center mt-4">

                        <span class="text-muted">
                            Sudah punya akun?
                        </span>

                        <a
                            href="login.php"
                            class="login-link">

                            Login sekarang

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<script>

function togglePassword(inputId, iconId) {

    const password = document.getElementById(inputId);
    const icon = document.getElementById(iconId);

    if (password.type === "password") {

        password.type = "text";

        icon.classList.remove("bi-eye");
        icon.classList.add("bi-eye-slash");

    } else {

        password.type = "password";

        icon.classList.remove("bi-eye-slash");
        icon.classList.add("bi-eye");

    }

}

</script>

</body>
</html>