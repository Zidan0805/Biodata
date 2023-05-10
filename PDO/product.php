<?php
include ('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data</title>
</head>
<body>
<?php 
    if (@$_GET['status']!==NULL) {
      $status = $_GET['status'];
      if ($status=='ok') {
        echo "Data Product berhasil diupdate";
      }
      elseif($status=='err'){
        echo "Data Product gagal diupdate";
      }
    }
?>

<table border = '1'>
    <thead>
      <tr>
        <th>Product Code</th>
        <th>Product Name</th>
        <th>Product Line</th>
        <th>Product Scale</th>
        <th>Product Vendor</th>
        <th>Product Description</th>
        <th>Quantity In Stock</th>
        <th>Buy Price</th>
        <th>MSRP</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $query = "SELECT * FROM products";
        $result = $conn->query($query);
       ?>
       <?php while($data = $result->fetch(PDO::FETCH_ASSOC) ): ?>
        <tr>
          <td><?php echo $data['productCode'];  ?></td>
          <td><?php echo $data['productName'];  ?></td>
          <td><?php echo $data['productLine'];  ?></td>
          <td><?php echo $data['productScale'];  ?></td>
          <td><?php echo $data['productVendor'];  ?></td>
          <td><?php echo $data['productDescription'];  ?></td>
          <td><?php echo $data['quantityInStock'];  ?></td>
          <td><?php echo $data['buyPrice'];  ?></td>
          <td><?php echo $data['MSRP'];  ?></td>
          <td>
            <a href="<?php echo "update.php?productCode=".$data['productCode']; ?>"> Update </a>
            <a href="<?php echo "delete.php?productCode=".$data['productCode']; ?>"> Delete</a>
          </td>
        </tr>
       <?php endwhile ?>
    </tbody>
</table>
</body>
</html>
