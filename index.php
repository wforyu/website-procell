<?php
session_start();

// Cek apakah sudah login
if (isset($_SESSION['user'])) {
    header("Location: frontend/dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang | POS Mikro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional: Icon Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            color: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .welcome-box {
            background-color: rgba(0,0,0,0.5);
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0,0,0,0.4);
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="welcome-box text-center">
            <h1 class="mb-3"><i class="bi bi-shop-window"></i> Aplikasi POS Mikro Procell</h1>
            <p class="lead">Selamat Datang Di Sistem Point of Sale Mikro Multi-Cabang Procell.</p>
            <p>Silahkan Login Untuk Melanjutkan Ke Dashboard.</p>
            <a href="frontend/login.php" class="btn btn-success btn-lg mt-3">
                <i class="bi bi-box-arrow-in-right"></i> Login Sekarang
            </a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
