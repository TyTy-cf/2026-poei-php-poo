<?php

use Pokemon\Repository\{PokemonRepository};

include_once __DIR__ . '/../Repository/PokemonRepository.php';
include_once __DIR__ . "/../../../src/Utility/utility.php";

// POST http://localhost:8000/api/pokemon => create
// POST http://localhost:8000/src/API/get_pokemon.php => create

$httpMethod = $_SERVER['REQUEST_METHOD'];

if ($httpMethod === "POST") {
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    $repository = new PokemonRepository();
    $pokemon = $repository->create($data);

    // Modifie l'entête http pout indiquer que l'on renvoie du json avec un status 200
    header('Content-Type: application/json; charset=utf-8', false, 200);

    // Serialiser en JSON les objets
    echo json_encode($pokemon);
} else {
    header('Content-Type: application/json; charset=utf-8', false, 400);
    echo 'Bad request';
    return;
}