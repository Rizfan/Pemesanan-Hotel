<?php

include('config.php');

// menangkap data yang dikirim dari form
if (isset($_POST['submit'])) {
    $nama_pemesan = $_POST['nama_pemesan'];
    $jenkel_pemesan = $_POST['jenkel_pemesan'];
    $nik_pemesan = $_POST['nik_pemesan'];
    $id_produk = $_POST['id_produk'];
    $harga_produk = $_POST['harga_produk'];
    $tgl_pesan = $_POST['tgl_pesan'];
    $durasi_menginap = $_POST['durasi_menginap'];
    $sarapan = $_POST['sarapan'];
    $discount = $_POST['discount'];
    $total_bayar = $_POST['total_bayar'];

    // Query untuk insert data ke database
    $query = "INSERT INTO pemesanan VALUES (NULL, '$nama_pemesan', '$jenkel_pemesan', '$nik_pemesan', '$id_produk', '$tgl_pesan', '$durasi_menginap', '$sarapan', '$discount', '$total_bayar')";

    $post = $conn->query($query);

    // Jika berhasil maka akan tampil alert berhasil dan redirect ke halaman reservasi.php
    if ($post) {
        echo "<script>
        alert('Berhasil');
        document.location.href = '../reservasi.php';
        </script>";
    }
    // Jika gagal maka akan tampil alert gagal dan redirect ke halaman reservasi.php
    else {
        echo "<script>alert('Gagal');
        document.location.href = '../reservasi.php';</script>";
    }
}
