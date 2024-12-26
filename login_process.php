<?php
session_start();

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'bien_clothes';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Periksa apakah field kosong
    if(empty($_POST['username']) || empty($_POST['password'])) {
        header("Location: login.php?error=empty_fields");
        exit();
    }

    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];
    
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: beranda.html");
            exit();
        } else {
            // Password salah
            header("Location: login.php?error=wrong_password");
            exit();
        }
    } else {
        // Username tidak ditemukan
        header("Location: login.php?error=wrong_password");
        exit();
    }
}

$conn->close();
?>