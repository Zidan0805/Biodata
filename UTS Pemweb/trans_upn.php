<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Data Trans UPN</title>
</head>
<body style="background-color: #D9B08c">
<?php include "conn.php";
?>
  <h3 align="center">INSERT DATA TRANS UPN</h3>
  <form action="" method="post">
  <table align="center" bgcolor="#D9B08c"  width="35%">
    <tr>
      <td>Id Trans UPN</td><br>
      <td><input type="text" name="id_bus" size="10"></td>
    </tr>
    <tr>
      <td>Id Kondektur</td><br>
      <td><input type="text" name="plat" size="30"></td>
    </tr>
    <tr>
      <td>Id Bus</td><br>
      <td><input type="text" name="status" size="1"></td>
    </tr>
    <tr>
      <td>Id Driver</td><br>
      <td><input type="text" name="status" size="1"></td>
    </tr>
    <tr>
      <td>Jumlah Kilometer</td><br>
      <td><input type="text" name="status" size="1"></td>
    </tr>
    <tr>
      <td>Tanggal</td><br>
      <td><input type="text" name="status" size="30"></td>
    </tr>
  </table>
  <table align="center" bgcolor="#D9B08c"  width="10%">
    <tr>
      <br><br>
      <td><input type="submit" name="save" value="Insert"></td>
      <td><input type="reset" name="reset" value="Reset"></td>
      <td><input type="button" name="back" value="Back to main" onclick="self.history.back()"></td>
    </tr>
  </table>
  </form>
  <?php
  if (isset($_POST['save'])){

    $simpan = mysqli_query($koneksi, "insert into trans_upn set 
    id_trans_upn = '$_POST[id_trans_upn]',
    id_kondektur = '$_POST[id_kondektur]',
    id_bus = '$_POST[id_bus]',
    id_driver = '$_POST[id_driver]',
    jumlah_km = '$_POST[jumlah_km]',
    tanggal = '$_POST[tanggal]'");

    if ($simpan){
      echo "<script> alert ('Data berhasil disimpan')</script>";
      header ("refresh:0;main.php");
    }
    else{
      echo "<script> alert ('Data tidak berhasil disimpan')</script>";
      header ("refresh:0;main.php");
    }

  }
  ?>
</body>
</html>