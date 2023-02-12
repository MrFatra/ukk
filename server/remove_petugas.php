<?php

require 'config.php';

if (isset($_GET['id'])) {
    $id_petugas = $_GET['id'];

    $sql = "DELETE FROM petugas WHERE id_petugas='$id_petugas'";
    $query = mysqli_query($connect, $sql);

    if ($query) {
?>
        <script>
            alert('Data berhasil dihapus!');
            window.location = '../index.php';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('Data gagal dihapus!');
            window.location = '../index.php';
        </script>
<?php
    }
}
