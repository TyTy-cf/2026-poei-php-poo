<?php

include_once "../src/Utility/utility.php";
include_once "../tp/Entity/Brands-ex.php";
include_once "../tp/Entity/Categories.php";
include_once "../tp/Entity/Models.php";
include_once "../tp/Entity/Sellers.php";
include_once "../tp/Entity/Listings.php";
include_once "../tp/Entity/Product.php";
include_once "../tp/Entity/Cate.php";




$brand = new Brands();
$brand->setId(1);
$brand->setLabel("Ford");
$brand->setDescription("Id asperiores quos laboriosam fugit expedita dolor...");
//dump($brand);

$category = new Categories();
$category->setId(1);
$category->setLabel("4x4");
$category->setDescription("");
//dump($category);

$model = new Models();
$model->setId(1);
$model->setBrand($brand);
$model->setCategory($category);
$model->setLabel("A1");
$model->setDescription("Odit possimus ducimus nam non voluptatem. Et beata...");
//dump($model);

$seller = new Sellers();
$seller->setId(1);
$seller->setFirstName("Laverne");
$seller->setLastName("Gerhold");
$seller->setEmail("eos@feest.com");
$seller->setLocation("");
$seller->setPhoneNumber("913.393.0341");
//dump($seller);

$listing = new Listings();
$listing->setId(1);
$listing->setSeller($seller);
$listing->setModel($model);
$listing->setTitle("Vend Renault Twizy 842870.96 €");
$listing->setDescription("");
$listing->setMileage(15455);
$listing->setPrice(842870.96);
$listing->setProduceYear(2016);
$listing->setPublishAt(new DateTime(2012-02-10));
//dump($listing);

$cate = new Cate();
$cate->setId(1);
$cate->setDescription('Tant de style dans un format si compact Le format ultra fin et compact par excellence qui vient se glisser dans tous les sacs. Décliné dans un éventail de couleurs à tomber.');
$cate->setLabel('Samsung Galaxy S26');
dump($cate);

$product = new Product();
$product->setBrand("Samsung");
$product->setModel("Galaxy S26");
$product->setColor('Black');
$product->setPrice(802);
$product->setIsInStock(true);
$product->setCapacity(256);
$product->setCate($cate);
dump($product);

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
