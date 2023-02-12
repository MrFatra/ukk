<?php

require 'config.php';
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM masyarakat WHERE username='$username'";
    $query = mysqli_query($connect, $sql);

    if ($sql) {
        if ($query->num_rows > 0) {
            $fetch = mysqli_fetch_assoc($query);
            if (password_verify($password, $fetch['password'])) {
                $_SESSION['middleware'] = 'masyarakat';
                $_SESSION['nik'] = $fetch['nik'];
                $_SESSION['nama'] = $fetch['nama'];
                // header('refresh: ../index.php');
                $_SESSION['message'] = 'Login sukses, sedang mengalihkan laman...';
                $_SESSION['status'] = 'success';
                header('Location: ../login/masyarakat.php');
            } else {
                $_SESSION['message'] = 'Username/password salah.';
                header('location: ../login/masyarakat.php');
            }
        } else {
            $_SESSION['message'] = 'User tidak ditemukan.';
            header('location: ../login/masyarakat.php');
        }
    } else {
        $_SESSION['message'] = 'Username/password salah.';
        header('location: ../login/masyarakat.php');
    }
}
