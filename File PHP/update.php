<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $filename = "uploads/Buku.txt";
    $oldContent = $_POST['Oldkode']."-".$_POST['Oldjudul']."-".$_POST['Oldpengarang']."-".$_POST['Oldtahun']."-".$_POST['Oldjumlah']."-".$_POST['Oldpenerbit']."-".$_POST['Oldkategori']."\n";
    $newContent = $_POST['Newkode']."-".$_POST['Newjudul']."-".$_POST['Newpengarang']."-".$_POST['Newtahun']."-".$_POST['Newjumlah']."-".$_POST['Newpenerbit']."-".$_POST['Newkategori']."\n";

    // Membaca isi file
    $file = file_get_contents($filename);

    // Mengubah bagian yang diinginkan
    $updatedContent = str_replace($oldContent, $newContent, $file);

    // Menulis kembali konten yang telah diubah ke file
    $result = file_put_contents($filename, $updatedContent);

    if ($result !== false) {
        echo "Berhasil Mengubah Isi Data Buku '$filename'.";
    } else {
        echo "Gagal Mengubah Isi Data Buku.";
    }
}
?>