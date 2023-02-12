<?php

if (isset($_GET['url'])) {
    switch ($_GET['url']) {
        case 'tulis_laporan':
            include 'tulis_laporan.php';
            break;

        case 'laporan_saya':
            include 'laporan_saya.php';
            break;

        default:
            break;
    }
}
