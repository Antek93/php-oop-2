<?php

class Products {
    public $name;
    public $price;
    public $img = null;
    public $product_type;

    public function __construct($name, $price, $img, $product_type) {
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
        $this->product_type = $product_type;
    }
}

class Categories {
    public $cat;
    public $dog;
}

class Cat {
    public $category;
    public $size;
    public $hair_type;
    public $age;
}

class Dog {
    public $category;
    public $size;
    public $hair_type;
    public $age;

}

$cuccia_blu = new Products ('Cuccia Blu','37,99€', null, 'Cuccia');

var_dump($cuccia_blu);


