<?php

// GET http://localhost:8000/api/pokemon/5 => fetchById
// GET http://localhost:8000/src/API/get_pokemon.php?id=5 => fetchById
include_once "../PokemonRepository.php";



$httpMethod = $_SERVER['REQUEST_METHOD'];

if ($httpMethod !== "GET") {
  header('Content-Type: application/json; charset=utf-8', false, 400);
  echo 'Bad request';
  return;
}

if (isset($_GET['id'])) {
  $repository = new PokemonRepository();
  $pokemon = $repository->fetchById($_GET['id']);

  // Modifie l'entête http pout indiquer que l'on renvoie du json avec un status 200
  header('Content-Type: application/json; charset=utf-8', false, 200);

  // Serialiser en JSON les objets
  echo json_encode($pokemon);
}

header('Content-Type: application/json; charset=utf-8', false, 400);
echo 'Bad request';
