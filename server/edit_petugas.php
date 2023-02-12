<?php

require 'config.php';

if (isset($_POST['submit']) && $_GET['id']) {
    $id_petugas = $_GET['id'];
    $nama_petugas = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $telepon = $_POST['telepon'];

    $sql = "UPDATE petugas SET nama_petugas='$nama_petugas', username='$username', telepon='$telepon' WHERE id_petugas='$id_petugas'";
    $query = mysqli_query($connect, $sql);

    if ($query) {
?>
        <script>
            alert('Data berhasil diubah!');
            window.location = '../index.php';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('Kesalahan saat mengubah data!');
            window.location = '../index.php';
        </script>
<?php
    }
}
