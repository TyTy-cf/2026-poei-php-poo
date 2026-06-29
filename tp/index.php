<?php

require_once __DIR__ . "/Entity/Brands.php";
require_once __DIR__ . "/Entity/Categories.php";
require_once __DIR__ . "/Entity/Models.php";
require_once __DIR__ . "/Entity/Sellers.php";
require_once __DIR__ . "/Entity/Listing.php";

use Entity\Brands;
use Entity\Categories;
use Entity\Listings;
use Entity\Models;
use Entity\Sellers;

$brand = new Brands();
$brand->setId(1);
$brand->setLabel("Fordak");
$brand->setDescription("Constructeur automobile de fusée .");

$category = new Categories();
$category->setId(1);
$category->setLabel("Citadine");
$category->setDescription("Petite voiture pratique pour la ville.");

$model = new Models();
$model->setId(1);
$model->setBrand($brand);
$model->setCategory($category);
$model->setLabel("KaKarotttt");
$model->setDescription("compacte, economique et BALÈZE");

$seller = new Sellers();
$seller->setId(1);
$seller->setFirstName("Moi");
$seller->setLastName("Meme");
$seller->setLocation("Clermont-city-Gang");
$seller->setEmail("Ca_brille@example.com");
$seller->setPhoneNumber("06 12 34 56 78");

$listing = new Listings();
$listing->setId(1);
$listing->setSeller($seller);
$listing->setModel($model);
$listing->setTitle("Fordak karottttt 2.0.v3 - 5 000 000 000  EUR");
$listing->setDescription("Vehicule en mode fusée de l'espace qui tue ");
$listing->setProduceYear(2012);
$listing->setMileage(18000000000);
$listing->setPrice(5000);
$listing->setPublishAt(new DateTime());

?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>2026 POEI PHP POO</title>
	</head>
	<body>
		<article>
			<h1><?= htmlspecialchars($listing->getTitle()) ?></h1>

			<p><?= htmlspecialchars($listing->getDescription()) ?></p>

			<ul>
				<li>Marque : <?= htmlspecialchars($listing->getModel()->getBrand()->getLabel()) ?></li>
				<li>Modele : <?= htmlspecialchars($listing->getModel()->getLabel()) ?></li>
				<li>Categorie : <?= htmlspecialchars($listing->getModel()->getCategory()->getLabel()) ?></li>
				<li>Annee : <?= $listing->getProduceYear() ?></li>
				<li>Kilometrage : <?= number_format($listing->getMileage(), 0, ',', ' ') ?> km</li>
				<li>Prix : <?= number_format($listing->getPrice(), 0, ',', ' ') ?> EUR</li>
				<li>Publie le : <?= $listing->getPublishAt()->format('d/m/Y') ?></li>
			</ul>

			<h2>
				Vendeur qui vend -> <?= $listing->getSeller()->getFirstName() ?>
				, <?= htmlspecialchars($listing->getSeller()->getLastName()) ?><br>
			</h2>
			<p>
                <?= htmlspecialchars($listing->getSeller()->getLocation()) ?><br>
                <?= htmlspecialchars($listing->getSeller()->getEmail()) ?><br>
                <?= htmlspecialchars($listing->getSeller()->getPhoneNumber()) ?>
			</p>
		</article>
	</body>
</html>
