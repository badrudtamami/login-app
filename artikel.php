<?php
require('library.php');
$lib = new Library();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $artikel = $lib->getById($id);
} else {
    header('Location: beranda.php');
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
    <title>baca artikel</title>
</head>
<header class="mb-5">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="nav nav-masthead justify-content-center me-auto mb-2 mb-md-0">
                    <a class="nav-link" href="beranda.php">Beranda</a>
                    <a class="nav-link" href="dashboard.php">Dashboard</a>
                    <a class="nav-link active" aria-current="page" href="#">Artikel</a>
                </div>
                <div class="float-md-end">
                    <a href="logout.php"><button class="btn btn-outline-danger" type="button">keluar</button></a>
                </div>
            </div>
        </div>
    </nav>
</header>
<main class="card-body">
    <div class="container bg-dark text-white text-center">
        <div class="row col-md-9">
            <h3 class="mb-3"><?= $artikel['judul_artikel'] ?></h3>
            <div class="media-body">
                <p><?= $artikel['isi_artikel']; ?></p>
            </div>
            <p>Dibuat pada: <?= $artikel['tgl_artikel'] ?></p>
            <p>Ditulis oleh: <?= $artikel['penulis_artikel'] ?></p>
        </div>
    </div>
    </div>
</main>

<body>

</body>

</html>