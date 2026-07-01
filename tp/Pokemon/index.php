<?php

use Pokemon\Repository\PokemonRepository;

include_once __DIR__ . '/Repository/PokemonRepository.php';
include_once __DIR__ . "/../../src/Utility/utility.php";

$pokemonRep = new PokemonRepository();

$pokemonRep->updateBy(1118, ['hp' => 69, 'spe' => 67]);

dump($pokemon = $pokemonRep->fetchBy(['weight' => 69, 'height' => 7], 151));

//$pokemon->setName("Yvo");
//$pokemon->setAtk(100000000);
//
//$pokemonRep->add($pokemon);