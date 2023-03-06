<?php
require_once __DIR__ .'./CategorizedProducts.php';

// -- --CUCCE:

//--CANI                      $name, $img, $product_type, $category, $bed_size, $color, $price)
$black_dog_bed = new Dog_bed('Cuccia Nera', null, 'Beds', 'Dog', 'XXL', 'Black', 37.99);
$red_dog_bed = new Dog_bed('Cuccia Rossa', null, 'Beds', 'Dog', 'XL', 'Red', 37.99);
$white_dog_bed = new Dog_bed('Cuccia Bianca', null, 'Beds', 'Dog', 'L', 'White', 37.99);
//--GATTI                    $name, $img, $product_type, $category, $bed_size, $color, $price)
$black_cat_bed = new Cat_bed('Cuccia Nera', null, 'Beds', 'Cat', 'L', 'Black', 37.99);
$red_cat_bed = new Cat_bed('Cuccia Rossa', null, 'Beds', 'Cat', 'M', 'Red', 37.99);
$white_cat_bed = new Cat_bed('Cuccia Bianca', null, 'Beds', 'Cat', 'S', 'White', 37.99);

// -- --TOYS:

//--CANI                      $name, $img, $product_type, $category, $toy_size, $color, $price
$bone_dog_toy = new Dog_toy('Osso di plastica', null, 'Toys', 'Dog', 'S', 'White', 13.99, 'Plastic');
$star_dog_toy = new Dog_toy('Stella di plastica', null, 'Toys', 'Dog', 'S', 'Red', 13.99, 'Plastic');
$chicken_dog_toy = new Dog_toy('Pollo di gomma', null, 'Toys', 'Dog', 'S', 'Yellow', 13.99, 'Rubber');
//--GATTI                     $name, $img, $product_type, $category, $toy_size, $color, $price
$mouse_cat_toy = new Cat_toy('Topolino da acchiappare', null, 'Toys', 'Cat', 'S', 'Black', 3.99, 'cotton');
$bird_cat_toy = new Cat_toy('Uccellino da acchiappare', null, 'Toys', 'Cat', 'M', 'Red', 5.99, 'plastic');
$chicken_cat_toy = new Cat_toy('Pollo da acchiappare', null, 'Toys', 'Cat', 'S', 'White', 8.99, 'plastic');

// -- --FOOD:
 
//--CANI                     $name, $img, $product_type, $category, $food_quantity, $food_quality, $color, $price         
$standard_dog_food = new Dog_food('Croccantini standard', null, 'Food', 'Dog', '10kg', 'Standard', 17.99);
$quality_dog_food = new Dog_food('Croccantini di qualità', null, 'Food', 'Dog', '10kg', 'Quality', 23.99);
$noGluten_dog_food = new Dog_food('Croccantini senza glutine', null, 'Food', 'Dog', '10kg', 'Gluten Free', 43.99);
//--GATTI                     $name, $img, $product_type, $category, $food_quantity, $food_quality, $color, $price
$standard_cat_food = new Cat_food('Croccantini standard', null, 'Food', 'Cat', '10kg', 'Standard', 17.99);
$quality_cat_food = new Cat_food('Croccantini di qualità', null, 'Food', 'Cat', '10kg', 'Quality', 23.99);
$noGluten_cat_food = new Cat_food('Croccantini senza glutine', null, 'Food', 'Cat', '10kg', 'Gluten Free', 43.99);

?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
</head>

<body>

    <head></head>
    <main>
        <div>
           
        </div>
    </main>

</body>

</html>