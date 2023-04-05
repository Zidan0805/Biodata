<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body style="background-color: #D9B08c">
    <h1>Update Data</h1>

    <form action="" method="post">
        <ul>
            <li>
            <label for="id_driver$id_driver">id_driver :</label>
                <input type="text" name="id_driver$id_driver" id="id_driver$id_driver">
            </li>
            <li>
            <label for="nama$nama">nama :</label>
                <input type="text" name="nama$nama" id="nama$nama">
            </li>
            <li>
            <label for="no_sim">no_sim :</label>
                <input type="text" name="no_sim" id="no_sim">
            </li>
            <li>
            <label for="alamat">alamat :</label>
                <input type="text" name="alamat" id="alamat">
            </li>
            <li>
                <button type="submit" name="submit">Insert

                </button>
            </li>
        </ul>
    </form>
    <?php 
include('conn.php');

if (isset($_POST["submit"])){

    $id_driver = $_POST['id_driver$id_driver'];
    $nama = $_POST['nama$nama'];
    $no_sim = $_POST['no_sim'];
    $alamat = $_POST['alamat'];

    $ambildata = "UPDATE driver SET nama='$nama', no_sim='$no_sim', alamat='$alamat' WHERE id_driver='$id_driver'";
    $result = mysqli_query($koneksi, $ambildata);

    if ($result){
        echo "<script> alert('Data berhasil diupdate')</script>";
        header("refresh:0;main.php");
    } else {
        echo "<script> alert('Data tidak terupdate')</script>";
    }
}
?>
</body>
</html>