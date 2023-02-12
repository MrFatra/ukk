<?php

require 'config.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $telp = $_POST['telp'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO masyarakat VALUES('$nik', '$nama', '$username', '$password', '$telp')";
    $query = mysqli_query($connect, $sql);

    if ($query) {
        header('Location: ../login/masyarakat.php');
    } else {
        header('Location: ../register/masyarakat.php');
    }
}
