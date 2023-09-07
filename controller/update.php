<?php
    
    $servername = "mysql";
    $username = "root";
    $password = "123456";
    global $conn;
    
        try {
            $conn = new PDO("mysql:host=$servername;dbname=amir", $username, $password);
                        

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            

            $sql = "UPDATE car SET price='1234' WHERE id=2";
            
                $stmt = $conn->prepare($sql);
                $stmt->execute();
            
                    echo $stmt->rowCount() . " records UPDATED successfully";
            
                } catch(PDOException $e) {
            
                    echo $sql . "<br>" . $e->getMessage();

        }
      
       $conn = null;


?>
