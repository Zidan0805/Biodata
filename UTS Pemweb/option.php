<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Status Bis</title>
</head>
<body style="background-color: #D9B08c">
    <div class = "table1">
    <form method="post">
            <label for="status">Detail status Bus</label>
            <select name="status" id="status">
                <option value="semua">semua</option>
                <option value='1'>Beroprasi</option>
                <option value='2'>Cadangan</option>
                <option value='0'>Rusak</option>
            </select>
            <input type="submit" name="submit" value="filter">
    <h3> DATA STATUS BUS </h3>
    <table border = "1">
        <tr>
        <th>Id Bus</th>
            <th>Plat Bus</th>
            <th>Status Bus</th>
            <th>Jumlah KM</th>
        </tr>
        <?php 
        include ('conn.php');
        if(isset($_POST['submit'])){
            $status = $_POST['status'];
            if($status == "semua"){
                $ambildata = mysqli_query($koneksi,"SELECT trans_upn.jumlah_km, bus.id_bus, bus.plat, bus.status FROM trans_upn JOIN bus ON id_trans_upn = bus.id_bus");
            } else {
                $ambildata = mysqli_query($koneksi,"SELECT trans_upn.jumlah_km, bus.id_bus, bus.plat, bus.status FROM trans_upn JOIN bus ON id_trans_upn = bus.id_bus WHERE bus.status = '$status'");
            }
        } else {
            $ambildata = mysqli_query($koneksi,"SELECT trans_upn.jumlah_km, bus.id_bus, bus.plat, bus.status FROM trans_upn JOIN bus ON id_trans_upn = bus.id_bus");
        }
        while ($tampil = mysqli_fetch_array($ambildata)){
            if ($tampil['status'] == '1') {
                $warna = 'green';
            } elseif ($tampil['status'] == '2') {
                $warna = 'yellow';
            } else {
                $warna = 'red';
            }
            echo "
            <tr>
            <td>$tampil[id_bus] </td>
            <td>$tampil[plat] </td>
            <td><span style='color: $warna;'>".$tampil['status']."</span></td>
            <td>$tampil[jumlah_km]</td>
            </tr>";
        }
        echo "</table>"
        ?>
    </table>
    </div>
</body>
</html>