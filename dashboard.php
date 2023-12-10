<?php
session_start();

require('library.php');
$lib = new Library();
$data = $lib->showArtikel();

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
    <title>Dashboard</title>
</head>

<body>
    <header class="mb-5">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="nav nav-masthead justify-content-center me-auto mb-2 mb-md-0">
                        <a class="nav-link" href="beranda.php">Beranda</a>
                        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                        <a class="nav-link" href="artikel.php">Artikel</a>
                    </div>
                    <div class="float-md-end">
                        <a href="logout.php"><button class="btn btn-outline-danger" type="button">keluar</button></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="card-body">
        <table class="table table-bordered table-striped w-100">
            <thead class=" table-dark">
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Penulis</th>
                <th>Tanggal buat</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data as $artikel) :  ?>
                <tr>
                    <td><?= $no;  ?></td>
                    <td><?= $artikel['judul_artikel']; ?></td>
                    <td>...</td>
                    <td><?= $artikel['penulis_artikel']; ?></td>
                    <td><?= $artikel['tgl_artikel']; ?></td>
                    <td>
                        <a class='btn btn-info' href="edit.php?id=<?= $artikel['id'] ?>">Edit</a>
                        <a class='btn btn-danger' href="hapus.php?id=<?= $artikel['id'] ?>"
                            onclick="return confirm('yakin ingin menghapus ?')">Hapus</a>
                    </td>
                </tr>
                <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>

        </table>
        <a href="tambah.php" class="btn btn-success">Tambah data</a>
    </div>
</body>

</html>