<?php

    include_once "../src/Utility/utility.php";
    include_once "./Entity/Brands.php";
    include_once "./Entity/Categories.php";
    include_once "./Entity/Listings.php";
    include_once "./Entity/Models.php";
    include_once "./Entity/Sellers.php";

    $brand = new Brands();
    $brand->setId(1);
    $brand->setLabel("Test");
    $brand->setDescription("Bonjour");
    dump($brand);

    $category = new Categories();
    $category->setId(1);
    $category->setLabel("Salut");
    $category->setDescription("On m'entend ?");
    dump($category);

    $model = new Models();
    $model->setId(1);
    $model->setBrand($brand);
    $model->setCategory($category);
    $model->setLabel("Clio");
    $model->setDescription("Ça roule.. C'est bien non ?");
    dump($model);

    $seller = new Sellers();
    $seller->setId(1);
    $seller->setFirstName("Emmanuel");
    $seller->setLastName("Macron");
    $seller->setEmail("emmanuel@macron.fr");
    $seller->setLocation("Élysée");
    $seller->setPhoneNumber("+333630");
    dump($seller);

    $listing = new Listings();
    $listing->setId(1);
    $listing->setSeller($seller);
    $listing->setModel($model);
    $listing->setTitle("Vend Voiture qui fait Vroom");
    $listing->setDescription("1 cheval");
    $listing->setProduceYear("1912");
    $listing->setMileAge("101010");
    $listing->setPrice(6789,01);
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
