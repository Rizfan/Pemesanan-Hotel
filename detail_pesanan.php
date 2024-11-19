<?php
$page = "detail_pesanan";
include('function/config.php');
include('navbar.php');

// menampilkan data pemesanan berdasarkan id
$id = $_GET['id'];
$query = "SELECT * FROM pemesanan INNER JOIN produk ON pemesanan.id_produk = produk.id_produk WHERE id_pemesanan = '$id'";

$result = $conn->query($query);
$data = $result->fetch_assoc();
?>

<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col col-md-10">
            <h2 class="text-center font-weight-bold">Detail Pesanan</h2>
            <hr>
            <div class="my-3 table-responsive">
                <table class="table table-borderless">
                    <tr>
                        <td class="font-weight-bold">Nama Pemesan</td>
                        <td>:</td>
                        <td>
                            <?php
                            echo $data['nama_pemesan'];
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Nomor Identitas</td>
                        <td>:</td>
                        <td>
                            <?php
                            echo $data['nik_pemesan'];
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <?php
                            echo $data['jenkel_pemesan'];
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Tipe Kamar</td>
                        <td>:</td>
                        <td>
                            <?php
                            echo $data['nama_produk'];
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Durasi Menginap</td>
                        <td>:</td>
                        <td>
                            <?php
                            echo $data['durasi_menginap'] . " Hari";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Discount</td>
                        <td>:</td>
                        <td>
                            <?php
                            echo "Rp " . number_format($data['discount'], 0, ",", ".") . " (10%)";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Total Bayar</td>
                        <td>:</td>
                        <td>
                            <?php
                            echo "Rp " . number_format($data['total_bayar'], 0, ",", ".");
                            ?>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- <div class="mt-4">
                <h4 class="text-center font-weight-bold">Dokumentasi Kamar</h4>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-md-6 my-2">
                        <img src="assets/img/<?= $data['foto_produk']; ?>" class="img-fluid" alt="Kamar">
                    </div>
                    <div class="col-md-6 my-2">
                        <iframe class="col-12" height="300" src="<?= $data['video_produk'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</div>


<?php
include('footer.php');
?>