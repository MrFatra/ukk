<?php
session_start();
if ($_SESSION['middleware'] == 'masyarakat') {
    session_destroy();
    header('Location: ../login/masyarakat.php');
} elseif ($_SESSION['middleware'] == 'admin' || $_SESSION['middleware'] == 'petugas') {
    session_destroy();
    header('Location: ../login/petugas.php');
}
