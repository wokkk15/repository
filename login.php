<?php
session_start();

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

$stmt = $conn->prepare("SELECT * FROM login WHERE user=? AND password=?");
$stmt->bind_param("ss", $user, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo "Akun Tidak Terdaftar atau Password Salah";
} else {
    // Mulai sesi
    session_start();

    while ($row = $result->fetch_assoc()) {
        // Mengatur variabel sesi
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['user'] = $row['user'];

        // Periksa jenis pengguna
        if ($row['user_type'] == 'penulis') {
            $_SESSION['id_user'] = $row['id'];
            header('Location: penulis.php');
        } else if ($row['user_type'] == 'admin') {
            $_SESSION['id_admin'] = $row['id'];
            header('Location: adminRepo/index.html');
        }
    }
}

$conn->close();
exit;
?>
