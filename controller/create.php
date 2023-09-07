<?php

 
 $servername = "mysql";
 $username = "root";
 $password = "123456";
 global $conn;
   try {
       

      $conn = new PDO("mysql:host=$servername;dbname=amir", $username, $password);
      
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
  
    }    catch(PDOException $e) {
    
     echo "Connection failed: " . $e->getMessage();

    }
    

?>
