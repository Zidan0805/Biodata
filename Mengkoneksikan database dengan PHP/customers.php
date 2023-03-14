<?php
include ('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tabel Customer</title>
</head>
<body>
    <div class = "table1">
    <h4> Customers </h4>
    <table border = "1">
        <tr>
            <th>No</th>
            <th>Customer Number</th>
            <th>Customer Name</th>
            <th>Contact Last Name</th>
            <th>Contact First Name</th>
            <th>Phone</th>
            <th>Address Line1</th>
            <th>Address Line2</th>
            <th>City</th>
            <th>State</th>
            <th>Postal Code</th>
            <th>Country</th>
            <th>Sales Rep Employee Number</th>
            <th>Credit Limit</th>
        </tr>
        <?php 
        $no=1;
        $ambildata = mysqli_query($koneksi,"SELECT * FROM `customers`");
        while ($tampil = mysqli_fetch_array($ambildata)){
            echo "
            <tr>
            <td>$no</td>
            <td>$tampil[customerNumber]</td>
            <td>$tampil[customerName]</td>
            <td>$tampil[contactLastName]</td>
            <td>$tampil[contactFirstName]</td>
            <td>$tampil[phone]</td>
            <td>$tampil[addressLine1]</td>
            <td>$tampil[addressLine2]</td>
            <td>$tampil[city]</td>
            <td>$tampil[state]</td>
            <td>$tampil[postalCode]</td>
            <td>$tampil[country]</td>
            <td>$tampil[salesRepEmployeeNumber]</td>
            <td>$tampil[creditLimit]</td>
            </tr>";
            $no++;
        }
        ?>
    </table>
    </div>
</body>
</html>