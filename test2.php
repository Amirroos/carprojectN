<?php
$servername = "mysql";
$username = "root";
$password = "123456";
global $conn;
    
    class basecontroller{
        $conn = new PDO("mysql:host=$servername;dbname=amir", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// *******************************************************************************************************************DELETE    
            public static function delete($delete){
                global $data;
                try {
                    $sql = "DELETE FROM car WHERE id = $data->id";
                    $conn->exec($sql);
                    
                        echo "Record deleted successfully";
               
                    }   catch(PDOException $e) {  
                    
                        echo $sql . "<br>" . $e->getMessage();    
                    }        
            }
// *********************************************************************************************************************FINISH DELETE    
// *********************************************************************************************************************update
            public static function update(){
                global $data; 
                try {
                    $sql = "UPDATE car SET brand = $data->brand , model = $data->model , year = $data->year , price = $data->price WHERE id = $data->id";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
        
                    echo $stmt->rowCount() . " records UPDATED successfully";
        
                }   catch(PDOException $e) {
        
                    echo $sql . "<br>" . $e->getMessage();

                }
            }
// *********************************************************************************************************************FINISH update
}

    if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
        echo "test";
        // $delete= $_DELETE["delete"];
    
        
        // if (!empty($delete)) {
        //     $message = delete($delete);
          
        //       echo "$message";
        
        // } 
    }    
      