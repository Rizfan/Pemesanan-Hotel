<?php

$host = "localhost"; //nama host
$user = "root"; //nama user
$pass = ""; //password
$db = "db_hotel"; //nama database

//membuat koneksi
$conn = new mysqli($host, $user, $pass, $db);

//cek koneksi
if ($conn->connect_error) {
    //jika terjadi error, matikan proses dengan die() atau exit()
    die("Connection failed: " . $conn->connect_error);
}
