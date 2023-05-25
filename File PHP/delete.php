<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $filename = "uploads/Buku.txt";
    $contentToDelete = $_POST['kode']."-".$_POST['judul']."-".$_POST['pengarang']."-".$_POST['tahun']."-".$_POST['jumlah']."-".$_POST['penerbit']."-".$_POST['kategori']."\n";

    // Membaca isi file
    $file = file_get_contents($filename);

    // Menghapus bagian yang diinginkan
    $newContent = str_replace($contentToDelete, '', $file);

    // Menulis kembali sisa konten ke file
    $result = file_put_contents($filename, $newContent);

    if ($result !== false) {
        echo "Isi Data Buku Telah Di Hapus '$filename'.";
    } else {
        echo "Gagal Menghapus Data Dalam Buku.";
    }
}
?>