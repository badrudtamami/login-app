<?php
require('library.php');
$lib = new Library();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data_artikel = $lib->getById($id);
} else {
    header('Location: dashboard.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $judul_artikel = $_POST['judul_artikel'];
    $isi_artikel = $_POST['isi_artikel'];
    $penulis_artikel = $_POST['penulis_artikel'];

    $status_update = $lib->updateArtikel($id, $judul_artikel, $isi_artikel, $penulis_artikel);
    if ($status_update) {
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
    <title>edit artikel</title>
</head>

<body class="card-body">
    <div class="container">
        <h2>Edit Artikel</h2>
        <form action="" method="post">
            <div class="form-group">
                <input type="hidden" name="id" value="<?= $data_artikel['id']; ?>">
                <label>Judul artikel:</label>
                <input type="text" name="judul_artikel" class="form-control"
                    value="<?= $data_artikel['judul_artikel']; ?>">
            </div><br>

            <div class=" form-group">
                <label>Isi Artikel :</label>
                <textarea class="form-control" rows="5"
                    name="isi_artikel"><?= $data_artikel['isi_artikel']; ?></textarea>
            </div><br>

            <div class="form-group">
                <label>penulis:</label>
                <input type="text" name="penulis_artikel" class="form-control"
                    value="<?= $data_artikel['penulis_artikel']; ?>">
            </div><br>
            <button type="submit" class="btn btn-primary" name="edit">Edit</button>
        </form>
    </div>
</body>

</html>