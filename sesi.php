<?php
session_start();

if (!isset($_SESSION['id_user'])) {
    header('Location: penulis.html');
    exit();

} else if ($useradmin) {
    if (!isset($_SESSION['id_admin'])) {
        header('Location: adminrepo/index.html');
        exit();
    }
}

?>
