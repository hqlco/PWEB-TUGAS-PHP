<?php

$server = "localhost:4306";
$user = "root";
$password = "";
$nama_database = "TUGAS12";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
