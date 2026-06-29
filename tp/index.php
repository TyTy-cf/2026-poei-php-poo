<?php

    include_once "../src/Utility/utility.php";
    include "./Entity/Brands.php";
    include "./Entity/Categories.php";
    include "./Entity/Listings.php";
    include "./Entity/Models.php";
    include "./Entity/Sellers.php";


$brand = new Brands();
$brand->setId(1);
$brand->setLabel("Ford");
$brand->setDescription("depuis longtemps on fait des voitures");
//dump($brand);


$category = new Categories();
$category->setId(1);
$category->setLabel("électrique");
$category->setDescription("elle fait vroum sans trop de bruit");
//dump($category);


$seller = new Sellers();
$seller->setId(1);
$seller->setFirstName("John");
$seller->setLastName("Doe");
$seller->setEmail("JohnDoe@gmail.com");
$seller->setLocation("Paris");
$seller->setPhoneNumber("0607080910");
//dump($seller);


$model = new Models();
$model->setId(1);
$model->setBrand($brand);
$model->setCategory($category);
$model->setLabel("42");
$model->setDescription("elle fait vroum plus vite que la dernière");
//dump($model);


$listing = new Listings();
$listing->setId(1);
$listing->setSeller($seller);
$listing->setModel($model);
$listing->setTitle("Ford");
$listing->setDescription("Cette superbe Ford fait vroum vite et sans trop de bruit");
$listing->setProduce_year(2017);
$listing->setMileage(111073);
$listing->setPrice(9999.99);
$listing->setPublish_at(new Datetime());
dump($listing);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>2026 POEI PHP POO</title>
    </head>
    <body>

    </body>
</html>
