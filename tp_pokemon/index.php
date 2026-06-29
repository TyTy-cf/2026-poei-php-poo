<?php

    include_once "../src/Utility/utility.php";
    include "./Entity/Pokemons.php";


$pokemon = new Pokemons();
$pokemon->setId(1);
$pokemon->setWeight(49);
$pokemon->setHeight(154);
$pokemon->setBaseExperience(2512);
$pokemon->setHp(31);
$pokemon->setAtk(31);
$pokemon->setDef(31);
$pokemon->setSpatk(31);
$pokemon->setSpdef(31);
$pokemon->setSpd(31);
$pokemon->setSpe(31);
$pokemon->setName("Salamèche");
$pokemon->setSlug("salameche");
$pokemon->setIdApi(1);
$pokemon->setNameApi("Salamèche");

dump($pokemon);