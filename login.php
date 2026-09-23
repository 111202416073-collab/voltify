<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Voltify</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #ecfdf5, #f8fafc);
        }

        .login-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        .login-card {
            width: 100%;
            max-width: 950px;
            background: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.10);
        }

        .login-left {
            background: linear-gradient(145deg, #16a34a, #15803d);
            color: white;
            padding: 55px 45px;
            min-height: 600px;
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

        .login-left h1 {
            font-size: 40px;
            font-weight: 700;
            line-height: 1.2;
        }

        .login-left p {
            color: rgba(255,255,255,0.85);
            line-height: 1.7;
            margin-top: 20px;
        }

        .benefit {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .benefit-icon {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.15);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
        }

        .login-right {
            padding: 55px 45px;
        }

        .login-right h2 {
            font-weight: 700;
            color: #1f2937;
        }

        .login-subtitle {
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

        .btn-login {
            width: 100%;
            background: #16a34a;
            border: none;
            color: white;
            padding: 13px;
            border-radius: 10px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-login:hover {
            background: #15803d;
        }

        .register-link {
            color: #16a34a;
            text-decoration: none;
            font-weight: 600;
        }

        .register-link:hover {
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

        @media (max-width: 768px) {
            .login-left {
                min-height: auto;
                padding: 40px 30px;
            }

            .login-right {
                padding: 40px 30px;
            }

            .login-left h1 {
                font-size: 32px;
            }
        }
    </style>
</head>

<body>

<div class="login-wrapper">

    <div class="login-card">

        <div class="row g-0">

            <!-- BAGIAN KIRI -->
            <div class="col-lg-6">

                <div class="login-left">

                    <div class="brand">
                        <i class="bi bi-lightning-charge-fill"></i>
                        Voltify
                    </div>

                    <h1>
                        Kelola energi,
                        kelola pengeluaran.
                    </h1>

                    <p>
                        Masuk ke Voltify untuk memantau penggunaan
                        listrik, menghitung estimasi tagihan, dan
                        membangun kebiasaan hemat energi.
                    </p>

                    <div class="benefit">

                        <div class="benefit-icon">
                            <i class="bi bi-bar-chart-line"></i>
                        </div>

                        <span>
                            Pantau penggunaan energi
                        </span>

                    </div>

                    <div class="benefit">

                        <div class="benefit-icon">
                            <i class="bi bi-calculator"></i>
                        </div>

                        <span>
                            Hitung estimasi tagihan
                        </span>

                    </div>

                    <div class="benefit">

                        <div class="benefit-icon">
                            <i class="bi bi-bell"></i>
                        </div>

                        <span>
                            Dapatkan pengingat penggunaan
                        </span>

                    </div>

                </div>

            </div>


            <!-- BAGIAN KANAN -->
            <div class="col-lg-6">

                <div class="login-right">

                    <a href="index.php" class="back-home">
                        <i class="bi bi-arrow-left"></i>
                        Kembali ke Beranda
                    </a>

                    <div class="mt-4">

                        <h2>
                            Selamat Datang!
                        </h2>

                        <p class="login-subtitle">
                            Silakan masuk ke akun Voltify kamu.
                        </p>

                    </div>


                    <!-- FORM LOGIN -->
                    <form action="#" method="POST">

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
                                    placeholder="Masukkan password"
                                    required
                                >

                                <button
                                    type="button"
                                    class="btn btn-outline-secondary"
                                    onclick="togglePassword()">
                                    <i class="bi bi-eye" id="eyeIcon"></i>
                                </button>

                            </div>

                        </div>


                        <!-- REMEMBER -->
                        <div class="d-flex justify-content-between align-items-center mb-4">

                            <div class="form-check">

                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="remember"
                                    name="remember">

                                <label
                                    class="form-check-label"
                                    for="remember">

                                    Ingat saya

                                </label>

                            </div>

                            <a href="#" class="text-success text-decoration-none small">
                                Lupa password?
                            </a>

                        </div>


                        <!-- BUTTON -->
                        <button
                            type="submit"
                            class="btn-login">

                            <i class="bi bi-box-arrow-in-right"></i>
                            Login

                        </button>

                    </form>


                    <!-- REGISTER -->
                    <div class="text-center mt-4">

                        <span class="text-muted">
                            Belum punya akun?
                        </span>

                        <a
                            href="register.php"
                            class="register-link">

                            Daftar sekarang

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<script>

function togglePassword() {

    const password = document.getElementById("password");
    const eyeIcon = document.getElementById("eyeIcon");

    if (password.type === "password") {

        password.type = "text";

        eyeIcon.classList.remove("bi-eye");
        eyeIcon.classList.add("bi-eye-slash");

    } else {

        password.type = "password";

        eyeIcon.classList.remove("bi-eye-slash");
        eyeIcon.classList.add("bi-eye");

    }

}

</script>

</body>
</html>