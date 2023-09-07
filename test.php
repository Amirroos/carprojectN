<?php
global $data;
 $json = file_get_contents('php://input');
 $data = json_decode($json);
 echo $data->model;
 ?>




<!-- delete sadra code -->
$sql = "DELETE FROM car WHERE id = :id";
 
<!-- exec sadra code -->
$conn->exec(["id" => $data->id]);