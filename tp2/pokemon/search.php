<?php
include __DIR__ . "/Pokemon.php";

include __DIR__ . "/PokemonRepository.php";



$id = $_GET["pokemon_id"];

$repository = new PokemonRepository();
$pokemon = $repository->fetchById($id);


header("location: show.php?pokemon_id=" . $pokemon->getId());
