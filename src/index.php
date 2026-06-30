<?php

    include_once "./Utility/utility.php";
    include_once "./Entity/Brands.php";
    include_once "./Entity/Models.php";
    include_once "./Entity/Categories.php";
    include_once "./Entity/Listings.php";
    include_once "./Entity/Sellers.php";


    $brand = new Brands();
    $brand->setId(1);
    $brand->setLabel("Ford");
    $brand->setDescription("Ford, oui");

    $brand2 = new Brands();
    $brand2->setId(2);
    $brand2->setLabel("Opel");
    $brand2->setDescription("Opel, oui");

    $category = new Categories();
    $category->setId(1);
    $category->setLabel("Citadine");
    $category->setDescription("Citadine, oui");

    $model = new Models();
    $model->setId(1);
    $model->setBrand($brand);
    $model->setCategory($category);
    $model->setLabel("Fiesta");
    $model->setDescription("Fiesta, oui");

    $seller = new Sellers();
    $seller->setId(1);
    $seller->setFirstName("Toto");
    $seller->setLastName("Zero");
    $seller->setEmail("totolezero@yahoo.fr");
    $seller->setLocation("Lieu dit du Zero");
    $seller->setPhoneNumber("+33612457893");

    $listing = new Listings();
    $listing->setId(1);
    $listing->setTitle("Citadine Ford Fiesta, oui");
    $listing->setDescription("Citadine Ford Fiesta, oui");
    $listing->setProduceYear("2020");
    $listing->setMileage(123456);
    $listing->setPrice(4567.89);
    $listing->setPublishAt(new DateTime()); // Equivalent SQL : NOW()
    $listing->setModels($model);
    $listing->setSellers($seller);
    $listing->setPrice(4567.89);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>2026 POEI PHP POO</title>
    </head>
    <body>
        <h1><?= $listing->getTitle() ?></h1>
        <p>
            Parue le <?= dateFormat($listing->getPublishAt()) ?>, par <?= $listing->getSellers()->getFullName() ?>
        </p>
    </body>
</html>
