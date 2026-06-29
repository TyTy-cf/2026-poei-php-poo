<?php

    include_once "../src/Utility/utility.php";
    include_once"../tp/Entity/Brands.php";
include_once"../tp/Entity/Categories.php";
include_once"../tp/Entity/Listings.php";
include_once"../tp/Entity/Models.php";
include_once"../tp/Entity/Sellers.php";


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>2026 POEI PHP POO</title>
    </head>
    <body>
   <?php $brando = new Brands();
    $brando->setId(1);
    $brando->setLabel("Toyota");
    $brando->setDescription("Super marque de tuture");
    dump($brando); ?>

   <?php $category = new Categories();
   $category->setId(2);
   $category->setLabel("Rav4");
   $category->setDescription("Super tuture");
   dump($category); ?>



    </body>
</html>
