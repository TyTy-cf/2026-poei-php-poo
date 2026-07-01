<?php

use Pokemon\Repository\PokemonRepository;

include_once __DIR__ . '/Repository/PokemonRepository.php';
include_once __DIR__ . "/../../src/Utility/utility.php";

$pokemonRep = new PokemonRepository();

dump($pokemon = $pokemonRep->fetchBy(0, 151));

//$pokemon->setName("Yvo");
//$pokemon->setAtk(100000000);
//
//$pokemonRep->add($pokemon);