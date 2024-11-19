<?php
$page = "history";
include('function/config.php');
include('navbar.php');

$query = "SELECT * FROM pemesanan INNER JOIN produk ON pemesanan.id_produk = produk.id_produk";
?>

<div class="container my-4">
    <h2 class="text-center font-weight-bold">Daftar Pesanan</h2>
    <hr>
    <div class="my-3">
        <div class="table-responsive">

            <table class="table table-striped ">
                <thead>
                    <tr class="font-weight-bold">
                        <td>No</td>
                        <td>Nama Pemesan</td>
                        <td>Jenis Kelamin</td>
                        <td>Nomor Identitas</td>
                        <td>Tipe Kamar</td>
                        <td>Harga</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $conn->query($query);
                    $no = 1;
                    foreach ($result as $data) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['nama_pemesan']; ?></td>
                            <td><?php echo $data['jenkel_pemesan']; ?></td>
                            <td><?php echo $data['nik_pemesan']; ?></td>
                            <td><?php echo $data['nama_produk']; ?></td>
                            <td><?php echo "Rp " . number_format($data['total_bayar']); ?></td>
                            <td>
                                <a href="detail_pesanan.php?id=<?= $data['id_pemesanan'] ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>