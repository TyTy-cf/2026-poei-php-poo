<?php

include __DIR__ . "/../include.php";

$httpMethod = $_SERVER['REQUEST_METHOD'];

if ($httpMethod !== "GET") {
    header('Content-Type: application/json; charset=utf-8', false, 400);
    echo 'Bad request';
    return;
}

// GET http://localhost:8000/api/pokemon/5 => fetchById
// GET http://localhost:8000/src/API/get_pokemon.php?id=5 => fetchById

header('Content-Type: application/json; charset=utf-8', false, 200);

if (isset($_GET['id'])) {
    // Via PokemonRepository faire le fetchById
    $repository = new PokemonRepository();
    $pokemon = $repository->fetchById($_GET['id']);
    echo json_encode($pokemon);
}


// Serialiser en JSON les objets
// Les "renvoyer ?"