<?php

include __DIR__ . "/../../include.php";

// POST http://localhost:8000/api/pokemon => create
// POST http://localhost:8000/src/API/get_pokemon.php => create

$httpMethod = $_SERVER['REQUEST_METHOD'];

if ($httpMethod !== "POST") {
    setHeader(400, 'Content-Type: application/json; charset=utf-8');
    echo 'Bad request';
    return;
}

$data = getBody();
$data = json_decode($data, true);

if ($data) {
    $pokemon = new PokemonRepository();
    $test = $pokemon->create($data);
}

setHeader(200, 'Content-Type: application/json; charset=utf-8');

setJsonResponse($test);