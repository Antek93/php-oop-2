<?php
require_once __DIR__ . './CategorizedProducts.php';

$prodotti = [];

// -- --CUCCE:

//--CANI                      $name, $img, $product_type, $category, $bed_size, $color, $price)
$black_dog_bed = new Dog_bed('Cuccia Nera', './img/cuccia1.webp', 'Beds', 'Dog', 'XXL', 'Black', 37.99);
$red_dog_bed = new Dog_bed('Cuccia Rossa', './img/cuccia3.webp', 'Beds', 'Dog', 'XL', 'Red', 37.99);
$white_dog_bed = new Dog_bed('Cuccia Bianca', './img/cuccia2.webp', 'Beds', 'Dog', 'L', 'White', 37.99);
//--GATTI                    $name, $img, $product_type, $category, $bed_size, $color, $price)
$black_cat_bed = new Cat_bed('Cuccia Nera', './img/catbed1.webp', 'Beds', 'Cat', 'L', 'Black', 37.99);
$red_cat_bed = new Cat_bed('Cuccia Rossa', './img/catbed2.webp', 'Beds', 'Cat', 'M', 'Red', 37.99);
$white_cat_bed = new Cat_bed('Cuccia Bianca', './img/catbed3.webp', 'Beds', 'Cat', 'S', 'White', 37.99);

// -- --TOYS:

//--CANI                      $name, $img, $product_type, $category, $toy_size, $color, $price
$bone_dog_toy = new Dog_toy('Osso di plastica', './img/dogbone.webp', 'Toys', 'Dog', 'S', 'Black', 13.99, 'Plastic');
$star_dog_toy = new Dog_toy('Stella di plastica', './img/toydogstar.webp', 'Toys', 'Dog', 'S', 'Red', 13.99, 'Plastic');
$chicken_dog_toy = new Dog_toy('Pollo di gomma', './img/dogchicketoy.jpg', 'Toys', 'Dog', 'S', 'Yellow', 13.99, 'Rubber');
//--GATTI                     $name, $img, $product_type, $category, $toy_size, $color, $price
$mouse_cat_toy = new Cat_toy('Topolino da acchiappare', './img/cattoy1.jpg', 'Toys', 'Cat', 'S', 'Black', 3.99, 'cotton');
$bird_cat_toy = new Cat_toy('Uccellino da acchiappare', './img/birdtoy4.webp', 'Toys', 'Cat', 'M', 'Red', 5.99, 'plastic');
$chicken_cat_toy = new Cat_toy('Pollo da acchiappare', './img/chicken toy.jpg', 'Toys', 'Cat', 'S', 'White', 8.99, 'plastic');

// -- --FOOD:

//--CANI                     $name, $img, $product_type, $category, $food_quantity, $food_quality, $color, $price         
$standard_dog_food = new Dog_food('Croccantini standard', './img/dogfood1.webp', 'Food', 'Dog', '10kg', 'Standard', 17.99);
$quality_dog_food = new Dog_food('Croccantini di qualità', './img/dogfood2.webp', 'Food', 'Dog', '10kg', 'Quality', 23.99);
$noGluten_dog_food = new Dog_food('Croccantini senza glutine', './img/dogfood7.webp', 'Food', 'Dog', '10kg', 'Gluten Free', 43.99);
//--GATTI                     $name, $img, $product_type, $category, $food_quantity, $food_quality, $color, $price
$standard_cat_food = new Cat_food('Croccantini standard', './img/catfood1.webp.crdownload', 'Food', 'Cat', '10kg', 'Standard', 17.99);
$quality_cat_food = new Cat_food('Croccantini di qualità', './img/catfood2.png', 'Food', 'Cat', '10kg', 'Quality', 23.99);
$noGluten_cat_food = new Cat_food('Croccantini senza glutine', './img/catfood6.jpg', 'Food', 'Cat', '10kg', 'Gluten Free', 43.99);

$prodotti[] = [
    $black_dog_bed,
    $red_dog_bed,
    $white_dog_bed,
    $black_cat_bed,
    $red_cat_bed,
    $white_cat_bed,
    $bone_dog_toy,
    $star_dog_toy,
    $chicken_dog_toy,
    $mouse_cat_toy,
    $bird_cat_toy,
    $chicken_cat_toy,
    $standard_dog_food,
    $quality_dog_food,
    $noGluten_dog_food,
    $standard_cat_food,
    $quality_cat_food,
    $noGluten_cat_food
];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <head>

    </head>
    <main>
        <div class="main-container">
            <div class="products-container">
                <?php foreach ($prodotti as $categoria) { ?>
                    <?php foreach ($categoria as $prodotto) { ?>
                        <div>
                            <div class="img-container">
                                <img src="<?= $prodotto->img ?>" alt="<?= $prodotto->name ?>">
                            </div>
                            <div>
                                <h4><?= $prodotto->name ?></h4>
                                <p><?= $prodotto->price ?> &euro;</p>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>

            </div>
        </div>
    </main>

</body>

</html>