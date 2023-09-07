<?php

 
 $servername = "mysql";
 $username = "root";
 $password = "123456";
 global $conn;
 $body = file_get_contents('php://input');
 $data = json_decode($body);
 global $data;
    try {
        $conn = new PDO("mysql:host=$servername;dbname=amir", $username, $password);
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "DELETE FROM car WHERE id = '$data->id'";
        
        $conn->exec($sql);
            echo "Record deleted successfully";
    
    }   catch(PDOException $e) {
  
            echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>