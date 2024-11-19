<?php
// Untuk menandakan bahwa halaman ini adalah halaman utama (home)
$page = "home";

// Memanggil file config.php yang berisi koneksi ke database
include('function/config.php');
// Memanggil file navbar.php yang berisi tampilan navbar
include('navbar.php');

// Query untuk menampilkan data produk
$query = "SELECT * FROM produk";
$result = $conn->query($query);
?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Star Hotel</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit id labore accusantium eveniet reprehenderit perferendis est minus perspiciatis sed qui recusandae praesentium maxime beatae, mollitia expedita. Deleniti error esse temporibus.</p>
    </div>
</div>
<div class="container my-4">
    <h3 class="text-center font-weight-bold">Tipe Kamar</h3>
    <hr>
    <div class="row justify-content-center">
        <?php
        foreach ($result as $data) {
        ?>
            <div class="col col-md-4">
                <div class="card">
                    <img src="assets/img/<?= $data['foto_produk'] ?>" class="card-img-top" alt="<?= $data['nama_produk'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data['nama_produk'] ?></h5>
                        <p class="card-text">Harga untuk menginap di kamar ini adalah Rp <?= number_format($data['harga_produk'], 0, ",", ".") ?>.</p>
                        <a href="detail_produk.php?id=<?= $data['id_produk'] ?>" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


<?php
// Memanggil file footer.php yang berisi penutup halaman
include('footer.php');
?>