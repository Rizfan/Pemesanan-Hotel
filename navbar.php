<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Hotel</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/my-css.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm " style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="index.php">Star Hotel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php if ($page == "home") {
                                            echo "active ";
                                        } ?>">
                        <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php if ($page == "about_us") {
                                            echo "active ";
                                        } ?>">
                        <a class="nav-link" href="about_us.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item <?php if ($page == "pricelist") {
                                            echo "active ";
                                        } ?>">
                        <a class="nav-link" href="pricelist.php">Daftar Harga</a>
                    </li>
                    <li class="nav-item <?php if ($page == "reservasi") {
                                            echo "active ";
                                        } ?>">
                        <a class="nav-link" href="reservasi.php">Pemesanan</a>
                    </li>
                    <li class="nav-item <?php if ($page == "history") {
                                            echo "active ";
                                        } ?>">
                        <a class="nav-link" href="history.php">Riwayat Pemesanan</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>