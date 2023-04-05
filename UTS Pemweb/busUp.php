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
            <label for="id_bus$id_bus">id_bus :</label>
                <input type="text" name="id_bus$id_bus" id="id_bus$id_bus">
            </li>
            <li>
            <label for="plat$plat">plat :</label>
                <input type="text" name="plat$plat" id="plat$plat">
            </li>
            <li>
            <label for="status">status :</label>
                <input type="text" name="status" id="status">
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

    $id_bus = $_POST['id_bus$id_bus'];
    $plat = $_POST['plat$plat'];
    $status = $_POST['status'];

    $ambildata = "UPDATE bus SET plat='$plat', status='$status' WHERE id_bus='$id_bus'";
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