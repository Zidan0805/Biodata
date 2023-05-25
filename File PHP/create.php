<?php

if ($_GET) {
    $buku = $_GET['kode']. "-" . $_GET['judul']. "-" . $_GET['pengarang']. "-" . $_GET['penerbit']. "-" . $_GET['tahun']. "-" . $_GET['halaman']. "-" . $_GET['kategori']. "-" .$_GET['cover']."\n";

    $file_name = "buku.txt";
    if (file_put_contents($file_name, $buku, FILE_APPEND) > 0) {
        echo "data berhasil disimpan";
    } else {
        echo "data gagal disimpan";
    }

    echo '<br><br><a href="main.php">Kembali ke Form</a>';
    echo '<br><br><a href="read.php">Lihat Data</a>';
}