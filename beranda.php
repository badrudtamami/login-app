<?php
session_start();
require('library.php');
$lib = new Library();

//menampilkan
$data = $lib->showArtikel();
//cek session
if (!$lib->isLoggedIn()) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/bootstrap.min.css">
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>beranda</title>
</head>

<body>
    <header class="mb-5">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="nav nav-masthead justify-content-center me-auto mb-2 mb-md-0">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                        <a class="nav-link" href="artikel.php">Artikel</a>
                    </div>
                    <div class="float-md-end">
                        <a href="logout.php"><button class="btn btn-outline-danger" type="button">keluar</button></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <?php foreach ($data as $artikel) :  ?>
    <main class="card-body">
        <div class="container bg-dark text-white">
            <div class="row col-md-9 panel panel-default panel-body p-2">
                <h3><?= $artikel['judul_artikel'] ?></h3>
                <p>Dibuat pada: <?= $artikel['tgl_artikel'] ?></p>
                <p>Ditulis oleh: <?= $artikel['penulis_artikel'] ?></p>
                <div class="media">
                    <div class="media-body">
                        <?php
                            //jika isi artikel lebih dari 200 kata
                            $string = strip_tags($artikel['isi_artikel']);
                            if (strlen($string) > 200) {

                                // truncate string
                                $stringCut = substr($string, 0, 200);
                                $endPoint = strrpos($stringCut, ' ');
                                $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                $string .= '...';
                            }
                            echo $string;
                            ?>
                    </div>
                    <div class="mb-2 mt-2">
                        <a class='btn btn-primary' href="artikel.php?id=<?= $artikel['id'] ?>">Baca</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php endforeach; ?>
</body>

</html>