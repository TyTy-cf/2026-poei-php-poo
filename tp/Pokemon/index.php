<?php

use Pokemon\Repository\PokemonRepository;

include_once __DIR__ . '/Repository/PokemonRepository.php';
include_once __DIR__ . "/../../src/Utility/utility.php";

$pokemonRep = new PokemonRepository();

dump($pokemonRep->fetchById(1));