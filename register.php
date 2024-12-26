<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Bien Clothes</title>
    <link rel="stylesheet" href="style.css"/>
    <style>
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem; /* Menambahkan padding agar konten footer tidak menempel */
            margin-top: 2rem; /* Memberi jarak antara footer dan konten utama */
        }
        .register-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .register-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .register-form input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        .register-form button {
            background-color: #929AAB;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .register-form button:hover {
            background-color: #7b8396;
        }
        .error-message {
            background-color: #ffebee;
            color: #c62828;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
            text-align: center;
        }
        .success-message {
            background-color: #e8f5e9;
            color: #2e7d32;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
            text-align: center;
        }
        .register-text {
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="POTO UAS WEB/logo bien clothes.jpg" alt="Bien Clothes Logo" class="logo-image">
            <div class="logo-text">Bien Clothes</div>
        </div>
        <nav>
            <a href="Beranda.html">Beranda</a>
            <a href="Produk.html">Produk</a>
            <a href="Tentang_Kami.html">Tentang Kami</a>
            <a href="Kontak.html">Kontak</a>
            <a href="login.php">Login</a>
        </nav>
    </header>

    <div class="register-container">
        <h2 class="register-text">Register </h2>
        
        <?php
            if(isset($_GET['error'])) {
                $error = $_GET['error'];
                if($error == 'passwords_dont_match') {
                    echo '<div class="error-message">Password tidak cocok!</div>';
                } elseif($error == 'username_exists') {
                    echo '<div class="error-message">Username sudah digunakan!</div>';
                } elseif($error == 'email_exists') {
                    echo '<div class="error-message">Email sudah digunakan!</div>';
                } elseif($error == 'empty_fields') {
                    echo '<div class="error-message">Semua field harus diisi!</div>';
                } elseif($error == 'invalid_email') {
                    echo '<div class="error-message">Format email tidak valid!</div>';
                }
            }

            if(isset($_GET['success'])) {
                echo '<div class="success-message">Registrasi berhasil! Silakan <a href="login.php">login</a>.</div>';
            }
        ?>

        <form class="register-form" action="register_process.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
        </form>
        <div style="text-align: center; margin-top: 15px;">
            <p>Sudah punya akun? <a href="login.php">Login disini</a></p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Bien Clothes. Semua hak dilindungi.</p>
    </footer>
</body>
</html>