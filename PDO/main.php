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

    $sql = "INSERT INTO products (productCode, productName, productLine, productScale, productVendor, productDescription, quantityInStock, buyPrice, MSRP) VALUES (:productCode, :productName, :productLine, :productScale, :productVendor, :productDescription, :quantityInStock, :buyPrice, :MSRP)";
    $query = $conn->prepare($sql);

    $query->bindParam(':productCode',$productCode);
    $query->bindParam(':productName',$productName);
    $query->bindParam(':productLine',$productLine);
    $query->bindParam(':productScale',$productScale);
    $query->bindParam(':productVendor',$productVendor);
    $query->bindParam(':productDescription',$productDescription);
    $query->bindParam(':quantityInStock',$quantityInStock);
    $query->bindParam(':buyPrice',$buyPrice);
    $query->bindParam(':MSRP',$MSRP);

    if ($query->execute()){
        $status = 'ok';
        header("refresh:0;customers.php");
    } else {
        $status = 'error';
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="<?php echo "product.php"; ?>">Data Tabel Product</a>

    <main role="main">

    <h2>Tambah Data Product</h2>
    <form action="main.php" method="POST">
    <div >
        <label>Product Code</label>
        <input type="text" required="required">
    </div>
    <div >
        <label>Product Name</label>
        <input type="text"   required="required">
    </div>
    <div >
    <label>Product Line</label>
    <select 
     required="required">
        <option selected value="">Pilih Salah Satu</option>
        <option value="Motorcycles">Motorcycles</option>
        <option value="Classic Cars">Classic Cars</option>
        <option value="Truks and Buses">Truks and Buses</option>
        <option value="Vintage Cars">Vintage Cars</option>
        <option value="Planes">Planes</option>
        <option value="Ships">Ships</option>
        <option value="Trains">Trains</option>
    </select>
    </div>
    <div >
        <label>Product Scale</label>
        <input type="text"   required="required">
    </div>
    <div >
        <label>Product Vendor</label>
        <input type="text"   required="required">
    </div>
    <div >
        <label>Product Description</label>
        <textarea required="required"></textarea>
    </div>
    <div >
        <label>Quantity In Stock</label>
        <input type="text"   required="required">
    </div>
    <div >
        <label>Buy Price</label>
        <input type="text"   required="required">
    </div>
    <div >
        <label>MSRP</label>
        <input type="text"   required="required">
    </div>
    <button type="submit">Simpan</button>
    </form>
    </main>
    </div>
    </div>
</body>
</html>