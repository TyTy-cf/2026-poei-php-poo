<?php

include __DIR__ . "/../include.php";

// GET http://localhost:8000/api/pokemon/5 => fetchById
// GET http://localhost:8000/src/API/get_pokemon.php?id=5 => fetchById

if (!isMethod('GET')) {
    setErrorResponse(400, "Bad Request");
    return;
}

if (isset($_GET['id'])) {
    // Via PokemonRepository faire le fetchById
    $repository = new PokemonRepository();
    $pokemon = $repository->fetchById($_GET['id']);
}

setHeader(200, 'Content-Type: application/json; charset=utf-8');

setJsonResponse($pokemon);