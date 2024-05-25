<?php
include "sesi.php";

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "adminrepoith";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_POST['user'];
$password = $_POST['password'];

$result = $conn->query("SELECT * FROM login WHERE user='$user' AND password='$password'");
if ($result->num_rows == 0) {
    $check_user = $conn->query("SELECT * FROM login WHERE user='$user'");
    if ($check_user->num_rows == 0) {
        echo "Akun Tidak Terdaftar";
    } else {
        echo "Password Tidak Cocok";
    }
} else {
    // Mulai sesi
    session_start();

    while ($row = $result->fetch_assoc()) {
        // Mengatur variabel sesi
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['user'] = $row['user'];

        // Tentukan tipe pengguna
        $user_type = $row['user_type'];

        // Arahkan pengguna sesuai tipe
        if ($user_type == 'admin') {
            $_SESSION['id_admin'] = $row['id'];
            header('Location: adminrepo/index.html');
            exit;
        } elseif ($user_type == 'user') {
            $_SESSION['id_user'] = $row['id'];
            header('Location: penulis.html');
            exit;
        }
    }
}

$conn->close();
exit;
?>