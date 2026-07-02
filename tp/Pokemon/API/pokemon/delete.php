<?php

use Pokemon\Repository\{PokemonRepository};

include_once __DIR__ . '/../../Repository/PokemonRepository.php';
include_once __DIR__ . "/../../../../src/Utility/utility.php";

// DELETE http://localhost:8000/api/pokemon/5 => deleteById
// DELETE http://localhost:8800000/src/API/get_pokemon.php?id=5 => deleteById

$httpMethod = $_SERVER['REQUEST_METHOD'];

if ($httpMethod === "DELETE" && isset($_GET['id']))  {
    // Via PokemonRepository faire le fetchById
    $repository = new PokemonRepository();
    if ($repository->deleteById($_GET['id'])) {
        header('Content-Type: application/json; charset=utf-8', false, 200);
    } else {
        header('Content-Type: application/json; charset=utf-8', false, 400);
        echo 'Id doesn\'t exist';
        return;
    }
}
else{
    header('Content-Type: application/json; charset=utf-8', false, 400);
    echo 'Bad request';
    return;
}