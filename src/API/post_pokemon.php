<?php

include __DIR__ . "/../include.php";


function getBody(): string{
    return json_encode(file_get_contents("php://input"));
}

// POST http://localhost:8000/api/pokemon => create
// POST http://localhost:8000/src/API/post_pokemon.php => create

$httpMethod = $_SERVER['REQUEST_METHOD'];

if ($httpMethod !== "POST") {
    header('Content-Type: application/json; charset=utf-8', false, 400);
    echo 'Bad request';
    return;
}


if (isset($_POST['name'])) {
    // Ajout en BDD
    $repository = new PokemonRepository();
    // j'ai besoin d'un array
    $pokemon = $repository->create(getBody());

    header('Content-Type: application/json; charset=utf-8', false, 200);

    echo json_encode($pokemon);
}

// Renvoyer sous forme de JSON l'objet créé avec son ID