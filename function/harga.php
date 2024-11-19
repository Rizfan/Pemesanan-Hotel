<?php

include('config.php');

$id_produk = $_GET['q'];

$query_produk = "SELECT * FROM produk WHERE id_produk = '$id_produk'";
$result_produk = $conn->query($query_produk);
$result_produk = $result_produk->fetch_assoc();

echo $result_produk['harga_produk'];
