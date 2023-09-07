<?php
class Car {
  private  $id;
  private  $brand;
  private  $model;
  private  $year;
  private  $price;
  
  function __construct($id, $brand, $model, $year, $price ) {
    $this->id = $id; 
    $this->brand = $brand;
    $this->model = $model;
    $this->year = $year;
    $this->price = $price; 
}
  function get_id() {
    return $this->id;
  }
  function get_brand() {
    return $this->brand;
  }
  function get_model() {
    return $this->model;
  }
  function get_year() {
    return $this->year;
  }
  function get_price() {
    return $this->price;
  }
}


?>