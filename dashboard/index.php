<?php

session_start();

if (isset($_SESSION['middleware'])) {
    if ($_SESSION['middleware'] == 'admin') {
        header('Location: admin/');
    } elseif ($_SESSION['middleware'] == 'petugas') {
        header('Location: petugas/');
    } elseif ($_SESSION['middleware'] == 'masyarakat') {
        header('Location: masyarakat/');
    }
} else {
    header('Location: belom_login_lu.php');
}
