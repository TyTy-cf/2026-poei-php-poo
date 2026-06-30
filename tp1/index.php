<?php
include_once "../src/Utility/utility.php";
include_once "./Entity/Brands.php";
include_once "./Entity/Categories.php";
include_once "./Entity/Listings.php";
include_once "./Entity/Models.php";
include_once "./Entity/Sellers.php";
include_once "./Entity/Pokemon.php";

$swift = new Brands();
$swift->setId(1);
$swift->setLabel("Suzuki Swift");
$swift->setDescription("c'est une bonne voiture.");


$citadine = new Categories();
$citadine->setId(3);
$citadine->setLabel("Citadine");
$citadine->setDescription("ceci est une citadine");

$model = new Models();
$model->setId(1);
$model->setLabel("Swift 1.2");
$model->setBrand($swift);
$model->setCategory($citadine);

$brice = new Sellers();
$brice->setId(1);
$brice->setFirstname("Brice");
$brice->setLastname("véyan");
$brice->setPhoneNumber("06 12 34 56 78");
$brice->setLocation("Pardiey");
$brice->setEmail("brice@véyan.com");

$listing = new Listings();
$listing->setId(1);
$listing->setSeller($brice);
$listing->setModel($model);
$listing->setTitle("Swift 1.2");
$listing->setDescription("Swift 1.2, 2015, 120000 km, 8000€");
$listing->setProduceYear("2015");
$listing->setMileage(120000);
$listing->setPrice(8000);
$listing->setPublishAt(date("Y-m-d H:i:s"));


$bulbizarre = new Pokemon(
  1,
  69,
  7,
  64,
  45,
  49,
  49,
  65,
  65,
  45,
  "Bulbizarre",
  "bulbizarre",
  "1",
  "bulbasaur",
  true
);
dump($bulbizarre);


// dump($swift);
// dump($citadine);
// dump($model);
// dump($brice);
// dump($listing);

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
