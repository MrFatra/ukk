<?php

require 'config.php';
session_start();

if (isset($_POST['submit'])) {
    $id_pengaduan = $_POST['id_pengaduan'];
    $tgl_tanggapan = date('Y-m-d');
    $tanggapan = $_POST['tanggapan'];
    $id_petugas = $_SESSION['id_petugas'];

    $verify_sql = "UPDATE pengaduan SET status='selesai' WHERE id_pengaduan='$id_pengaduan'";
    $query = mysqli_query($connect, $verify_sql);

    $response_sql = "INSERT INTO tanggapan VALUES('', '$id_pengaduan', '$tgl_tanggapan', '$tanggapan', '$id_petugas')";
    $query = mysqli_query($connect, $response_sql);

    if ($query) {
?>
        <script>
            alert('Data berhasil diverifikasi!')
            window.location = '../index.php';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('Waduuh.. Terjadi kesalahan!')
            window.location = '../index.php';
        </script>
    <?php
    }
} elseif (isset($_POST['delete'])) {
    $id_pengaduan = $_POST['id_pengaduan'];
    $sql = "DELETE FROM pengaduan WHERE id_pengaduan='$id_pengaduan'";
    $query = mysqli_query($connect, $sql);

    if ($query) {
    ?>
        <script>
            alert('Laporan Hoax berhasil ditolak!')
            window.location = '../index.php';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('Terjadi kesalahan!')
            window.location = '../index.php';
        </script>
<?php
    }
}
