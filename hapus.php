<?php
require('library.php');
$lib = new Library();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $lib = new Library();
    $status_hapus = $lib->deleteArtikel($id);
    if ($status_hapus) {
        header('Location: dashboard.php');
    }
}