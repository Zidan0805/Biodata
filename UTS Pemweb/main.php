<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data Product</title>
</head>
<body style="background-color: #D9B08c">
<?php
include ('conn.php');
?>
    <div class = "table1">
    <h4> Bus </h4>
    <a href="bus.php"><h4>Create Data Bus</h4></a>
    <a href="busUp.php"><h4>Update Data Bus</h4></a>
    <a href="busDel.php"><h4>Delete Data Bus</h4></a>
    <table border = "1">
        <tr>
            <th>Id Bus</th>
            <th>Plat Bus</th>
            <th>Status Bus</th>
            <th>Jumlah Kilometer Bus</th>
        </tr>
        <?php 
        $ambildata = mysqli_query($koneksi,"SELECT trans_upn.jumlah_km, bus.id_bus, bus.plat, bus.status FROM trans_upn JOIN bus ON id_trans_upn = bus.id_bus");
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
        ?>
    </table>
    </div>

    <div class = "table1">
    <h4> Driver </h4>
    <a href="driver.php"><h4>Create Data Driver</h4></a>
    <a href="driverUp.php"><h4>Update Data Driver</h4></a>
    <a href="driverDel.php"><h4>Delete Data Driver</h4></a>
    <table border = "1">
        <tr>
            <th>Id Driver</th>
            <th>Nama Driver</th>
            <th>Nomer Sim Driver</th>
            <th>Alamat Driver</th>
            <th>Jumlah Kilometer Driver</th>
        </tr>
        <?php 
        $ambildata = mysqli_query($koneksi,"SELECT driver.id_driver, driver.nama,driver.no_sim,driver.alamat, trans_upn.jumlah_km FROM driver JOIN trans_upn ON driver.id_driver = trans_upn.id_trans_upn;");
        while ($tampil = mysqli_fetch_array($ambildata)){
            echo "
            <tr>
            <td>$tampil[id_driver]</td>
            <td>$tampil[nama]</td>
            <td>$tampil[no_sim]</td>
            <td>$tampil[alamat]</td>
            <td>$tampil[jumlah_km]</td>
            </tr>";
        }
        ?>
    </table>
    </div>

    <div class = "table1">
    <h4> Kondektur </h4>
    <a href="kondektur.php"><h4>Create Data Kondektur</h4></a>
    <a href="kondekturUp.php"><h4>Update Data Kondektur</h4></a>
    <a href="kondekturDel.php"><h4>Delete Data Kondektur</h4></a>
    <table border = "1">
        <tr>
            <th>Id Kondektur</th>
            <th>Nama Kondektur</th>
            <th>Jumlah Kilometer Kondektur</th>
        </tr>
        <?php 
        $ambildata = mysqli_query($koneksi,"SELECT trans_upn.jumlah_km, kondektur.id_kondektur, kondektur.nama FROM trans_upn JOIN kondektur ON id_trans_upn = kondektur.id_kondektur");
        while ($tampil = mysqli_fetch_array($ambildata)){
            echo "
            <tr>
            <td>$tampil[id_kondektur]</td>
            <td>$tampil[nama]</td>
            <td>$tampil[jumlah_km]</td>
            </tr>";
        }
        ?>
    </table>
    </div>

    <div class = "table1">
    <h4> Trans UPN </h4>
    <table border = "1">
        <tr>
            <th>Id Trans UPN</th>
            <th>Id Kondektur</th>
            <th>Id Bus</th>
            <th>Id Driver</th>
            <th>Jumlah Kilometer</th>
            <th>Tanggal</th>
        </tr>
        <?php 
        $ambildata = mysqli_query($koneksi,"SELECT *FROM `trans_upn`");
        while ($tampil = mysqli_fetch_array($ambildata)){
            echo "
            <tr>
            <td>$tampil[id_trans_upn]</td>
            <td>$tampil[id_kondektur]</td>
            <td>$tampil[id_bus]</td>
            <td>$tampil[id_driver]</td>
            <td>$tampil[jumlah_km]</td>
            <td>$tampil[tanggal]</td>
            </tr>";
        }
        ?>
    </table>
    </div>
</body>
</html>