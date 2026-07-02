<?php

// GET http://localhost:8000/api/pokemon/5 => fetchById
// GET http://localhost:8000/src/API/get_pokemon.php?id=5 => fetchById

if (isset($_GET['id'])) {
    // Via PokemonRepository faire le fetchById
    $repository = new PokemonRepository();
    $pokemon = $repository->fetchById($_GET['id']);
}


// Serialiser en JSON les objets
// Les "renvoyer ?"