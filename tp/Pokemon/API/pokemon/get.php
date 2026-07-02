<?php
use Pokemon\Repository\{PokemonRepository};

include_once __DIR__ . '/../../Repository/PokemonRepository.php';
include_once __DIR__ . "/../../../../src/Utility/utility.php";

// GET http://localhost:8000/api/pokemon => fetchAll
// GET http://localhost:8000/src/API/get_pokemon.php => fetchAll

$httpMethod = $_SERVER['REQUEST_METHOD'];

if ($httpMethod === "GET") {
    // Via PokemonRepository faire le fetchAll
    $repository = new PokemonRepository();
    $pokemons = $repository->fetchAll();

    // Modifie l'entête http pout indiquer que l'on renvoie du json avec un status 200
    header('Content-Type: application/json; charset=utf-8', false, 200);

    // Serialiser en JSON les objets
    echo json_encode($pokemons);
} else {
    header('Content-Type: application/json; charset=utf-8', false, 400);
    echo 'Bad request';
    return;
}
