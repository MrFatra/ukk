<?php

if (isset($_GET['url'])) {
    switch ($_GET['url']) {
        case 'verifikasi_laporan':
            include 'verifikasi_laporan.php';
            break;

        case 'edit_petugas':
            include 'edit_petugas.php';
            break;

        case 'laporan_petugas':
            include 'laporan_petugas.php';
            break;

        case 'laporan_pengaduan':
            include 'laporan_pengaduan.php';
            break;

        case 'detail_verifikasi':
            include 'detail_verifikasi.php';
            break;

        case 'master_petugas':
            include 'master_petugas.php';
            break;

        default:
            break;
    }
}
