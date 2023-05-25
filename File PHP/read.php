<?php

echo "<h3>Data Buku Perpustakaan</h3>";
$file_name = "buku.txt";

$read = file($file_name); 

echo "<table border='1'>
    <tr>
        <td>Kode Buku</td>
        <td>Judul Buku</td>
        <td>Pengarang</td>
        <td>Penerbit</td>
        <td>Tahun Buku</td>
        <td>Jumlah Halaman</td>
        <td>Kategori</td>
    </tr>";

foreach ($read as $book) {
    $data_book = explode("-", $book);
    echo "<tr>";
    echo "<td>$data_book[0]</td>";
    echo "<td>$data_book[1]</td>";
    echo "<td>$data_book[2]</td>";
    echo "<td>$data_book[3]</td>";
    echo "<td>$data_book[4]</td>";
    echo "<td>$data_book[5]</td>";
    echo "<td>$data_book[6]</td>";
    echo "</tr>";
}
echo "</table>";

echo '<br><br><a href="main.php">Kembali ke Form</a>';
