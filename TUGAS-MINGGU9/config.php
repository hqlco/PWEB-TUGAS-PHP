<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "TUGAS9";
$port = "4306";

$db = mysqli_connect($server, $user, $password, $nama_database, $port);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
