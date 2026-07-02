<?php

include_once "../PokemonRepository.php";
include_once "../Pokemon.php";


// POST http://localhost:8000/api/pokemon => create
// POST http://localhost:8000/tp2/pokemon/API/post_pokemon.php => create

$data = json_decode(file_get_contents('php://input'), true);


// var_dump($data);

if (isset($data)) {
  $repository = new PokemonRepository();
  $pokemon = $repository->create($data);
  var_dump($pokemon);
}

// Renvoyer sous forme de JSON l'objet créé avec son ID
