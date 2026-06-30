<?php

    include_once "../src/Utility/utility.php";
    include_once"../tp/Entity/Brands.php";
include_once"../tp/Entity/Categories.php";
include_once"../tp/Entity/Listings.php";
include_once"../tp/Entity/Models.php";
include_once"../tp/Entity/Sellers.php";


?>

<?php $brando = new Brands();
$brando->setId(1);
$brando->setLabel("Toyota");
$brando->setDescription("Super marque de tuture");
dump($brando); ?>

<?php $category = new Categories();
$category->setId(2);
$category->setLabel("4x4");
$category->setDescription("Super tuture");
dump($category); ?>

<?php $seller = new Sellers();
$seller->setId(3);
$seller->setFirstName("Stéphanie");
$seller->setLastName("De Monaco");
$seller->setEmail("stéphanie@demonaco.monaco");
$seller->setLocation("Monaco City");
$seller->setPhoneNumber("0 800 77 24 24");
dump($seller); ?>

<?php $model = new Models();
$model->setId(4);
$model->setLabel("Rav4");
$model->setDescription("Description d'un model de tuture");
$model->setBrand($brando);
$model->setCategory($category);
dump($model);
?>

<?php $listing = new Listings();
$listing->setId(5);
$listing->setSeller($seller);
$listing->setModel($model);
$listing->setTitle("Vends toyota rav4 pas cher");
$listing->setDescription("La toyota vraiment pas cher");
$listing->setProduceYear("2030");
$listing->setMileage(42690);
$listing->setPrice(8000.80);
$listing->setPublishAt(new DateTime());
dump($listing);
?>



<?php
$categoriee = new Categoriez();
$categoriee->setId(1);
$categoriee->setLabel("Lave-vitre");
$categoriee->setDescription("Ca lave les vitres en général");
?>

<?php
$produit = new Products();
$produit->setId(2);
$produit->setLabel("Lave-vitre 2000");
$produit->setDescription("Super lave-vitre bleu qui brille");
$produit-> setPrice(1.99);
$produit->setMarque("L'homme propre");
$produit->setCategoriee($categoriee);
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
