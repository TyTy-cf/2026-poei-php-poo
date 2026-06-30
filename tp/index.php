<?php

include_once "../src/Utility/utility.php";

use CentraleIsh\{Brands,
        Categories,
        Listings,
        Models,
        Sellers};

use Vente\{Category, Product, Characteristic};

include_once "Entity/CentraleIsh/Brands.php";
include_once "Entity/CentraleIsh/Categories.php";
include_once "Entity/CentraleIsh/Sellers.php";
include_once "Entity/CentraleIsh/Models.php";
include_once "Entity/CentraleIsh/Listings.php";
include_once "Entity/Vente/Product.php";
include_once "Entity/Vente/Category.php";
include_once "Entity/Vente/Characteristic.php";

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

// ======================
// Categories
// ======================

$electronics = new Category();
$electronics->setLabel("Electronics");
$electronics->setDescription("Electronic devices");
$electronics->setImageUrl("electronics.jpg");
$electronics->setCreatedAt(new DateTime());
$electronics->setIsActive(true);

$computers = new Category();
$computers->setLabel("Computers");
$computers->setDescription("Desktop and laptop computers");
$computers->setImageUrl("computers.jpg");
$computers->setCreatedAt(new DateTime());
$computers->setIsActive(true);
$computers->setParent($electronics);

$laptops = new Category();
$laptops->setLabel("Laptops");
$laptops->setDescription("Portable computers");
$laptops->setImageUrl("laptops.jpg");
$laptops->setCreatedAt(new DateTime());
$laptops->setIsActive(true);
$laptops->setParent($computers);

$phones = new Category();
$phones->setLabel("Smartphones");
$phones->setDescription("Mobile phones");
$phones->setImageUrl("phones.jpg");
$phones->setCreatedAt(new DateTime());
$phones->setIsActive(true);
$phones->setParent($electronics);

$gaming = new Category();
$gaming->setLabel("Gaming");
$gaming->setDescription("Gaming equipment");
$gaming->setImageUrl("gaming.jpg");
$gaming->setCreatedAt(new DateTime());
$gaming->setIsActive(true);

// ======================
// Product 1
// ======================

$macbook = new Product();
$macbook->setLabel("MacBook Air M3");
$macbook->setBrand("Apple");
$macbook->setCreatedAt(new DateTime());
$macbook->setPrice(129900);
$macbook->setSale(5);
$macbook->setImageURl("macbook.jpg");
$macbook->setEanCode("1234567890123");
$macbook->setIsActive(true);
$macbook->addCategory($laptops);

$char = new Characteristic();
$char->setLabel("Processor");
$char->setValue("Apple M3");
$char->setProduct($macbook);

$char = new Characteristic();
$char->setLabel("RAM");
$char->setValue("16 GB");
$char->setProduct($macbook);

$char = new Characteristic();
$char->setLabel("Storage");
$char->setValue("512 GB SSD");
$char->setProduct($macbook);

// ======================
// Product 2
// ======================

$dell = new Product();
$dell->setLabel("Dell XPS 15");
$dell->setBrand("Dell");
$dell->setCreatedAt(new DateTime());
$dell->setPrice(189900);
$dell->setSale(10);
$dell->setImageURl("xps15.jpg");
$dell->setEanCode("2234567890123");
$dell->setIsActive(true);
$dell->addCategory($laptops);

$char = new Characteristic();
$char->setLabel("Processor");
$char->setValue("Intel Core Ultra 7");
$char->setProduct($dell);

$char = new Characteristic();
$char->setLabel("RAM");
$char->setValue("32 GB");
$char->setProduct($dell);

$char = new Characteristic();
$char->setLabel("Storage");
$char->setValue("1 TB SSD");
$char->setProduct($dell);

// ======================
// Product 3
// ======================

$iphone = new Product();
$iphone->setLabel("iPhone 16");
$iphone->setBrand("Apple");
$iphone->setCreatedAt(new DateTime());
$iphone->setPrice(99900);
$iphone->setSale(0);
$iphone->setImageURl("iphone16.jpg");
$iphone->setEanCode("3234567890123");
$iphone->setIsActive(true);
$iphone->addCategory($phones);

$char = new Characteristic();
$char->setLabel("Display");
$char->setValue("6.1 inch OLED");
$char->setProduct($iphone);

$char = new Characteristic();
$char->setLabel("Storage");
$char->setValue("256 GB");
$char->setProduct($iphone);

$char = new Characteristic();
$char->setLabel("Camera");
$char->setValue("48 MP");
$char->setProduct($iphone);

// ======================
// Product 4
// ======================

$ps5 = new Product();
$ps5->setLabel("PlayStation 5 Slim");
$ps5->setBrand("Sony");
$ps5->setCreatedAt(new DateTime());
$ps5->setPrice(54900);
$ps5->setSale(15);
$ps5->setImageURl("ps5.jpg");
$ps5->setEanCode("4234567890123");
$ps5->setIsActive(true);
$ps5->addCategory($gaming);

$char = new Characteristic();
$char->setLabel("Storage");
$char->setValue("1 TB SSD");
$char->setProduct($ps5);

$char = new Characteristic();
$char->setLabel("Resolution");
$char->setValue("4K");
$char->setProduct($ps5);

// ======================
// Product 5
// ======================

$switch = new Product();
$switch->setLabel("Nintendo Switch OLED");
$switch->setBrand("Nintendo");
$switch->setCreatedAt(new DateTime());
$switch->setPrice(34900);
$switch->setSale(8);
$switch->setImageURl("switch.jpg");
$switch->setEanCode("5234567890123");
$switch->setIsActive(true);
$switch->addCategory($gaming);

$char = new Characteristic();
$char->setLabel("Display");
$char->setValue("7 inch OLED");
$char->setProduct($switch);

$char = new Characteristic();
$char->setLabel("Storage");
$char->setValue("64 GB");
$char->setProduct($switch);

// ======================
// Collections
// ======================

$categories = [
    $electronics,
    $computers,
    $laptops,
    $phones,
    $gaming,
];

$products = [
    $macbook,
    $dell,
    $iphone,
    $ps5,
    $switch,
];

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
<!--<div class="row">-->
<!--    <div class="col-4">-->
<!--        <div class="card">-->
<!--            <div class="card-body">-->
<!--                <h5 class="card-title">--><?php //= $listing->getTitle() ?><!--</h5>-->
<!--                <div class="row">-->
<!--                    <div class="col"><p class="text-secondary">-->
<!--                            --><?php //= $listing->getModel()->getBrand()->getLabel() . " " . $listing->getModel()->getLabel() ?>
<!--                             |-->
<!--                            --><?php //= $listing->getMileage() . "km" ?>
<!--                             |-->
<!--                            <span class="text-danger">--><?php //= $listing->getPrice() . "€" ?><!--</span>-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <p class="card-text">--><?php //= $listing->getDescription() ?><!--</p>-->
<!--                <div class="col"><p class="text-secondary">--><?php //= $listing->getPublishAt()->format("d/m/y") ?><!--</p></div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<?php foreach ($products as $product): ?>
<?php dump($product); ?>
<?php endforeach; ?>
</body>
</html>
