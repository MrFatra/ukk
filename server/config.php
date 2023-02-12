<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'e_pengaduan';

$connect = mysqli_connect($host, $user, $pass, $db);

if (!$connect) {
    die('Database Connection Failed!');
}
