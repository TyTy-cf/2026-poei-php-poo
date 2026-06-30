<?php
include __DIR__ . "/PokemonRepository.php";
include __DIR__ . "/Pokemon.php";

$id = $_GET["pokemon_id"];

$repository = new PokemonRepository();
$repository->deleteById($id);



header("location: index.php");
