<?php
session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: penulis.php');
    exit();

} else if ($useradmin) {
    if (!isset($_SESSION['id_admin'])) {
        header('Location: adminRepo/index.php');
        exit();
    }
}

?>
