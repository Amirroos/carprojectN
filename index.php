<?php
 
    require_once 'controller/create.php';
    require_once 'model/car.php';


        try {
    
            // decode
            // how to get json data frome postman php
            $body = file_get_contents('php://input');
            $data = json_decode($body);
            global $data;
  
            // INSERT
            $sql = "INSERT INTO car (brand, model, year, price )
                VALUES ( '$data->brand' , '$data->model' , '$data->year' , '$data->price')";
    
                echo "test write to db";
  
            $conn->exec($sql);
                echo "New record created successfully";

        }   catch(PDOException $e) {
  
            echo $sql . "<br>" . $e->getMessage();

         }
    basecontroller::update();

?>