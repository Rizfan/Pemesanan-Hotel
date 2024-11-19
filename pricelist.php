<?php
$page = "pricelist";

include('function/config.php');
include('navbar.php');

$query = "SELECT * FROM produk";
?>

<div class="container my-4">
    <h1 class="text-center">Daftar Harga</h1>
    <hr>
    <div class="my-3">

        <table class="table table-striped ">
            <thead>
                <tr class="font-weight-bold">
                    <td>No</td>
                    <td>Jenis Kamar</td>
                    <td>Harga</td>
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
                        <td><?php echo $data['nama_produk']; ?></td>
                        <td><?php echo "Rp " . number_format($data['harga_produk'], 0, ",", "."); ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>


<?php
include('footer.php');
?>