<?php

    include "include.php";

    $brand = new Brands();
    $brand->setId(1);
    $brand->setLabel("Test");
    $brand->setDescription("Bonjour");
    // dump($brand);

    $category = new Categories();
    $category->setId(1);
    $category->setLabel("Salut");
    $category->setDescription("On m'entend ?");
    // dump($category);

    $model = new Models();
    $model->setId(1);
    $model->setBrand($brand);
    $model->setCategory($category);
    $model->setLabel("Clio");
    $model->setDescription("Ça roule.. C'est bien non ?");
    // dump($model);

    $seller = new Sellers();
    $seller->setId(1);
    $seller->setFirstName("Emmanuel");
    $seller->setLastName("Macron");
    $seller->setEmail("emmanuel@macron.fr");
    $seller->setLocation("Élysée");
    $seller->setPhoneNumber("+333630");
    // dump($seller);

    $listing = new Listings();
    $listing->setId(1);
    $listing->setSeller($seller);
    $listing->setModel($model);
    $listing->setTitle("Vend Voiture qui fait Vroom");
    $listing->setDescription("1 cheval");
    $listing->setProduceYear("1912");
    $listing->setMileAge(101010);
    $listing->setPrice(6789,01);
    // dump($listing);

    $pokemon = new Pokemon();
    $pokemon->setId(1);
    $pokemon->setWeight(1);
    $pokemon->setHeight(1);
    $pokemon->setBaseExperience(1);
    $pokemon->setHp(1);
    $pokemon->setAtk(1);
    $pokemon->setDef(1);
    $pokemon->setSpa(1);
    $pokemon->setSpd(1);
    $pokemon->setSpe(99999999999);
    $pokemon->setName("Flash");
    $pokemon->setSlug("flash");
    $pokemon->setIdApi("1");
    $pokemon->setNameApi("Snorlax");
    $pokemon->setIsDefault(1);
    // dump($pokemon);

    $clothesCategory = new ClothesCategory();
    $clothesCategory->setId(1);
    $clothesCategory->setName("Pull");
    $clothesCategory->setDescription("Les pulls c'est génial même en été hein");
    $clothesCategory->setCreatedAt(new DateTime());
    $clothesCategory->setUpdatedAt(new DateTime());
    // dump($clothesCategory);

    $product = new Product();
    $product->setId(1);
    $product->setName("Pull laineux");
    $product->setPrice(5999);
    $product->setDescription("Ça tient chaud pas vrai ?");
    $product->setImgLink("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/showdown/shiny/6.gif");
    $product->setSize("XL");
    $product->setCreatedAt(new DateTime());
    $product->setUpdatedAt(new DateTime());
    $product->setCategory($clothesCategory);
    // dump($product);

    $repository = new PokemonRepository();
    // dump($repository->fetchAll());
    // dump($repository->fetchBy(0, 151));
    dump($repository->fetchById(483));

    $square = new Square(7.0);
    // dump($square->getArea());
    // dump($square);

    $rectangle = new Rectangle(7.0, 4.0);
    // dump($rectangle->getArea());
    // dump($rectangle);

    $circle = new Circle(5);
    // dump($circle->getArea());
    // dump($circle);

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
