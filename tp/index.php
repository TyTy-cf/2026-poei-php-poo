<?php

include_once "../src/Utility/utility.php";

use Entity\{Brands, Categories, Sellers, Models, Listings};

include "Entity/Brands.php";
include "Entity/Categories.php";
include "Entity/Sellers.php";
include "Entity/Models.php";
include "Entity/Listings.php";

$dacia = new Brands();
$dacia->setId(1);
$dacia->setLabel('Dacia');
$dacia->setDescription('Sous marque de Renault, toussa');

$berline = new Categories();
$berline->setId(3);
$berline->setLabel('Berline');
$berline->setDescription('C\'est une berline');

$seller = new Sellers();
$seller->setId(1);
$seller->setFirstName('Yvo');
$seller->setLastName('Toso');
$seller->setEmail('yvo@toso.pro');
$seller->setLocation('Somwhere in France');
$seller->setPhoneNumber('0123456789');

$model = new Models();
$model->setId(1);
$model->setLabel('Logan');
$model->setBrand($dacia);
$model->setCategory($berline);
$model->setDescription('C\'est une Dacia Logan, gran coffre toussa');

$listing = new Listings();
$listing->setId(1);
$listing->setSeller($seller);
$listing->setModel($model);
$listing->setTitle('Dacia logan bon état, tkt');
$listing->setDescription('Ma dacia logan, pas vieille pas usée, elle est belle, donnez l\'argent svp');
$listing->setProduceYear('2024');
$listing->setMileage(12500);
$listing->setPrice(1.25);
try {
    $listing->setPublishAt(new DateTime('now'));
} catch (Exception $e) {

}

dump($dacia);
dump($berline);
dump($seller);
dump($model);
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
