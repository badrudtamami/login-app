<?php
require("library.php");
$lib = new Library();

if (isset($_POST['tambah'])) {
    $judul_artikel = $_POST['judul_artikel'];
    $isi_artikel = $_POST['isi_artikel'];
    $penulis_artikel = $_POST['penulis_artikel'];

    $add = $lib->createArtikel($judul_artikel, $isi_artikel, $penulis_artikel);
    if ($add) {
        header('Location: dashboard.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/bootstrap.min.css">
    <title>tambah data</title>
</head>

<body class="card-body">
    <div class="container">
        <h2>Buat Artikel</h2>
        <form action="" method="post">
            <div class="form-group">
                <label>Judul artikel:</label>
                <input type="text" name="judul_artikel" class="form-control">
            </div><br>

            <div class="form-group">
                <label>Isi Artikel :</label>
                <textarea class="form-control" rows="5" name="isi_artikel"></textarea>
            </div><br>

            <div class="form-group">
                <label>penulis:</label>
                <input type="text" name="penulis_artikel" class="form-control">
            </div><br>
            <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
        </form>
    </div>
</body>

</html>