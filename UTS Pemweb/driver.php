<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Data Driver</title>
</head>
<body style="background-color: #D9B08c">
<?php include "conn.php";
?>
  <h3 align="center">INSERT DATA DRIVER</h3>
  <form action="" method="post">
  <table align="center" bgcolor="#D9B08c"  width="35%">
    <tr>
      <td>Id Driver</td><br>
      <td><input type="text" name="id_driver" size="10"></td>
    </tr>
    <tr>
      <td>Nama Driver</td><br>
      <td><input type="text" name="nama" size="30"></td>
    </tr>
    <tr>
      <td>Nomer Sim Driver</td><br>
      <td><input type="text" name="no_sim" size="30"></td>
    </tr>
    <tr>
      <td>Alamat Driver</td><br>
      <td><input type="text" name="alamat" size="30"></td>
    </tr>
  </table>
  <table align="center" bgcolor="#D9B08c"  width="10%">
    <tr>
      <br><br>
      <td><input type="submit" name="save" value="Insert"></td>
      <td><input type="reset" name="reset" value="Reset form"></td>
      <td><input type="button" name="back" value="Back to main" onclick="self.history.back()"></td>
    </tr>
  </table>
  </form>
  <?php
  if (isset($_POST['save'])){

    $simpan = mysqli_query($koneksi, "insert into driver set 
    id_driver = '$_POST[id_driver]',
    nama = '$_POST[nama]',
    no_sim = '$_POST[no_sim]',
    alamat = '$_POST[alamat]'");

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