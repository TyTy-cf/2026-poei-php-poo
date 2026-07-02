<?php

include __DIR__ . "/../../include.php";
include __DIR__ . "/../controller.php";

if (!isMethod("POST")) {
    setErrorResponse(400, 'Bad request !');
    return;
}
// POST http://localhost:8000/api/pokemon => create
// POST http://localhost:8000/src/API/pokemon/post.php => create



if (isset($_POST['name'])) {
    $repository = new PokemonRepository2();
    $pokemon = $repository->create(getBody());
    setHeader();
    setJsonResponse($pokemon);
}

// Renvoyer sous forme de JSON l'objet créé avec son ID