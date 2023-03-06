<?php

class Products {
    public $name;
    public $img = null;
    public $product_type;

    public function __construct($name, $img, $product_type) {
        $this->name = $name;
        $this->img = $img;
        $this->product_type = $product_type;
    }

    
}

