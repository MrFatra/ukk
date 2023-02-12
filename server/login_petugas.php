<?php

require 'config.php';
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM petugas WHERE username='$username'";
    $query = mysqli_query($connect, $sql);

    if ($sql) {
        if ($query->num_rows > 0) {
            $data = mysqli_fetch_assoc($query);
            if (password_verify($password, $data['password'])) {
                $_SESSION['middleware'] = $data['level'];
                $_SESSION['id_petugas'] = $data['id_petugas'];
                $_SESSION['nama_petugas'] = $data['nama_petugas'];

                $_SESSION['message'] = 'Login sukses, sedang mengalihkan laman...';
                $_SESSION['status'] = 'success';
                // BALIK LAGI KARENA ADA META
                header('Location: ../login/petugas.php');
            } else {
                $_SESSION['message'] = 'Username/password salah.';
                header('Location: ../login/petugas.php');
            }
        } else {
            $_SESSION['message'] = 'User tidak ditemukan.';
            header('Location: ../login/petugas.php');
        }
    } else {
        $_SESSION['message'] = 'Username/password salah.';
        header('location: ../login/petugas.php');
    }
}
