<?php

require_once __DIR__ . './Products.php';


class Dog extends Products
{
    public $category = 'dog';


    public function __construct($name, $img, $product_type, $category)
    {
       
        parent::__construct($name, $img, $product_type);
        
        $this->category = $category;
       
    }
}

class Cat extends Products
{
    public $category = 'cat';


    public function __construct($name, $img, $product_type, $category)
    {
    
        parent::__construct($name, $img, $product_type);

        $this->category = $category;
    }
}

?>