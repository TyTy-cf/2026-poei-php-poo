<?php

    include_once "./Utility/utility.php";
    include_once "./Entity/Brands.php";
    include_once "./Entity/Models.php";
    include_once "./Entity/Categories.php";
    include_once "./Entity/Listings.php";

    $brand = new Brands();
    $brand->setId(1);
    $brand->setLabel("Ford");
    $brand->setDescription("Ford, oui");

    $brand2 = new Brands();
    $brand2->setId(2);
    $brand2->setLabel("Opel");
    $brand2->setDescription("Opel, oui");

    $model = new Models();
    $model->setId(1);
    $model->setBrand($brand);
    $model->setLabel("Fiesta");
    $model->setDescription("Fiesta, oui");

    $category = new Categories();
    $category->setId(1);
    $category->setLabel("Citadine");
    $category->setDescription("Citadine, oui");

    $listing = new Listings();
    $listing->setId(1);
    $listing->setTitle("Citadine Ford Fiesta, oui");
    $listing->setDescription("Citadine Ford Fiesta, oui");
    $listing->setProduceYear("2020");
    $listing->setMileage(123456);
    $listing->setPrice(4567.89);
    $listing->setPublishAt(new DateTime()); // Equivalent SQL : NOW()
    dump($listing);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>2026 POEI PHP POO</title>
    </head>
    <body>
        <?= dateFormat($listing->getPublishAt()) ?>
    </body>
</html>
