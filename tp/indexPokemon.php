<?php

include __DIR__ . "/components/header.php";
include_once __DIR__ . "/PokemonEntity/PokemonRepository.php";

use POkemonEntity\PokemonRepository;

$repository= new PokemonRepository();

$repository->setPdo($pdo);

$pokemons = $repository->fetchAll();

var_dump($pokemons[0]);

pokemons[0]->getName();
?>


<?php
include __DIR__ . "/components/footer.php";
?>
