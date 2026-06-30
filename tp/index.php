<?php

include_once "../src/Utility/utility.php";
include_once "./Entity/Brands.php";
include_once "./Entity/Categories.php";
include_once "./Entity/Sellers.php";
include_once "./Entity/Models.php";
include_once "./Entity/Listings.php";

$brand = new Brands();
$brand->setId(1);
$brand->setLabel("brands label");
$brand->setDescription("brands description");
dump($brand);

$categorie = new Categories();
$categorie->setId(1);
$categorie->setLabel("categories label");
$categorie->setDescription("categories description");
dump($categorie);

$seller = new Sellers();
$seller->setId(1);
$seller->setFirstName("sellers first name");
$seller->setLastName("sellers last name");
$seller->setEmail("sellers email");
$seller->setLocation("sellers location");
$seller->setPhoneNumber("sellers phone number");
dump($seller);

$model = new Models();
$model->setId(1);
$model->setBrand($brand);
$model->setCategory($categorie);
$model->setLabel("models label");
$model->setDescription("models description");
dump($model);

$listing = new Listings();
$listing->setId(1);
$listing->setSeller($seller);
$listing->setModel($model);
$listing->setTitle("listings title");
$listing->setDescription("listings description");
$listing->setProduceYear("listings produce year");
$listing->setMileage("111111");
$listing->setPrice("1111.11");
$listing->setPublishAt(new DateTime());
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
