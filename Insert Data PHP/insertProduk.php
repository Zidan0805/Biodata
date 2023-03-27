<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Data Product</title>
</head>
<body style="background-color: #D9B08c">
<?php include "conn.php";
?>
  <h3 align="center">INSERT DATA PRODUCT</h3>
  <form action="" method="post">
    <table align="center" bgcolor="#D9B08c"  width="35%">
    <tr>
      <td>Product Code</td><br>
      <td><input type="text" name="productCode" size="10"></td>
    </tr>
    <tr>
      <td>Product Name</td><br>
      <td><input type="text" name="productName" size="30"></td>
    </tr>
    <tr>
      <td>Product Line</td><br>
      <td>
        <select name="productLine">
          <option value="--Select Line--"></option>
          <?php
          include "conn.php";
          $query = mysqli_query($koneksi, "select * from productlines ");
          while ($data = mysqli_fetch_array($query)){
            echo "<option value=$data[productLine]> $data[productLine] </option>";
          }
          ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Product Scale</td><br>
      <td><input type="text" name="productScale" size="1"></td>
    </tr>
    <tr>
      <td>Product Vendor</td><br>
      <td><input type="text" name="productVendor" size="30"></td>
    </tr>
    <tr>
      <td>Product Description</td><br>
      <td><input type="text" name="productDescription" size="50"></td>
    </tr>
    <tr>
      <td>Quantity In Stock</td><br>
      <td><input type="text" name="quantityInStock" size="10"></td>
    </tr>
    <tr>
      <td>Buy Price</td><br>
      <td><input type="text" name="buyPrice" size="10"></td>
    </tr>
    <tr>
      <td>MSRP</td><br>
      <td><input type="text" name="MSRP" size="10"></td>
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

    $simpan = mysqli_query($koneksi, "insert into products set 
    productCode = '$_POST[productCode]',
    productName = '$_POST[productName]',
    productLine = '$_POST[productLine]',
    productScale = '$_POST[productScale]',
    productVendor = '$_POST[productVendor]',
    productDescription = '$_POST[productDescription]',
    quantityInStock= '$_POST[quantityInStock]',
    buyPrice = '$_POST[buyPrice]',
    MSRP = '$_POST[MSRP]'");
    
    if ($simpan){
      echo "<script> alert ('Data berhasil disimpan')</script>";
      header ("refresh:0;main1.php");
    }
    else{
      echo "<script> alert ('Data tidak berhasil disimpan')</script>";
      header ("refresh:0;main1.php");
    }

  }
  ?>
</body>
</html>