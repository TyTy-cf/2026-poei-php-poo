<?php

include __DIR__ . "/../../include.php";
include __DIR__ . "/../controller.php";

// GET http://localhost:8000/api/pokemon => fetchAll
// GET http://localhost:8000/src/API/pokemon/get.php => fetchAll

if (!isMethod("GET")) {
    setErrorResponse(400, 'Bad request !');
    return;
}

// Via PokemonRepository2 faire le fetchAll
$repository = new PokemonRepository2();
$pokemons = $repository->fetchAll();

// Modifie l'entête http pout indiquer que l'on renvoie du json avec un status 200
setHeader();

// Serialiser en JSON les objets
setJsonResponse($pokemons);
