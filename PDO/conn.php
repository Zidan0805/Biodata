<?php 
   $dbServer = 'localhost';
   $dbUser = 'root';
   $dbPass = 'zidan1234567';
   $dbName = "classicmodels";

   try {
      $conn = new PDO("mysql:host=$dbServer;dbname=$dbName", $dbUser, $dbPass);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
   catch(PDOException $err)
   {
      echo "Failed Connect to Database Server : " . $err->getMessage();
   }
