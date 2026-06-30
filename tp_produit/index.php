<?php

include_once "../src/Utility/utility.php";
include "./Entity/Categories.php";
include "./Entity/Products.php";


$category = new Categories();
$category->setId(1);
$category->setLabel("Produit laitier");
$category->setDescription("je sais pas");

$product = new Products();
$product->setId(1);
$product->setLabel("Saint-nectaire");
$product->setDescription("Produit bio de nos fermes de la région. 3KG");
$product->setCategory($category);
$product->setPrice(15.73);
$product->setPublishAt(new DateTime());