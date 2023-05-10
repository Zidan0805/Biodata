<?php 

  include ('conn.php'); 

  $status = '';
  $result = '';
  
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['productCode'])) {
          
          $product_upd = $_GET['productCode'];
          $query = $conn->prepare("DELETE FROM products WHERE productCode = :productCode ");
          
          $query->bindParam(':productCode',$product_upd);
          
          if ($query->execute()) {
            $status = 'ok';
          }
          else{
            $status = 'err';
          }
          
          header('Location: product.php?status='.$status);
      }  
  }