<?php 
include('conn.php');

$status = '';

if (isset($_POST["submit"])){

    $productCode = $_POST['productCode'];
    $productName = $_POST['productName'];
    $productLine = $_POST['productLine'];
    $productScale = $_POST['productScale'];
    $productVendor = $_POST['productVendor'];
    $productDescription = $_POST['productDescription'];
    $quantityInStock = $_POST['quantityInStock'];
    $buyPrice = $_POST['buyPrice'];
    $MSRP = $_POST['MSRP'];

    $sql = $conn->prepare("UPDATE product SET productName= :productName, productLine= :productLine, productScale=:productScale, productVendor= :productVendor, productDescription= :productDescription, quantityInStock= :quantityInStock, buyPrice= :buyPrice, MSRP= :MSRP, WHERE productCode=:productCode");
    $query->bindParam(':productCode',$productCode);
    $query->bindParam(':productName',$productName);
    $query->bindParam(':productLine',$productLine);
    $query->bindParam(':productScale',$productScale);
    $query->bindParam(':productVendor',$productVendor);
    $query->bindParam(':productDescription',$productDescription);
    $query->bindParam(':quantityInStock',$quantityInStock);
    $query->bindParam(':buyPrice',$buyPrice);
    $query->bindParam(':MSRP',$MSRP);


    if ($sql->execute()){
        $status = 'ok';
        header("refresh:0;customers.php");
    } else {
        $status = 'error';
    }
}
?>

<main role="main">
    <h2>Update Data Product</h2>
    <form action="update.php" method="POST">
    <div>
      <label>Product Code</label>
      <input type="text" name="productCode" value="<?php echo $data['productCode']; ?>" required="required">
    </div>
    <div>
      <label>Product Name</label>
      <input type="text" name="productName" value="<?php echo $data['productName']; ?>" required="required">
    </div>
    <div>
      <label>Product Line</label>
      <select name="productLine" required="required">
        <option value="">Pilih Salah Satu</option>
        <option value="Motorcycles" <?php echo $data['productLine']=='Motorcycles' ? "selected" : "" ?>>Motorcycles</option>
        <option value="Classic Cars" <?php echo $data['productLine']=='Classic Cars' ? "selected" : "" ?>>Classic Cars</option>
        <option value="Truks and Buses" <?php echo $data['productLine']=='Truks and Buses' ? "selected" : "" ?>>Truks and Buses</option>
        <option value="Vintage Cars" <?php echo $data['productLine']=='Vintage Cars' ? "selected" : "" ?>>Vintage Cars</option>
        <option value="Planes" <?php echo $data['productLine']=='Planes' ? "selected" : "" ?>>Planes</option>
        <option value="Ships" <?php echo $data['productLine']=='Ships' ? "selected" : "" ?>>Ships</option>
        <option value="Trains" <?php echo $data['productLine']=='Trains' ? "selected" : "" ?>>Trains</option>
      </select>
    </div>
    <div>
      <label>Product Scale</label>
      <input type="text" name="productScale" value="<?php echo $data['productScale']; ?>" required="required">
    </div>
    <div>
      <label>Product Vendor</label>
      <input type="text" name="productVendor" value="<?php echo $data['productVendor']; ?>" required="required">
    </div>
    <div>
      <label>Product Description</label>
      <textarea name="productDescription" required="required"><?php echo $data['productDescription']; ?></textarea>
    </div>
    <div>
      <label>Quantity In Stock</label>
      <input type="text" name="quantityInStock" value="<?php echo $data['quantityInStock']; ?>" required="required">
    </div>
    <div>
      <label>Buy Price</label>
      <input type="text" name="buyPrice" value="<?php echo $data['buyPrice']; ?>" required="required">
    </div>
    <div>
      <label>MSRP</label>
      <input type="text" name="MSRP" value="<?php echo $data['MSRP']; ?>" required="required">
    </div>
    <button type="submit">Simpan</button>
    </form>
</main>
</div>
</div>
</body>
</html>