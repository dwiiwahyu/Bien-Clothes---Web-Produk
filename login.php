<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bien Clothes</title>
    <link rel="stylesheet" href="style.css"/>
    <style>
        footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 1rem; /* Menambahkan padding agar konten footer tidak menempel */
        margin-top: 6rem; /* Memberi jarak antara footer dan konten utama */
    }

        .login-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .login-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .login-form input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            margin: 2px;
        }
        .login-form button {
            background-color: #929AAB;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .login-form button:hover {
            background-color: #7b8396;
        }
        .register-link {
            text-align: center;
            margin-top: 15px;
        }
        /* Style untuk pesan error */
        .error-message {
            background-color: #ffebee;
            color: #c62828;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
            text-align: center;
            display: none;
        }
        .error-message.show {
            display: block;
        }
        .login-text{
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

    <div class="login-container">
        <h2 class="login-text">Login</h2>
        
        <!-- Tambahkan div untuk pesan error -->
        <div class="error-message <?php if(isset($_GET['error'])) echo 'show'; ?>">
            <?php
            if(isset($_GET['error'])) {
                if($_GET['error'] == 'wrong_password') {
                    echo "Username atau password salah!";
                } elseif($_GET['error'] == 'empty_fields') {
                    echo "Mohon isi semua field!";
                }
            }
            ?>
        </div>

        <form class="login-form" action="login_process.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <div class="register-link">
            <p>Belum punya akun? <a href="register.php">Daftar disini</a></p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Bien Clothes. Semua hak dilindungi.</p>
    </footer>
</body>
</html>