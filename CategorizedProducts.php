<?php

require_once __DIR__ .'./Categories.php';
require_once __DIR__ . './traits.php';

class Dog_bed extends Dog {
    public $bed_size;
    public $color;
    public $price;
    use Type;

    public function __construct($name, $img, $product_type, $category, $bed_size, $color, $price, $type)
    {
        parent::__construct($name, $img, $product_type, $category);
        $this->bed_size = $bed_size;
        $this->color = $color;
        $this->price = $price;
        $this->type = $type;
    }

}

class Dog_toy extends Dog {
    public $toy_size;
    public $color;
    public $price;
    public $fabric;
    use Type;

    public function __construct($name, $img, $product_type, $category, $toy_size, $color, $price, $fabric, $type)
    {

        parent::__construct($name, $img, $product_type, $category);

        $this->toy_size = $toy_size;
        $this->color = $color;
        $this->price = $price;
        $this->fabric = $fabric;
        $this->type = $type;

    }

    

}

class Dog_food extends Dog {
    public $food_quantity;
    public $food_quality;
    public $price;
    use Type;

    public function __construct($name, $img, $product_type, $category, $food_quantity, $food_quality, $price, $type)
    {

        parent::__construct($name, $img, $product_type, $category);

        $this->food_quantity = $food_quantity;
        $this->food_quality = $food_quality;
        $this->price = $price;
        $this->type = $type;

    }

}

class Cat_bed extends Cat {
    public $bed_size;
    public $color;
    public $price;
    use Type;

    public function __construct($name, $img, $product_type, $category, $bed_size, $color, $price, $type)
    {

        parent::__construct($name, $img, $product_type, $category);

        $this->bed_size = $bed_size;
        $this->color = $color;
        $this->price = $price;
        $this->type = $type;

    }

}

class Cat_toy extends Cat {
    public $toy_size;
    public $color;
    public $price;
    public $fabric;
    use Type;

    public function __construct($name, $img, $product_type, $category, $toy_size, $color, $price, $fabric, $type)
    {

        parent::__construct($name, $img, $product_type, $category);

        $this->toy_size = $toy_size;
        $this->color = $color;
        $this->price = $price;
        $this->fabric = $fabric;
        $this->type = $type;


    }

    

}

class Cat_food extends Cat {
    public $food_quantity;
    public $food_quality;
    public $price;
    use Type;

    public function __construct($name, $img, $product_type, $category, $food_quantity, $food_quality, $price, $type)
    {

        parent::__construct($name, $img, $product_type, $category);

        $this->food_quantity = $food_quantity;
        $this->food_quality = $food_quality;
        $this->price = $price;
        $this->type = $type;

    }

}