<?php

require 'config.php';

if (isset($_POST['submit'])) {
    $nik = $_POST['nik'];
    $tgl_laporan = $_POST['tgl_laporan'];
    $judul_laporan = $_POST['judul_laporan'];
    $isi_laporan = $_POST['isi_laporan'];
    $foto_tmp = $_FILES['foto']['tmp_name'];
    $foto = $_FILES['foto']['name'];

    $sql = "INSERT INTO pengaduan VALUES('', '$tgl_laporan', '$nik', '$judul_laporan', '$isi_laporan', '$foto', 'proses')";
    $query = mysqli_query($connect, $sql);

    if ($query) {
?>
        <script>
            alert('Data berhasil ditambahkan!')
            window.location = '../dashboard/masyarakat/';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('Data gagal ditambahkan!')
            window.location = '../dashboard/masyarakat/';
        </script>
<?php
    }
}
