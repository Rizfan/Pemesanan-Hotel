<?php
$page = "detail_produk";
include('function/config.php');
include('navbar.php');

// menampilkan detail produk berdasarkan id
$id_produk = $_GET['id'];
$query = "SELECT * FROM produk WHERE id_produk = '$id_produk'";
$result = $conn->query($query);
$data = $result->fetch_assoc();
?>


<div class="parallax" style="background-image: url('assets/img/<?= $data['foto_produk'] ?>');"></div>

<div class="container my-4">

    <div class="row justify-content-center mt-4">
        <div class="col col-md-10">
            <h2 class="text-center font-weight-bold">Tipe Kamar : <?= $data['nama_produk'] ?></h2>
            <h4 class="text-center">Harga : <?= "Rp " . number_format($data['harga_produk'], 0, ",", "."); ?> /Malam</h4>
            <hr>
            <div class="my-3">
                <p class="text-justify">Deskripsi : <?= $data['deskripsi_produk'] ?></p>

                <a href="reservasi.php?tipe_kamar=<?= $data['id_produk'] ?>&harga=<?= $data['harga_produk'] ?>" class="btn btn-primary">Reservasi disini!</a>
            </div>
            <iframe class="col-12 mt-4" height="300" src="<?= $data['video_produk'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>


<?php
include('footer.php');
?>