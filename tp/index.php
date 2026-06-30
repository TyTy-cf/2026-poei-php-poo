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
$seller->setPhoneNumber('+33123456789');

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
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"></script>
    <title>2026 POEI PHP POO</title>
</head>
<body>
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?= $listing->getTitle() ?></h5>
                <div class="row">
                    <div class="col"><p class="text-secondary">
                            <?= $listing->getModel()->getBrand()->getLabel() . " " . $listing->getModel()->getLabel() ?>
                             |
                            <?= $listing->getMileage() . "km" ?>
                             |
                            <span class="text-danger"><?= $listing->getPrice() . "€" ?></span>
                        </p>
                    </div>
                </div>
                <p class="card-text"><?= $listing->getDescription() ?></p>
                <div class="col"><p class="text-secondary"><?= $listing->getPublishAt()->format("d/m/y") ?></p></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
