<?php

include __DIR__ . "/../../include.php";
include __DIR__ . "/../controller.php";

if (!isMethod("GET")) {
    setErrorResponse(400, 'Bad request !');
    return;
}
// GET http://localhost:8000/api/pokemon/5 => fetchById
// GET http://localhost:8000/src/API/pokemon/get_id?id=5 => fetchById

if (isset($_GET['id'])) {
    // Via PokemonRepository2 faire le fetchById
    $repository = new PokemonRepository2();
    $pokemon = $repository->fetchById($_GET['id']);
    setHeader();
    setJsonResponse($pokemon);
}


