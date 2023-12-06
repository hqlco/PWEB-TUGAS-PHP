<?php

$server = "localhost:4306";
$user = "root";
$password = "";
$nama_database = "TUGAS10";

$mysqli = mysqli_connect($server, $user, $password, $nama_database);

if (!$mysqli) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
