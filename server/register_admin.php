<?php

require 'config.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = 'admin';

    $sql = "INSERT INTO petugas VALUES('', '$nama', '$username', '$password', '$telp', '$role')";
    $query = mysqli_query($connect, $sql);

    if ($query) {
        header('Location: ../login/petugas.php');
    } else {
        header('Location: ../register/petugas.php');
    }
}
