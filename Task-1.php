<?php

class Product{
    private $id;
    private $name;
    private $price;
    private $description;
    private $quantity;
    private $category;

    public function __construct($id,$name,$price,$description,$quantity,$category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->quantity = $quantity;
        $this->category = $category;
    }
}

interface ProductInterface{
    public function getInfo();
    public function updatePrice($newPrice);
    public function updateQuantity($newQuantity);
}

abstract class AbstractProduct extends Product implements ProductInterface{
    public function __construct($id,$name,$price,$description,$quantity,$category)
    {
        parent::__construct($id,$name,$price,$description,$quantity,$category);
    }

    public function getInfo() {
        
    }

    public function updatePrice($newPrice) {
        
    }

    public function updateQuantity($newQuantity) {
        
    }

}

class DigitalProduct extends AbstractProduct{
    public function format(){

    }

    public function getInfo(){

    }
}

class PhysicalProduct extends AbstractProduct{
    public function weight(){

    }

    public function getInfo(){

    }
}

class Chart{
    private $product;
    public static  function addProduct($product){

    }

    public static  function removeProduct($product){

    }

    public static function getTotal(){

    }


}

trait Discount{
    public static $discountPercintage=0;
    public static function applyDiscount(){

    }
}

?>