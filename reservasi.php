<?php
$page = "reservasi";

include('function/config.php');
include('navbar.php');

// untuk menangkap data dari url
if (isset($_GET['tipe_kamar'])) {
    $tipe_kamar = $_GET['tipe_kamar'];
} else {
    $tipe_kamar = null;
}

if (isset($_GET['harga'])) {
    $harga = $_GET['harga'];
} else {
    $harga = null;
}

// query untuk menampilkan data produk
$query_produk = "SELECT * FROM produk";
?>

<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col col-md-8">

            <div class="card my-2">
                <div class="card-header">
                    <h3>Pemesanan</h3>
                </div>
                <div class="card-body">
                    <form name="form_reservasi" id="form_reservasi" method="post" action="function/insert_reservasi.php">
                        <div class="form-group row">
                            <label for="nama_pemesan" class="col-sm-3 col-form-label">Nama Pemesan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenkel_pemesan" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <div class="form-check  form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenkel_pemesan" id="jenkel_pemesan1" value="Laki-laki" checked>
                                    <label class="form-check-label" for="jenkel_pemesan1">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check  form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenkel_pemesan" id="jenkel_pemesan2" value="Perempuan">
                                    <label class="form-check-label" for="jenkel_pemesan2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nik_pemesan" class="col-sm-3 col-form-label">Nomor Identitas</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="nik_pemesan" name="nik_pemesan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tipe_kamar" class="col-sm-3 col-form-label">Tipe Kamar</label>
                            <div class="col-sm-9">
                                <select name="id_produk" id="id_produk" class="form-control" required onchange="harga(this.value)">
                                    <option value="" disabled selected>-Tipe Kamar-</option>

                                    <?php
                                    $result_produk = $conn->query($query_produk);
                                    // menampilkan data produk
                                    foreach ($result_produk as $data_produk) {
                                    ?>
                                        <option value="<?php echo $data_produk['id_produk']; ?>" <?php if ($tipe_kamar == $data_produk['id_produk']) {
                                                                                                        echo "selected";
                                                                                                    } ?>>
                                            <?php echo $data_produk['nama_produk']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga_produk" class="col-sm-3 col-form-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" required id="harga_produk" name="harga_produk" <?php if ($harga != null) {
                                                                                                                                echo "value='" . $harga . "'";
                                                                                                                            } ?> readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl_pesan" class="col-sm-3 col-form-label">Tanggal Pesan</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" required id="tgl_pesan" name="tgl_pesan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="durasi_menginap" class="col-sm-3 col-form-label">Durasi Menginap</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" required id="durasi_menginap" name="durasi_menginap">
                            </div>
                            <div class="col-sm-3">
                                <label for="durasi_menginap" class="col-form-label">Hari</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sarapan" class="col-sm-3 col-form-label">Termasuk Breakfast</label>
                            <div class="col-sm-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="sarapan" value="1" name="sarapan">
                                    <label class="form-check-label" for="sarapan">
                                        Ya
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="total_bayar" class="col-sm-3 col-form-label">Total Bayar</label>
                            <div class="col-sm-9">
                                <input type="hidden" name="discount" id="discount">
                                <input type="int" class="form-control" id="total_bayar" name="total_bayar" readonly required>
                            </div>
                        </div>
                        <div class="mt-3">

                            <button name="hitung" type="button" class="btn btn-success" onclick="hitung_total()">Hitung Total Bayar</button>

                            <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                            <button name="cancel" class="btn btn-danger" type="reset">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('footer.php');
?>