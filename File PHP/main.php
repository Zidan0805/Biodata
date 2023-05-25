<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
</head>
<body>
    <h3>Input Data Buku Perpustakaan</h3>
    <form action="create.php" method="get">
        <table>
            <tr>
                <td>Kode Buku</td>
                <td><input type="text" name="kode"></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td><input type="text" name="pengarang"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit"></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="text" name="tahun"></td>
            </tr>
            <tr>
                <td>Jumlah Halaman</td>
                <td><input type="text" name="halaman"></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td><input type="text" name="kategori"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tulis ke FILE"></td>
            </tr>
        </table>
    </form>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <tr><td>Cover</td>
            <td><input type="file" name="cover" id="cover"></td>
            <td><input type="submit" value="Upload" name="submit"></td>
        </tr>
    </form>
</body>
</html>