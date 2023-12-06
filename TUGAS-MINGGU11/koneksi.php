<?php
$host = "localhost:4306";
$username = "root";
$password = "";
$database = "TUGAS11";


$pdo = new PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password);
